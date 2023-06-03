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

class ModifiedUserController extends Controller {
    /*
      public function __construct()
      {
      $this->middleware('auth');
      }
     */

    // Modifica del profilo User
    public function update() {
        return view('profiles.management.modifica-user');
    }

    // Salva l'utente che ha fatto modifiche al profilo
    public function store(Request $request) {
        $user = Auth::user();
        $datiUser = DB::table('users')->where('username', $user->username)->first();

        $request->validate([
            'username' => ['nullable', 'string', 'min:8', 'unique:users'],
            'nome' => ['nullable', 'string'],
            'cognome' => ['nullable', 'string', 'max:255'],
            'eta' => ['nullable', 'integer'],
            'genere' => ['nullable', 'string'],
            //'livello' => ['integer'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['nullable', 'string','max:10'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],     
        ]);
        
        
        // Modifica delle informazioni dell'utente
        if ($request->input('username') != null) {
            $user->username = $request->input('username');
        } else {
            $user->username = $datiUser->username;
        }

        if ($request->input('nome') != null) {
            $user->nome = $request->input('nome');
        } else {
            $user->nome = $datiUser->nome;
        }

        if ($request->input('cognome') != null) {
            $user->cognome = $request->input('cognome');
        } else {
            $user->cognome = $datiUser->cognome;
        }

        if ($request->input('eta') != null) {
            $user->eta = $request->input('eta');
        } else {
            $user->eta = $datiUser->eta;
        }

        if ($request->input('genere') != null) {
            $user->genere = $request->input('genere');
        } else {
            $user->genere = $datiUser->genere;
        }

        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        } else {
            $user->password = $datiUser->password;
        }

        if ($request->input('telefono') != null) {
            $user->telefono = $request->input('telefono');
        } else {
            $user->telefono = $datiUser->telefono;
        }

        if ($request->input('email') != null) {
            $user->email = $request->input('email');
        } else {
            $user->email = $datiUser->email;
        }
         
        $user->save();
         
        return redirect('user')->with('success', 'Informazioni modificate con successo!');
    }

}
