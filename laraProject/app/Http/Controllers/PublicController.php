<?php

namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Coupon;
use App\Models\Offer;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Request;


class PublicController extends Controller
{

    //  Mostra tutte le Offerte
    public function showListaOfferte(){
        
        $activeOffers = Offer::orderBy('id_azienda')->paginate(12);
      
        $allCompanies = Company :: all();
        return view('lista-offerte', compact('activeOffers'), compact('allCompanies'));
       
      
    }

    // Mostra tutte le Aziende
    public function showListaAziende(){
        $companies = Company::select('*')->paginate(12);

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
    public function showOffer($id){
        $offer = Offer::where('id', $id)->first();
        $coupon_count = Coupon::where('id_offerta', $id)->count();
       
        return view ('offerta', ['offer'=>$offer], compact('coupon_count'));
    }

    // Mostra la singola Azienda
    public function showCompany($nome){
        $company = Company::where('nome', $nome)->first();
        $offers = Offer::all();

        return view ('azienda', ['company'=>$company], compact('offers'));
    }
    
    // Mostra soltanto le Aziende della tipologia specificata
    public function showListaAziendePerTipologia($tipologia){
        $companies = Company::query()->where('tipologia','=', $tipologia)->paginate(12);

        return view('lista-aziende', compact('companies'));
    }
    
    // Barra di ricerca, ricerca offerte sia per nome e descrizione, che per azienda
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

        $offerList = $query->paginate(12);
        $viewData['Offerte'] = $offerList;

        return view("cerca-offerta", $viewData);
}

public function search(Request $request)
    {
        // Ottieni i dati di ricerca dalla richiesta
        $query = $request->input('query');

        // Effettua la logica di ricerca e ottieni i risultati
        $results = Offer::where('nome', 'like', "%$query%")
                        ->orWhere('oggetto', 'like', "%$query%")
                        ->get();

        // Restituisci solo i dati di ricerca come risposta JSON
        return response()->json($results);
    }

public function offerListAjax(){     
    //Ottiene i dati richiesti
    $offers = Offer::select('nome')->get();
    //crea array vuoto
    $data = [];

    //per ogni offerta in offerte, va a riempire l'array con il nome dell'offerta
    foreach($offers as $offer){
        $data[] = $offer->nome;
    }
    //ritorna l'array che verrà poi passato nella chiamata AJAX
    return $data;
}

//funziona allo stesso modo della funzione precedente 
public function companyListAjax(){
    $companies = Company::select('nome')->get();
    $data = [];

    foreach($companies as $company){
        $data[] = $company->nome;
    }
    return $data;
}
}