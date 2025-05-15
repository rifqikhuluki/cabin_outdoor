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
        $id_kategori = $request->query('kategori');  // Menangkap kategori dari query string
        
        $kategori = Categories::all();  // Ambil semua kategori untuk dropdown
        
        if ($id_kategori) {
            // Jika id_kategori ada, filter produk berdasarkan kategori
            $products = Products::where('id_kategori', $id_kategori)->paginate(10);
        } else {
            // Jika tidak ada kategori yang dipilih, tampilkan semua produk
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
        return view('katalog-detail', compact('product'));
    }
    
    public function home()
    {
        $products = Products::take(5)->get();
        
        return view('home', compact('products'));
    }

    public function detailpaket($id_paket)
    {
        $paket = Pakets::where('id_paket', $id_paket)->firstOrFail();;
        return view('paket-detail', compact('paket'));
    }
}