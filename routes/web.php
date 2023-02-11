<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApotekController;
// use App\Http\Controllers\CartController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
// use App\Http\Controllers\TotalController;

use Illuminate\Support\Facades\Route;

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
    return view('layouts.customer');
});

Auth::routes();
Route::get('admin', function () {
    return view('layouts.admin');
});
// Route::get('beranda', function () {
//     return view('layouts.components.beranda');
// });

Auth::routes();
Route::get('home', function () {
    return view('layouts.customer');
});
// Route::get('admin',function(){
//     return view('layouts.admin');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/beranda', [App\Http\Controllers\TotalController::class, 'index'])->name('home');

// Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index2']);

// Route::get('/shop', function() {
//     return view('isinavbar.about');
// });

// Route::resource('shop', ObatController::class, 'index2' );

// Route::get('/shop', [App\Http\Controllers\ObatController::class, 'index2']);

// Route::get('/shop', function() {
//     return view('isinavbar.shop');
// });
// Route::get('/contact', function () {
//     return view('isinavbar.contact');
// });
// Route::get('/shop-single', function () {
//     return view('isinavbar.shop-single');
// });
// Route::get('/cart', function () {
//     return view('isinavbar.cart');
// });
// Route::get('/checkout', function () {
//     return view('isinavbar.checkout');
// });
// Route::get('/thankyou', function () {
//     return view('isinavbar.thankyou');
// });
// Route::get('/from pesanan', function () {
//     return view('isinavbar.pesanan');
// });
// Route::get('/thankyou', function () {
//     return view('thankyou');
// });

// front route
// Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [ApotekController::class, 'about']);
Route::get('/shop', [ApotekController::class, 'shop']);
Route::get('/singleShop/{obat}', [ApotekController::class, 'singleShop'])->name('singleShop');
Route::get('/cart/{obat}', [ApotekController::class, 'cart'])->name('obat');
Route::get('/checkout/{obat}', [ApotekController::class, 'checkout'])->name('pembeli');
Route::get('/transaksi', [ApotekController::class, 'transaksi'])->name('transaksi');
// Route::get('/keranjang/{obat}', [CartController::class, 'index'])->name('cart');

Route::get('/thankyou', [ApotekController::class, 'thankyou']);
// return view('shop', [
//     titl,

// ]);
// Route::get('/thankyou', [ApotekController::class, 'thankyou']);
// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', [AdminController::class, 'getData']);
    // tambah disini
    Route::resource('obat', ObatController::class);
    Route::resource('data_user', DataUserController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('supplier', SupplierController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('data_user', UserController::class);
    // Route::resource('keranjang', CartController::class);

});
Route::resource('pembeli', PembeliController::class);
// Route::get('/data_pesanan', function () {
//     return view('cart.index');
// });
