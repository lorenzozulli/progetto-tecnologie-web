<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Offer;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class StaffController extends Controller
{

    public function index()
    {
        return view('profiles.staff');
    }
     
    // questa funzione aggiunge un'offerta
    public function addPromo()
    {
        $company = Company::all();
        return view('profiles.management.aggiunta-offerta', compact('company'));
    
    }

    //questa funzione valida un'offerta
    public function storePromo(Request $request)
    {   
        if($request->hasFile('immagine-offerta')) {
            $immagine_offerta = $request->file('immagine-offerta');
            $imageNome = $immagine_offerta->getClientOriginalName();
        } else {
            $imageNome = NULL;
        }

        $request->validate([
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'string'],
            'id_azienda' => ['required', 'integer'],
            'modalitaFruizione' => ['required', 'string'],
            'luogoFruizione' => ['required', 'string'],
            'immagine' => ['nullable', 'string'],
            'dataOraScadenza' => ['required', 'date'],
           
        ]);

        Offer::create([
            'nome' => $request->nome,
            'oggetto' => $request->oggetto,
            'id_azienda' => $request->id_azienda,
            'modalitaFruizione' => $request->modalitaFruizione,
            'luogoFruizione' => $request->luogoFruizione,
            'immagine' => '/images/immagini-offerte/'.$imageNome,
            'dataOraScadenza' => $request->dataOraScadenza,
        ]);

        if(!is_null($imageNome)){
            $destination = public_path().'/images/immagini-offerte';
            $immagine_offerta->move($destination, $imageNome);
        }
    
        return redirect('tabella-offerte')->with('success', 'Nuova offerta memorizzata con successo!');
    }     
     
    //questa funzione elimina un'offerta
    public function deletePromo($id)
    {
        $offer = Offer::findOrFail($id);
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