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
    public function storeAzienda(Request $request)
    {
        $request->validate([
            'nome' => ['required', 'string'],
            'descrizione' => ['required', 'string', 'max:255'],
            'ragioneSociale' => ['required', 'string'],
            'tipologia' => ['required', 'string'],
            'logo' => ['nullable', 'string'],
        ]);

        if ($request->logo) {
            $logo = $request->logo;
        } else {
            $logo = 'images/loghi-aziende/non_disponibile.png';
        }

        Company::create([
            'nome' => $request->nome,
            'descrizione' => $request->descrizione,
            'ragioneSociale' => $request->ragioneSociale,
            'tipologia' => $request->tipologia,
            'logo' => $logo,

        ]);

        return redirect('tabella-aziende')->with('success', 'Nuova azienda memorizzata con successo!');
    }

    public function showtabellaAziende()
    {
        $Companies = Company::all();
        return view('profiles.management.tabella-aziende', compact('Companies'));
    }

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
    public function storeStaff(Request $request)
    {

        $request->validate([
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer', 'min:18'],
            'genere' => ['required', 'string'],
            'livello' => ['integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','min:10','max:10', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $logo = 2;

        $user = User::create([
            'username' => $request->username,
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'eta' => $request->eta,
            'genere' => $request->genere,
            'livello' => $logo,
            'password' => Hash::make($request->password),
            'telefono' => $request->telefono,
            'email' => $request->email,
        ]);

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
        return redirect('tabella-faq');
    }

    public function deleteFaq($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return redirect('tabella-faq');
    }

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

    public function storeFaqs(Request $request, $id)
    {
        $request->validate([
            'domanda' => ['nullable', 'string', 'max:255', 'unique:faqs'],
            'risposta' => ['nullable', 'string', 'unique:faqs'],
        ]);

        $idFaq = Faq::where('id', $id)->first();

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
        //dd($user);

        //questa funzione riporta il numero di cupon acquisiti da un detereminato utente
        $coupon_user = DB::table('coupons')->where('user', $user)->count();
        $datiUtente = User::where('username', $user)->first();
        //dd($datiUtente);
        return view('profiles.management.info-utente', compact('datiUtente'),  compact('coupon_user'));

    }

    public function contatoreCoupon()
    {
        $coupons = Coupon::all();
        $nCoupon = count($coupons);

        return  $nCoupon;
    }
 
}
