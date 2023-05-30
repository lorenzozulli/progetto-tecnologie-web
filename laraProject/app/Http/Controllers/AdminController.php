<?php

namespace App\Http\Controllers; 

use App\Models\Admin;
use App\Http\Requests\NewProductRequest;
use App\Models\User;
use App\Models\Company;

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
        return view('lista-staff');
    }

    public function deleteUser($username)
    {
        $user = User::FindOrFail($username);
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
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'nome' => ['required', 'string'],
            'cognome' => ['required', 'string', 'max:255'],
            'eta' => ['required', 'integer'],
            'genere' => ['required', 'string'],
            //'livello' => ['integer'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'telefono' => ['required', 'string','max:10'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],     
        ]);
        $user = User::create([
            'username' => $request->username,
            'nome' => $request->nome,
            'cognome' => $request->cognome,
            'eta' => $request->eta,
            'genere' => $request->genere,
            //'livello' =>$request->livello,
            'password' => Hash::make($request->password),
            'telefono' =>$request->telefono,
            'email' => $request->email,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::USER);
       
    }

}