<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function produk()
    {
        $products = Products::paginate(10);
        return view('katalog', compact('products'));
    }

    public function detail($id_produk)
    {
        $product = Products::where('id_produk', $id_produk)->firstOrFail();;
        return view('katalog-detail', compact('product'));
    }

    public function home()
    {
        $products = Products::take(5)->get();
        
        return view('home', compact('products'));
    }
}