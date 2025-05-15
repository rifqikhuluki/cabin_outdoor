<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KatalogController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LoginController as AdminLoginController;
use App\Http\Controllers\DashboardController as AdminDashboardController;
use App\Http\Controllers\ProductAdminController as AdminProductController;
use App\Http\Controllers\PaketsAdminController as AdminPaketController;
use App\Http\Controllers\LogoutController as AdminLogoutController;

use App\Http\Middleware\LoginCheck;
use App\Http\Middleware\Loggedin;

use Illuminate\Routing\Route as RoutingRoute;

//public

//beranda
Route::get('/', function () {
    return view('home');
});

Route::get('/', [KatalogController::class, 'home'])->name('unggulan');

Route::get('/blog1', function () {
    return view('rekomendasi.blog1');
})->name('rekomendasi.blog1');

Route::get('/blog2', function () {
    return view('rekomendasi.blog2');
})->name('rekomendasi.blog2');

Route::get('/blog3', function () {
    return view('rekomendasi.blog3');
})->name('rekomendasi.blog3');

Route::get('/blog/1', function () {
    return view('rekomendasi.blog1');
})->name('rekomendasi.blog1');

Route::get('/blog/2', function () {
    return view('rekomendasi.blog2');
})->name('rekomendasi.blog2');

Route::get('/blog/3', function () {
    return view('rekomendasi.blog3');
})->name('rekomendasi.blog3');

//halaman tentang kami
Route::get('/tentang', [TentangController::class, 'tentang'])->name('tentang');

//halaman katalog
Route::get('/katalog', [KatalogController::class, 'katalog'])->name('katalog');

Route::get('/katalog/produk/kategori/{id_kategori}', [KatalogController::class, 'katalog'])->name('katalog.produk.kategori');

Route::get('/katalog/produk/{id_produk}', [KatalogController::class, 'detail'])->name('katalog-detail');

Route::get('/katalog/paket/{id_paket}', [KatalogController::class, 'detailpaket'])->name('paket-detail');

//halaman sewa
Route::get('/sewa', [SewaController::class, 'sewa'])->name('sewa');

//halaman kontak
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');


//admin
Route::middleware(LoginCheck::class)->group(function(){
    //login admin
    Route::get('/admin', [AdminLoginController::class, 'login'])->name('admin.login');
    //proses validasi login admin
    Route::post('/login/process', [AdminLoginController::class, 'process'])->name('admin.login.process');
});

Route::middleware(Loggedin::class)->group(function(){
    //menampilkan dashboard admin
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

    //menampilkan list produk
    Route::get('/admin/product', [AdminProductController::class, 'product'])->name('admin.product');
    //menampilkan halaman from input data produk
    Route::get('/admin/product/create', [AdminProductController::class, 'create'])->name('admin.product.create');
    //proses menyimpan data dari from input
    Route::post('/admin/product/insert', [AdminProductController::class, 'insert'])->name('admin.product.insert');
    //menampilkan halaman from data produk yang sudah ada
    Route::get('/admin/product/edit/{id_produk}', [AdminProductController::class, 'edit'])->name('admin.product.edit');
    //proses memperbarui update data produk
    Route::post('/admin/product/update/{id_produk}', [AdminProductController::class, 'update'])->name('admin.product.update');
    //proses mengahpus data produk
    Route::get('/admin/product/delete/{id_produk}', [AdminProductController::class, 'delete'])->name('admin.product.delete');


    //menampilkan list paket
    Route::get('/admin/paket', [AdminPaketController::class, 'paket'])->name('admin.paket');
    //menampilkan halaman from input data pakey
    Route::get('/admin/paket/create', [AdminPaketController::class, 'create'])->name('admin.paket.create');
    //proses menyimpan data dari from input
    Route::post('/admin/paket/insert', [AdminPaketController::class, 'insert'])->name('admin.paket.insert');
    //menampilkan halaman from data paket yang sudah ada
    Route::get('/admin/paket/edit/{id_paket}', [AdminPaketController::class, 'edit'])->name('admin.paket.edit');
    //proses memperbarui update data paket
    Route::post('/admin/paket/update/{id_paket}', [AdminPaketController::class, 'update'])->name('admin.paket.update');
    //proses mengahpus data paket
    Route::get('/admin/paket/delete/{id_paket}', [AdminPaketController::class, 'delete'])->name('admin.paket.delete');

    //logout admin
    Route::get('/admin/logout', [AdminLogoutController::class, 'process'])->name('admin.logout');
});



