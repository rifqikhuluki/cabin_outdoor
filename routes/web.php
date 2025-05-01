<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [KatalogController::class, 'home'])->name('unggulan');

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sewa', function () {
    return view('sewa');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/katalog', [KatalogController::class, 'produk']);

Route::get('/katalog/{id_produk}', [KatalogController::class, 'detail'])->name('katalog-detail');

