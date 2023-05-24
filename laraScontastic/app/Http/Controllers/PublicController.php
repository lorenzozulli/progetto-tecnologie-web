<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Offer;
use App\Models\Company;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    //questa funzione mostra le offerte oppure puo mostrare l'offerta specifica. A seconda di come viene usato nella view
    public function showOfferList(){
        $offers = Offer::all();
        //In questo caso, il metodo compact crea un array associativo chiamato 'offerte', con tutti gli elementi 
        //presenti nella tabella "Offerta". 
        return view('lista-offerte')
        ->with('offers', $offers);
    }

    public function showListaAziende(){
        $companies = Company::all();
        return view ('lista-aziende')
        ->with('companies', $companies);
    }

    public function showFaq(){
        $faqs= Faq::all();
       
        return view('faq')
        ->with('faqs', $faqs);
    }

    public function showCompany($nome){
        $company = Company::where('nome', $nome)->first();
        //dd($company);
        return view ('azienda', ['company'=>$company]);

    }

   
}
