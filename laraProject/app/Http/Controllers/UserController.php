<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use App\Models\Coupon;
use App\Models\User;

class UserController extends Controller
{

    // Ritorna la dashboard dell'utente di tipo User
    public function index()
    {
        return view('profiles.user');
    }

    public function showUser()
    {
        $users = User::select()->paginate(12);

        return view('profiles.lista-user')->with('users', $users);
    }

    // Ritorna la vista per effettuare la modifica dei propri dati personali
    public function updateData()
    {
        return view('profiles.management.modifica-user');
    }

    //Creazione coupon
    public function creaCoupon($id, $username)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = substr(str_shuffle($characters), 0, 10); //codice
        $control = Offer::where('id', $id)->first();             //offerta
        $username = User::where('username', $username)->first(); //user

        //dd($control->id);

        $coupon = new Coupon;
        $coupon->user = $username->username;
        $coupon->id_offerta = $control->id;
        $coupon->codice = $randomString;
        //dd($coupon);
        //controlla che l'username non abbia già un id offerta associato
        $existingCoupon = Coupon::where('user', $username->username)
            ->where('id', $control->id)
            ->first();
        if ($existingCoupon) {
            return redirect()->back()
                ->withErrors(["error" => "Hai già un coupon per questa offerta!"]);
        }
        $coupon->save();
        return view('profiles.coupon-acquisito', ['coupon' => $coupon])->with('success');
    }

    public function showCoupon($username){
        $user = User::where('user', $username)->first();
        $coupon = Coupon::all();

        return;
    }
}
