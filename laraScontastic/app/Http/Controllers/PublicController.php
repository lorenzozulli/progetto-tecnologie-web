<?php

namespace App\Http\Controllers;


use App\Models\Faq;
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

    public function showFaq(){
        $faqs= Faq::all();
       
        return view('faq')
        ->with('faqs', $faqs);
    }

   
}
