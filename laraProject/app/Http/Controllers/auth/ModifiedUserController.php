<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ModifiedUserController extends Controller {
    /*
      public function __construct()
      {
      $this->middleware('auth');
      }
     */

    public function update() {
        return view('profiles.management.modifica-user');
    }

    public function store(Request $request) {
        $request->validate([
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer'],
            'genere' => ['required', 'string'],
            //'livello' => ['integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],     
        ]);

        $user = Auth::user();
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

        return redirect()->back()->with('success', 'Informazioni modificate con successo!');
    }

}
