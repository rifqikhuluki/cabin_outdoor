<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sewa', function () {
    return view('sewa');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/katalog', [KatalogController::class, 'index']);

Route::get('/katalog/{id_produk}', [KatalogController::class, 'show'])->name('katalog-detail');