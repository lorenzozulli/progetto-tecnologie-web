<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\NewProductRequest;
use App\Models\Faq;
use App\Models\Offer;
use App\Models\Coupon;
use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Text;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Symfony\Component\Mime\Message;

class AdminController extends Controller
{

    protected $_adminModel;

    // Ritorna la dashboard di tipo Admin
    public function index()
    {
        return view('profiles.admin');
    }

    //funzione che permette di eliminare un utente di livello 1
    public function deleteUser($username)
    {

        $user = User::FindOrFail($username);
        $user->delete();

        return redirect('tabella-utenti');
    }

    // Questa funzione elimina un'azienda
    public function deleteAzienda($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect('tabella-aziende');
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

    // salva i dati dell'azienda appena creata
    public function storeAzienda(Request $request)
    {
        if($request->hasFile('logo-azienda')) {
            $logo_azienda = $request->file('logo-azienda');
            $imageNome = $logo_azienda->getClientOriginalName();
        } else {
            $imageNome = NULL;
        }

        $request->validate([
            'nome' => ['required', 'string', 'unique:companies'],
            'descrizione' => ['required', 'string', 'max:255'],
            'ragioneSociale' => ['required', 'string', 'unique:companies'],
            'tipologia' => ['required', 'string'],
            'logo' => ['nullable', 'string'],
        ]);

        Company::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'ragioneSociale' => $request->ragioneSociale,
            'tipologia' => $request->tipologia,
            'logo' => '/images/loghi-aziende/'.$imageNome,

        ]);

        if(!is_null($imageNome)){
            $destination = public_path().'/images/loghi-aziende';
            $logo_azienda->move($destination, $imageNome);
        }

        return redirect('tabella-aziende')->with('success', 'Nuova azienda memorizzata con successo!');
    }


    //questa funzione permette di vedere la tabella delle aziende
    public function showtabellaAziende()
    {
        $Companies = Company::all();
        return view('profiles.management.tabella-aziende', compact('Companies'));
    }

    //questa funzione permette di vedere la tabella degli utenti
    public function showtabellaUtenti()
    {
        $Users = User::all();
        return view('profiles.management.tabella-utenti', compact('Users'));
    }

    //crea un membro dello staff
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

    //questa funzione salva i dati dell'utente di livello 2 appena creato
    public function storeStaff(Request $request)
    {

        $request->validate([
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer', 'min:18', 'max:130'],
            'genere' => ['required', 'string'],
            'livello' => ['integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','min:10','max:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $livello = 2;
        //dd($request->username);
        //dd($request->email);
        if($request->username != $request->email){
            $user = User::create([
                'username' => $request->username,
                'nome' => $request->nome,
                'cognome' => $request->cognome,
                'eta' => $request->eta,
                'genere' => $request->genere,
                'livello' => $livello,
                'password' => Hash::make($request->password),
                'telefono' => $request->telefono,
                'email' => $request->email,
            ]);
        } else {
            return redirect()->back()->withErrors(['error' => 'Lo username deve essere diverso dall\'e-mail']);
        }

        if(str_contains($request->username, '@')){
            return redirect()->back()->withErrors(['error' => 'Lo username non può essere contenere carattere @']);
        }

        event(new Registered($user));


        return redirect('tabella-utenti');
    }


    public function viewStaff($username)
    {
        $user = User::where('username', $username)->first();

        return view('staff-view', ['user' => $user])->with('success');
    }


    //crea una FAQ
    public function createFaq()
    {
        return view('profiles.management.aggiunta-faq');
    }

    //slava i dati della FAQ appena creata
    public function storeFaq(Request $request)

    {
        $request->validate([
            'domanda' => ['required', 'string', 'max:255', 'unique:faqs'],
            'risposta' => ['required', 'string'],

        ]);

        Faq::create([
            'domanda' => $request->domanda,
            'risposta' => $request->risposta,

        ]);
        return redirect('tabella-faq');
    }

    //elimina una FAQ
    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect('tabella-faq');
    }

    //questa funzione permette di vedere la tabella delle FAQ
    public function showtabellaFaq()
    {
        $Faqs = Faq::all();
        return view('profiles.management.tabella-faq', compact('Faqs'));
    }

    //modifica le FAQ
    public function updateFaq($id)
    {
        return view('profiles.management.modifica-faq', ['id' => $id]);
    }

    //salva i dati della FAQ appena modificata
    public function storeFaqs(Request $request, $id)
    {
        $request->validate([                // validate mi permette di validare i campi riempiti 
            'domanda' => ['nullable', 'string', 'max:255', 'unique:faqs'],
            'risposta' => ['nullable', 'string', 'unique:faqs'],
        ]);

        $idFaq = Faq::where('id', $id)->first();            //ricerca la FAQ CON L'id passato come parametro, e prende il primo che trova 

        if ($request->input('domanda') != null) {                          
            $idFaq->domanda = $request->input('domanda');
        } else {
            $idFaq->domanda = $idFaq->domanda;
        }

        if ($request->input('risposta') != null) {
            $idFaq->risposta = $request->input('risposta');
        } else {
            $idFaq->risposta = $idFaq->risposta;
        }

        $idFaq->save();
        return redirect('tabella-faq')->with('success', 'faq modificata con successo!');
    }

    //questa funzione conta i coupon acquisiti da un determinato utente
    public function contaCoupon($user)
    {
        $coupon_user = DB::table('coupons')->where('user', $user)->count();
        $datiUtente = User::where('username', $user)->first();
        return view('profiles.management.info-utente', compact('datiUtente'),  compact('coupon_user'));

    }

    //questa funzione conta tutti i coupon
    public function contatoreCoupon() // e li passa allo script Javascript 
    {
        $coupons = Coupon::all();
        $nCoupon = count($coupons);             // conta i coupon totali...

        return  $nCoupon;   // e passa la variabile ad AJAX
    }
 
}
