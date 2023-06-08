<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModifiedOfferController extends Controller
{
    // Modifica un'Offerta già esistente
    public function updatePromo($idOfferta) {
        $id = Offer::where('id', $idOfferta)->first();
        $company = Company::all();
        return view('profiles.management.modifica-offerta', ['id'=>$id], compact('company'));
    }

    // Salva un'Offerta modificata
    public function store(Request $request, $id){
        $request->validate([ 
            'nome' => ['nullable', 'string'],
            'oggetto' => ['nullable', 'string'],
            'modalitaFruizione' => ['nullable', 'string'],
            'luogoFruizione' => ['nullable', 'string'],
            'id_azienda' => ['nullable', 'integer'],
            'dataOraScadenza' => ['nullable', 'date'],
        ]);

        $offer = Offer::where('id', $id)->first();

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

        if ($request->input('dataOraScadenza') != null) {
            $offer->dataOraScadenza = $request->input('dataOraScadenza');
        } else {
            $offer->dataOraScadenza = $offer->dataOraScadenza;
        }  

        $offer->save();

        return redirect('tabella-offerte');
    }
}
