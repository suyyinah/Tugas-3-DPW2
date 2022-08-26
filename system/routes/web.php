<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontview.home');
});

Route::get('shop', function () {
    return view('frontview.shop');
});

Route::get('home', function () {
    return view('frontview.home');
});

Route::get('about', function () {
    return view('frontview.about');
});

Route::get('blog', function () {
    return view('frontview.blog');
});

Route::get('contact', function () {
    return view('frontview.contact');
});

Route::get('cart', function () {
    return view('frontview.cart');
});



Route::get('template', function () {
    return view('template.base');
});

Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);

Route::get('/promo', [HomeController::class, 'showPromo']);
Route::get('/pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('/supplier', [HomeController::class, 'showSupplier']);
Route::get('/login', [HomeController::class, 'showLogin']);

Route::get('produk', [ProdukController::class, 'index']);
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']);
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);
