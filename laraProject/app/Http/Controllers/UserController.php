<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function index() {
        return view('profiles.user');
    }

    public function updateData(){
        
    return view('profiles.management.modifica-user');
    }

    public function store(){
        return view('profiles.user');
        }

}
