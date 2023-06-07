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

        $request->validate([
            'username' => ['nullable', 'string', 'min:8', 'unique:users'],
            'nome' => ['nullable', 'string'],
            'cognome' => ['nullable', 'string', 'max:255'],
            'eta' => ['nullable', 'integer', 'min:18'],
            'genere' => ['nullable', 'string'],
            'password' => ['nullable', Rules\Password::defaults()],
            'telefono' => ['nullable', 'string','min:10','max:10', 'unique:users'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],     
        ]);
        
        
        // Modifica delle informazioni dell'utente
        if ($request->input('username') != null) {
            $user->username = $request->input('username');
        }

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
         
        return redirect('user')->with('success', 'Informazioni modificate con successo!');
    }

}
