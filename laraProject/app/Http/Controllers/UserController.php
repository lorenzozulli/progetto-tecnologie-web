<?php

namespace App\Http\Controllers;


use App\Models\Offer;
use App\Models\Coupon;
use App\Models\User;
use App\Models\Company;

class UserController extends Controller
{

    // Ritorna la dashboard dell'utente di tipo User
    public function index()
    {
        
        $coupons = Coupon::all();
        $offers = Offer::all();
        $companies = Company::all();
        
        return view('profiles.user', compact('coupons', 'offers', 'companies'));
    }

    //Creazione coupon
    public function creaCoupon($id, $username)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = substr(str_shuffle($characters), 0, 10); //codice
        $control = Offer::where('id', $id)->first();             //offerta
        $username = User::where('username', $username)->first(); //user

        $coupon = new Coupon;
        $coupon->user = $username->username;
        $coupon->id_offerta = $control->id;
        $coupon->codice = $randomString;
        //controlla che l'username non abbia già un id_offerta associato
        $existingCoupon = Coupon::where('user', $username->username)
            ->where('id_offerta', $control->id)
            ->first();
        if ($existingCoupon) {
            return redirect()->back()
                ->withErrors(["error" => "Hai già un coupon per questa offerta! vai nella tua dashboard per visualizzare tutti i tuoi coupon"]);
        }
        $coupon->save();
        return view('profiles.coupon-acquisito', ['coupon' => $coupon])->with('success');
    }
}
