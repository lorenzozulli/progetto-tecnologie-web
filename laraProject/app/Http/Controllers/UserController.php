<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use App\Models\User;
use App\Models\Coupon;

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
    public function creaCoupon($id, $username){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = substr(str_shuffle($characters), 0, 10);
        $control = Offer::where('id', $id)->first();
        $user = User::where('username', $username)->first();
        //dd($randomString);
        $coupon = new Coupon;
        $coupon->user = $user->username;
        $coupon->id = $control->id;
        $coupon->codice = bcrypt($randomString);

        $coupon->save();
    }
}
