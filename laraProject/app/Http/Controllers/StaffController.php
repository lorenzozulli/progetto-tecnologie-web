<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;

class StaffController extends Controller
{
    //protected $role = User::where

    public function index()
    {
        return view('profiles.staff');
    }


    /* public function showData(){
    
        $user = Auth::user();
        if ($user->livello === 2){
            $staffData = User::all();
            return view('staff-data', ['user'=>$staffData]);
        }
    }

    //la variabile $request viene passata come parametro al metodo e rappresenta la richiesta fatta al server
   public function updateData(Request $request)
    {
      
        $user  = Auth::user();

        if ($user->livello === 2){
        // except rimuove il campo "username" dalla richiesta di aggiornamento e prende tutto il resto 
        $data = $request->except('username');

        $user->update($data);

        return redirect()->back()->with('staff', 'Dati staff aggiornati con successo.');}
    }*/
     

    public function addPromo()
    {
    
    }

    public function updatePromo() {
        return view('profiles.management.modifica-offerta');
    }

    public function store(Request $request){
        
        $request->validate([ // Secondo Errore
            'nome' => ['required', 'string'],
            'oggetto' => ['required', 'text'],
            'modalitaFruizione' => ['required', 'text'],
            'luogoFruizione' => ['required', 'text'],
        ]);

        $offer = Auth::offer(); 
        // Modifica delle informazioni dell'offerta
        if ($request->input('nome') != null) {
            $offer->username = $request->input('nome');
        }
        if ($request->input('oggetto') != null) {
            $offer->oggetto = $request->input('oggetto');
        }
        if ($request->input('modalitaFruizione') != null) {
            $offer->modalitaFruizione = $request->input('modalitaFruizione');
        }
        if ($request->input('luogoFruizione') != null) {
            $offer->luogoFruizione = $request->input('luogoFruizione');
        }

        $offer->save();

        return redirect('staff')->with('success', 'Informazioni modificate con successo!');
    }

     

    public function deletePromo()
    {
        
    }
}
