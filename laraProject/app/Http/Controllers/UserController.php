<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    // Ritorna la dashboard dell'utente di tipo User
    public function index() {
        return view('profiles.user');
    }

    // Ritorna la vista per effettuare la modifica dei propri dati personali
    public function updateData(){
        return view('profiles.management.modifica-user');
    }
}
