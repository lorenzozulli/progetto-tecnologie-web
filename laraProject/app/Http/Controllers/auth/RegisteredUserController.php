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
    public function store(Request $request)
    {   

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
        $user = User::create([
            'username' => $request->username,
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'eta' => $request->eta,
            'genere' => $request->genere,
            //'livello' =>$request->livello,
            'password' => Hash::make($request->password),
            'telefono' =>$request->telefono,
            'email' => $request->email,
        ]);
        
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::USER);
       
    }
}
