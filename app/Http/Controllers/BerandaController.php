<?php

namespace App\Http\Controllers;

use App\Models\products;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        $products = Products::take(5)->get();
        
        return view('home', compact('products'));
    }
    public function blog1()
    {
        return view('rekomendasi.blog1');
    }
    public function blog2()
    {
        return view('rekomendasi.blog2');
    }
    public function blog3()
    {
        return view('rekomendasi.blog3');
    }
}
