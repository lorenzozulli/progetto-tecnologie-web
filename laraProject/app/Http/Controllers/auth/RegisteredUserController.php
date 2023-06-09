<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    // questa funzione crea un nuovo utente
    public function create()
    {   
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

     // questa funzione salva i deti del nuovo utente
    public function store(Request $request)
    {   

        $request->validate([
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer', 'min:18', 'max:130'],
            'genere' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','min:10','max:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],     
        ]);
        
        //controlli email
        if ($request->username == $request->email){
            return redirect()->back()->withErrors(['error' => 'Lo username deve essere diverso dall\'e-mail']);
        }
        if(str_contains($request->username, '@')){
            return redirect()->back()->withErrors(['error' => 'Lo username non può essere contenere carattere @']);
        }

        if($request->username != $request->email){
            $user = User::create([
                'username' => $request->username,
                'nome' => $request->nome,
                'cognome' => $request->cognome,
                'eta' => $request->eta,
                'genere' => $request->genere,
                'password' => Hash::make($request->password),
                'telefono' =>$request->telefono,
                'email' => $request->email,
            ]);
            event(new Registered($user));

            Auth::login($user);

            return redirect(RouteServiceProvider::USER);
        } 

    }
}
