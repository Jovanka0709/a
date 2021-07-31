<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AddtocardController;
use App\Http\Controllers\hapusKeranjangController;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});
// Route::resource('home', HomeController::class);
Route::get('home', [HomeController::class, 'index']);
Route::get('home/detail_kategori/{id}', [HomeController::class, 'detail_kategori']);
Route::get('home/detail_produk/{id}', [HomeController::class, 'detail_produk']);
Route::get('home/keranjang', [HomeController::class, 'keranjang']);
Route::get('home/checkout', [HomeController::class, 'checkout']);
Route::get('home/prosesCheckout', [HomeController::class, 'prosesCheckout']);

//AUTH
Route::get('auth', [AuthController::class, 'index']);
Route::get('auth/register', [AuthController::class, 'register']);
Route::post('auth/postregister', [AuthController::class, 'postregister']);
Route::post('auth/postlogin', [AuthController::class, 'postlogin']);
Route::get('auth/berhasil', [AuthController::class, 'berhasil']);
Route::get('auth/logout', [AuthController::class, 'logout']);

//PRODUK ADMIN

Route::resource('produk', ProdukController::class);
Route::post('produk/insertKategori', [ProdukController::class, 'insertKategori']);

//ADD TO CARD
Route::get('addtocard/{id}', [AddtocardController::class, 'index']);
//Hapus

Route::resource('hapus', hapusKeranjangController::class);
//Transaksi

Route::get('transaksi', [TransaksiController::class, 'index']);
