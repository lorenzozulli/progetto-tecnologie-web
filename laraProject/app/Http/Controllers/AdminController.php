<?php

namespace App\Http\Controllers; 

use App\Models\Admin;
use App\Http\Requests\NewProductRequest;
use App\Models\Faq;
use App\Models\Coupon;
use App\Models\User;
use App\Models\Company;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminController extends Controller {

   protected $_adminModel;

   // Ritorna la dashboard di tipo Admin
    public function index() {
        return view('profiles.admin');
    }

    /*public function getGo(Request $request){
        $company->logo = $request->file('logo')->openFile()->fread($request->file('logo')->getSize());
    }*/

    public function show() {
        return view('profiles.lista-user');
    }

    public function showStaff() {
        
        $users = User::select()->paginate(12);

        return view('profiles.lista-staff')->with('users', $users);
    }

    public function deleteUser($username)
    {
        //dd($username);
        $user = User::FindOrFail($username);
        //dd($user);
        $user->delete();

        return redirect()->route('admin');
    }

    public function deleteAzienda($id)
    {
        //dd($request);
        $company = Company::findOrFail($id);
        //dd($offer);
        $company->delete();
       
        return redirect()->route('lista-aziende');
    }

    //creazione di un'azienda
    public function createAzienda()
    {   
        return view('profiles.management.aggiunta-azienda');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeAzienda(Request $request)
    {   

        $request->validate([
            'nome' => ['required', 'string'],
            'descrizione' => ['required', 'string', 'max:255'],
            'ragioneSociale' => ['required', 'string'],
            'tipologia' => ['required', 'string'],
            'logo' => ['nullable', 'string'],   
        ]);
        //dd($request);

        if ($request->logo) {
            $logo = $request->logo;
        } else {
            $logo = 'images/loghi-aziende/non_disponibile.png';
        }
        //dd($logo);

        Company::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'ragioneSociale' => $request->ragioneSociale,
            'tipologia' => $request->tipologia,
            'logo' =>$logo,
            
        ]);

        //dd($request);
        return redirect()->route('lista-aziende');
       
    }

    public function createStaff()
    {   
        return view('profiles.management.aggiunta-staff');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeStaff(Request $request)
    {   

        $request->validate([
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer'],
            'genere' => ['required', 'string'],
            'livello' => ['integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],   
        ]);
        
        $logo = 2;      

        $user = User::create([
            'username' => $request->username,
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'eta' => $request->eta,
            'genere' => $request->genere,
            'livello' =>$logo,
            'password' => Hash::make($request->password),
            'telefono' =>$request->telefono,
            'email' => $request->email,
        ]);
    

        event(new Registered($user));


        return redirect()->route('lista-staff');
       
    }

    public function viewStaff($username){
        $user = User::where('username', $username)->first();
        //dd($user);
        
        return view ('staff-view', ['user'=>$user])->with('success');
    }
    
    

public function createFaq()
    {    
        return view('profiles.management.aggiunta-faq');
    }
    public function storeFaq(Request $request)

    {   
            $request->validate([
            'domanda' => ['required', 'string', 'max:255'],
            'risposta' => ['required', 'string'],
           
             ]);
        
        Faq::create([
            'domanda' => $request->domanda,
            'risposta' => $request->risposta,
            
        ]);

        

        return redirect()->route('aggiunta-faq');
       
    }

    public function deleteFaq($id)
    {    
        $faq= Faq::findOrFail($id);
        $faq->delete();
        return redirect()->route('tabella-faq');
    }
   
    public function showtabellaFaq()
    {   
       $Faqs= Faq::all();
       return view('profiles.management.tabella-faq', compact('Faqs') );
    }

    public function updateFaq($id)
    {       
        //$idFaq = Faq::where('id' == $id)->first();
        return view('profiles.management.modifica-faq', ['id'=>$id]);
    }

    public function storeFaqs(Request $request, $id)

    {   
            $request->validate([
            'domanda' => ['required', 'string', 'max:255'],
            'risposta' => ['required', 'string'],
           
             ]);
        
       $idFaq = Faq::where('id', $id)->first();
       if($request->input('domanda')!=null){
       $idFaq-> domanda =$request->input('domanda');

    }
        
      if($request->input('risposta')!=null){
      $idFaq-> risposta =$request->input('risposta');

    }
       $idFaq-> save(); 
    
     return redirect('admin')->with('success', 'faq modificata con successo!');
       
    }

    public function contaCoupon($user){
        //questa funzione riporta il numero di cupon acquisiti da un detereminato utente
        $couponSpecifico = Coupon::where('user', $user)->get();
        $coupon_count = count($couponSpecifico);
        echo $user." ha acquisito ".$coupon_count." coupon.";
        

        // questa funzione riporta il numero totali di cupon acquisiti da tutti gli utenti
        /*$couponList= Coupon::all();
        $coupon_count = count($couponList);
        echo "In totale sono stati acquisiti ".$coupon_count." coupon.";*/
       
    }

    public function contatoreCoupon(){
        $coupons = Coupon::all();
        $nCoupon = count($coupons); 

        return  $nCoupon;

    }
} 