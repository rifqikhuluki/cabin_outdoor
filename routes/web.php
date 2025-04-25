<?php

use Illuminate\Support\Facades\Route;

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