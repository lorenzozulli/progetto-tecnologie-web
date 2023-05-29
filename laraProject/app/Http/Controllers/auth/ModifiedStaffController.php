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

class ModifiedStaffController extends Controller {
    /*
      public function __construct()
      {
      $this->middleware('auth');
      }
     */

    // Modifica del profilo Staff
    public function update() {
        return view('profiles.management.modifica-staff');
    }

    // Salva l'utente che ha fatto modifiche al profilo
    public function store(Request $request) {
        $request->validate([
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Auth::user();
        // Modifica delle informazioni dello staff
        if ($request->input('nome') != null) {
            $user->nome = $request->input('nome');
        }
        if ($request->input('cognome') != null) {
            $user->cognome = $request->input('cognome');
        }
        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
        }
               
        $user->save();

        return redirect('staff')->with('success', 'Informazioni modificate con successo!');
    }

}
