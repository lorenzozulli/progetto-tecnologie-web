<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coupon;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ModifiedUserController extends Controller {

    // Modifica del profilo User
    public function update() {
        //dd($user); //username
        return view('profiles.management.modifica-user');
    }

    // Salva i nuovi dati dell'utente di livello 1
    public function store(Request $request) {
        
        $user = Auth::user();

        $request->validate([
            'nome' => ['nullable', 'string'],
            'cognome' => ['nullable', 'string', 'max:255'],
            'eta' => ['nullable', 'integer', 'min:18','max:130'],
            'genere' => ['nullable', 'string'],
            'password' => ['nullable', Rules\Password::defaults()],
            'telefono' => ['nullable', 'string','min:10','max:10', 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],     
        ]);

        // Modifica delle informazioni dell'utente
        if ($request->input('nome') != null) {
            $user->nome = $request->input('nome');
        }

        if ($request->input('cognome') != null) {
            $user->cognome = $request->input('cognome');
        }

        if ($request->input('eta') != null) {
            $user->eta = $request->input('eta');
        }

        if ($request->input('genere') != null) {
            $user->genere = $request->input('genere');
        }

        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        }

        if ($request->input('telefono') != null) {
            $user->telefono = $request->input('telefono');
        }

        if ($request->input('email') != null) {
            $user->email = $request->input('email');
        }

        $user->save();
         
        return redirect('/user')->with('success', 'Informazioni modificate con successo!');
    }

}
