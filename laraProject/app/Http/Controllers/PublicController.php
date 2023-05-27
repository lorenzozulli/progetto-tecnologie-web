<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Offer;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

    //questa funzione mostra le offerte oppure puo mostrare l'offerta specifica. A seconda di come viene usato nella view
    public function showListaOfferte(){
        $offers = Offer::select()->paginate(3); // da aggiornare a 12

        return view('lista-offerte')
        ->with('offers', $offers);
      
    }

    public function showListaAziende(){
        $companies = Company::select()->paginate(3); // da aggiornare a 12

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

    public function showOffer($nome){
        $offer = Offer::where('nome', $nome)->first();
        //dd($offer);
        return view ('offerta', ['offer'=>$offer]);
    }

    public function showListaAziendePerCategoria($tipologia){
        $companies = Offer::where('tipologia', $tipologia)->paginate(3); // da aggiornare a 12

        return view('lista-aziende')
        ->with('companies', $companies);
      
    }

   
}
