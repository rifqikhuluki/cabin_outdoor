<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\categories;
use App\Models\pakets;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function katalog(Request $request)
    {
        $id_kategori = $request->query('kategori');
        $kategori = Categories::all();
        
        if ($id_kategori) {
            $products = Products::where('id_kategori', $id_kategori)->paginate(10);
        } else {
            $products = Products::paginate(10);
        }

        $paket = Pakets::all();
        
        return view('katalog', [
            'products' => $products,
            'kategori' => $kategori,
            'paket' => $paket,
        ]);
    }    

    public function detail($id_produk)
    {
        $product = Products::where('id_produk', $id_produk)->firstOrFail();;
        return view('katalog-detail', [
            'product' => $product
        ]);
    }

    public function detailpaket($id_paket)
    {
        $paket = Pakets::where('id_paket', $id_paket)->firstOrFail();;
        return view('paket-detail', [
            'paket' => $paket
        ]);
    }
}