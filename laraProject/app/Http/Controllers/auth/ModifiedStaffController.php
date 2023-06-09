<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ModifiedStaffController extends Controller {
    /*
      public function __construct()
      {
      $this->middleware('auth');
      }
     */

    // questa funzione riporta ad una vista che permette fi inserire i nuovi dati del profilo Staff
    public function update($username, $livellochemodifca) {
        $staff = User::where('username', $username)->first();
        $admin = User::where('livello', $livellochemodifca)->first();
        
        //dd($staff);//staff che viene modificato
        //dd($admin);//admin che modifica
        return view('profiles.management.modifica-staff', ['username'=>$staff], ['livello'=>$admin]);
    }

    // questa funzione salva il membro dello staff modificato
    public function store(Request $request, $username, $livellochemodifca) {
        
        $datiStaff = DB::table('users')->where('username', $username)->first();
        $request->validate([
            'username' => ['nullable', 'string', 'min:8', 'unique:users'],
            'nome' => ['nullable', 'string'],
            'cognome' => ['nullable', 'string', 'max:255'],
            'eta' => ['nullable', 'integer', 'min:18', 'max:130'],
            'genere' => ['nullable', 'string'],
            'password' => ['nullable', Rules\Password::defaults()],
            'telefono' => ['nullable', 'string','min:10','max:10', 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        // Modifica delle informazioni dello staff da parte di un utente di livello 2
        if($livellochemodifca == 2){
        $user = Auth::user();

        if ($request->input('nome') != null) {
            $user->nome = $request->input('nome');
        } else {
            $user->nome = $datiStaff->nome;
        }

        if ($request->input('cognome') != null) {
            $user->cognome = $request->input('cognome');
        } else {
            $user->cognome = $datiStaff->cognome;
        }

        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        } else {
            $user->password = $datiStaff->password;
        }

        $user->save();

        return redirect('staff')->with('success', 'Informazioni modificate con successo!');
        }
        
        // Modifica delle informazioni dello staff da parte di un utente di livello 3
        if($livellochemodifca == 3){

            $user = User::where('username', $username)->first();

            if ($request->input('nome') != null) {
                $user->nome = $request->input('nome');
            } else {
                $user->nome = $datiStaff->nome;
            }    

            if ($request->input('cognome') != null) {
                $user->cognome = $request->input('cognome');
            } else {
                $user->cognome = $datiStaff->cognome;
            }   
            
            if ($request->input('genere') != null) {
                $user->genere = $request->input('genere');
            } else {
                $user->genere = $datiStaff->genere;
            }   
            
            if ($request->input('eta') != null) {
                $user->eta = $request->input('eta');
            } else {
                $user->eta = $datiStaff->eta;
            }   
            
            if ($request->input('email') != null) {
                $user->email = $request->input('email');
            } else {
                $user->email = $datiStaff->email;
            }   
            
            if ($request->input('telefono') != null) {
                $user->telefono = $request->input('telefono');
            } else {
                $user->telefono = $datiStaff->telefono;
            }   
            
            if ($request->input('username') != null) {
                $user->username = $request->input('username');
            } else {
                $user->username = $datiStaff->username;
            }   
            
            if ($request->input('password') != null) {
                $user->password = Hash::make($request->input('password'));
            } else {
                $user->password = $datiStaff->password;
            }   
            
            $user->save();

        return redirect('tabella-utenti')->with('success', 'Informazioni modificate con successo!');
        }
               
        
    }

}
