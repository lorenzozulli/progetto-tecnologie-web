<?php

namespace App\Http\Controllers;


use App\Models\Catalog;
use App\Models\Resources\Offerta;
use App\Models\Resources\Azienda;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    //questa funzione mostra le offerte oppure puo mostrare l'offerta specifica. A seconda di come viene usato nella view
    public function showOfferList(){
        //$offerte = Offerta::getOffer();
        //In questo caso, il metodo compact crea un array associativo chiamato 'offerte', con tutti gli elementi 
        //presenti nella tabella "Offerta". 
        return view('lista-offerte');
    }

    public function showListaAziende(){
       /* $listaAziende = Azienda::getAzienda();*/
        return view ('lista-aziende');
    }

   
}
