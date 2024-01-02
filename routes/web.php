<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;

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
    return view('home');
});
Route::get('/detail', function () {
    return view('detail_produk');
})->name('detail');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/product', function () {
    return view('shop_produk');
})->name('product');
Route::get('/shop', function () {
    return view('shop_store');
})->name('shop');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.signup');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::post('/profil/update-name', [ProfilController::class, 'updateName'])->name('update-profile-name');
Route::post('/profil/update-dob', [ProfilController::class, 'updateBirth'])->name('update-profile-dob');
Route::post('/profil/update-gender', [ProfilController::class, 'updateGender'])->name('update-profile-gender');
Route::post('/profil/update-email', [ProfilController::class, 'updateEmail'])->name('update-profile-email');
Route::post('/profil/update-phone', [ProfilController::class, 'updatePhone'])->name('update-profile-phone');