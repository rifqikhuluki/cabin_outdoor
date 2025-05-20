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
        $product = Products::where('id_produk', $id_produk)->firstOrFail();

        $pesan = "Halo, saya ingin menyewa $product->nama_produk, apakah tersedia?";
        $link = "https://wa.me/6281336038234?text=" . urlencode($pesan);

        return view('katalog-detail', [
            'product' => $product,
            'link' => $link
        ]);
    }

    public function detailpaket($id_paket)
    {
        $paket = Pakets::where('id_paket', $id_paket)->firstOrFail();

        $pesan = "Halo, saya ingin menyewa $paket->nama_paket, apakah tersedia?";
        $link = "https://wa.me/6281336038234?text=" . urlencode($pesan);

        return view('paket-detail', [
            'paket' => $paket,
            'link' => $link
        ]);
    }
}