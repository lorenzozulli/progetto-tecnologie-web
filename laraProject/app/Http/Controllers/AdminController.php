<?php

namespace App\Http\Controllers; 

use App\Models\Admin;
use App\Http\Requests\NewProductRequest;
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

    public function addProduct() {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
                        ->with('cats', $prodCats);
    }

    public function storeProduct(NewProductRequest $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
        } else {
            $imageName = NULL;
        }

        $product = new Product;
        $product->fill($request->validated());
        $product->image = $imageName;
        $product->save();

        if (!is_null($imageName)) {
            $destinationPath = public_path() . '/images/products';
            $image->move($destinationPath, $imageName);
        };

        return redirect()->action([AdminController::class, 'index']);
        ;
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

        //$logo = $request->file('logo') ? $request->file('logo')->store('images/loghi-aziende', 'public') : 'images/loghi-aziende/non_disponibile.png';
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
        
        return view ('staff-view', ['username'=>$user]);
    }

}