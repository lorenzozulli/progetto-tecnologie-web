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
    public function searchOffers(Request $request)
    {
        $query = Offer::query();
        $viewData = Array();

        $companyQuery = $request->input("search_company");
        $offerQuery = $request->input("search_offer");

        if ($companyQuery != null)
        {
            $query->select("offers.*")
                    ->join("companies", "offers.id_azienda", "=", "companies.id")
                    ->where("companies.nome", "LIKE", "%" . $companyQuery . "%");

            $viewData['CompanyQuery'] = $companyQuery;
        }

        if ($offerQuery != null)
        {
            $query = $query->where(function($query) use ($offerQuery) {
                $query->where('offers.nome', 'LIKE', '%' . $offerQuery . '%')
                    ->orWhere('offers.oggetto', 'LIKE', '%' . $offerQuery . '%');
            });

            $viewData['offerQuery'] = $offerQuery;
        }

        //$offerList = $query->where('dataOraScadenza', '>', now())->paginate(12);
        $offerList = $query->paginate(12);
        $viewData['Offerte'] = $offerList;

        return view("cerca-offerta", $viewData);
}
}