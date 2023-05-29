<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class ModifiedOfferController extends Controller
{
    public function updatePromo() {
        return view('profiles.management.modifica-offerta');
    }

    public function store(Request $request){
        $request->validate([ 
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'string'],
            'modalitaFruizione' => ['required', 'string'],
            'luogoFruizione' => ['required', 'string'],
            'id_azienda' => ['required', 'integer'],
        ]);

        $offer = Offer::where('id_azienda', $request->id_azienda)->first();
        
        // Modifica delle informazioni dell'offerta
        if ($request->input('id_azienda') != null) {
            $offer->id_azienda = $request->input('id_azienda');
        }
        if ($request->input('nome') != null) {
            $offer->nome = $request->input('nome');
        }
        if ($request->input('oggetto') != null) {
            $offer->oggetto = $request->input('oggetto');
        }
        if ($request->input('modalitaFruizione') != null) {
            $offer->modalitaFruizione = $request->input('modalitaFruizione');
        }
        if ($request->input('luogoFruizione') != null) {
            $offer->luogoFruizione = $request->input('luogoFruizione');
        }   

        $offer->save();

        return redirect('staff')->with('success', 'Informazioni modificate con successo!');
    }

     

    public function deletePromo()
    {
        
    }

}
