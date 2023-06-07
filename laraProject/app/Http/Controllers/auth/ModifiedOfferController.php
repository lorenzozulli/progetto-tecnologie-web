<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModifiedOfferController extends Controller
{
    // Modifica un'Offerta già esistente
    public function updatePromo($idOfferta) {
        $id = Offer::where('id', $idOfferta)->first();
        return view('profiles.management.modifica-offerta', ['id'=>$id]);
    }

    // Salva un'Offerta modificata
    public function store(Request $request, $id){
        //dd($id);
        $request->validate([ 
            'nome' => ['nullable', 'string'],
            'oggetto' => ['nullable', 'string'],
            'modalitaFruizione' => ['nullable', 'string'],
            'luogoFruizione' => ['nullable', 'string'],
            'id_azienda' => ['nullable', 'integer'],
        ]);

        $offer = Offer::where('id', $id)->first();
        //dd($id);
       // dd($request);
        // Modifica delle informazioni dell'offerta
        if ($request->input('id_azienda') != null) {
            $offer->id_azienda = $request->input('id_azienda');
        } else {
            $offer->id_azienda = $offer->id_azienda;
        }

        if ($request->input('nome') != null) {
            $offer->nome = $request->input('nome');
        } else {
            $offer->nome = $offer->nome;
        }
        
        if ($request->input('oggetto') != null) {
            $offer->oggetto = $request->input('oggetto');
        } else {
            $offer->oggetto = $offer->oggetto;
        }
        
        if ($request->input('modalitaFruizione') != null) {
            $offer->modalitaFruizione = $request->input('modalitaFruizione');
        } else {
            $offer->modalitaFruizione = $offer->modalitaFruizione;
        }
        
        if ($request->input('luogoFruizione') != null) {
            $offer->luogoFruizione = $request->input('luogoFruizione');
        } else {
            $offer->luogoFruizione = $offer->luogoFruizione;
        }   
        
        //dd($offer);
        $offer->save();
        //dd($offer);
        return redirect('tabella-offerte');
    }

     
    // Elimina un'Offerta esistente
    public function deletePromo()
    {
        
    }

}
