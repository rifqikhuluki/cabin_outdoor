<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index()
    {
        $products = Products::paginate(10);
        return view('katalog', compact('products'));
    }

    public function show($id_produk)
    {
        $product = Products::where('id_produk', $id_produk)->firstOrFail();;
        return view('katalog-detail', compact('product'));
    }
}