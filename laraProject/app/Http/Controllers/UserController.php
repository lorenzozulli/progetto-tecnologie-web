<?php

namespace App\Http\Controllers;
use App\Models\User;

class UserController extends Controller {

    // Ritorna la dashboard dell'utente di tipo User
    public function index() {
        return view('profiles.user');
    }

    public function showUser(){
        $users = User::select()->paginate(12);

        return view('profiles.lista-user')->with('users', $users);
    }

    // Ritorna la vista per effettuare la modifica dei propri dati personali
    public function updateData(){
        return view('profiles.management.modifica-user');
    }

    //Creazione coupon
    public function creaCoupon($userId){
        
    }
}
