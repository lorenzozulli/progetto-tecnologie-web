<?php

namespace App\Http\Controllers;

class StaffController extends Controller
{

    public function index()
    {
        return view('staff');
    }

    public function updateData()
    { }

    public function addPromo()
    {
        $prodCats = $this->_adminModel->getProdsCats()->pluck('name', 'catId');
        return view('product.insert')
            ->with('cats', $prodCats);
    }

    public function updatePromo()
    { }

    public function deletePromo()
    { }
}
