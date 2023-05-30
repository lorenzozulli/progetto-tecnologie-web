<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Offer;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;


class PublicController extends Controller
{

    //  Mostra tutte le Offerte
    public function showListaOfferte(){
        $offers = Offer::select()->paginate(12);

        return view('lista-offerte')
        ->with('offers', $offers);
      
    }

    // Mostra tutte le Aziende
    public function showListaAziende(){
        $companies = Company::select()->paginate(12);

        return view ('lista-aziende')
        ->with('companies', $companies);
    }

    // Mostra tutte le Faq
    public function showFaq(){
        $faqs= Faq::all();
       
        return view('faq')
        ->with('faqs', $faqs);
    }

    // Mostra la singola Offerta
    public function showOffer($nome){
        $offer = Offer::where('nome', $nome)->first();
        //dd($offer);
        return view ('offerta', ['offer'=>$offer]);
    }

    // Mostra la singola Azienda
    public function showCompany($nome){
        $company = Company::where('nome', $nome)->first();
        //dd($company);
        return view ('azienda', ['company'=>$company]);
    }
    
    // Mostra soltanto le Aziende della tipologia specificata
    public function showListaAziendePerTipologia($tipologia){
        $companies = Company::where('tipologia', $tipologia)->paginate(12);
        // dd($companies);
        return view('lista-aziende')
        ->with('companies', $companies);     
    }
    
    // Ricerca di un'Offerta
    public function searchOffer(Request $request){
        if($request->search){
            $searchProducts = Offer::where('nome', 'LIKE','%'.$request->search.'%')->paginate(12);
            $searchProducts = Offer::where('oggetto', 'LIKE','%'.$request->search.'%')->paginate(12);
            return view('cerca-offerta', compact('searchProducts'));
        }else{
            return redirect()->back()->with('message', 'Empty search!');
        }

    }

    // Ricerca di un'Azienda
    public function searchCompany(Request $request){
        if($request->search){
            $searchProducts = Company::where('nome', 'LIKE','%'.$request->search.'%')->paginate(12);
            return view('cerca-azienda', compact('searchProducts'));
        }else{
            return redirect()->back()->with('message', 'Empty search!');
        }
    }
}
