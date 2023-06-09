<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller {

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     // questa funzione esegue il login
    public function store(LoginRequest $request) {
        $request->authenticate();

        $request->session()->regenerate();

        /**
         * Redirezione su diverse Home Page in base alla classe d'utenza.
         */
        $livello = auth()->user()->livello;
        switch ($livello) {                       
            case 1: return redirect()->route('user'); 
                break;   
            case 2: return redirect()->route('staff');
                break;   
            case 3: return redirect()->route('admin');
                break;                
            default: return redirect('/');
        }
    }
    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     // questa funzione esegue il logout
    public function destroy(Request $request) {

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}