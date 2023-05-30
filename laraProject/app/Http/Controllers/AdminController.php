<?php

namespace App\Http\Controllers; 

use App\Models\Admin;
use App\Http\Requests\NewProductRequest;
use App\Models\User;

class AdminController extends Controller {

   protected $_adminModel;

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

}