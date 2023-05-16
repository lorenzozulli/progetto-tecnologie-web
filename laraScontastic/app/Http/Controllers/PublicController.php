<?php

namespace App\Http\Controllers;


use App\Models\Catalog;
use Illuminate\Support\Facades\Log;


class PublicController extends Controller
{

   

    public function showCategories($categoryId)
    {
        $products = Product->where('category_id', $categoryId)->get();

        // Restituisci la vista "category" con i dati dei prodotti
        return view('category', ['products' => $products]);
    }
}
