<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewProductRequest;

use App\Models\Offer;

use App\Models\User;


use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;



class StaffController extends Controller
{

    public function index()
    {
        return view('profiles.staff');
    }
     
    // questa funzione aggiunge un'offerta
    public function addPromo()
    {
        return view('profiles.management.aggiunta-offerta');
    
    }

    //questa funzione valida un'offerta
    public function storePromo(Request $request)
    {   
        $request->validate([
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'string'],
            'modalitaFruizione' => ['required', 'string'],
            'luogoFruizione' => ['required', 'string'],
            'dataOraScadenza' => ['required', 'date'],
           
        ]);

        Offer::create([
            'nome' => $request->nome,
            'oggetto' => $request->oggetto,
            'id_azienda' => $request->id_azienda,
            'modalitaFruizione' => $request->modalitaFruizione,
            'luogoFruizione' => $request->luogoFruizione,
            'dataOraScadenza' => $request->dataOraScadenza,
        ]);
    
        return redirect('tabella-offerte')->with('success', 'Nuova offerta memorizzata con successo!');
    }     
     
    //questa funzione elimina un'offerta
    public function deletePromo($id)
    {
        //dd($request);
        $offer = Offer::findOrFail($id);
        //dd($offer);
        $offer->delete();
       
        return redirect()->route('tabella-offerte');
    }
         
    //questa funzione visualizza la tabella delle offete
    public function showtabellaOfferte()
    {   
        $activeOffers = Offer::where('dataOraScadenza', '>', now())->get();
        
        return view('profiles.management.tabella-offerte', compact('activeOffers') );
    }

}