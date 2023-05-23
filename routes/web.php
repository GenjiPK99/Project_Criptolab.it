<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route PublicController
Route::get('/', [ PublicController::class , 'home'])->name('home');
// Route ContactController
Route::get('/crypto/contact', [ ContactController::class , 'contact'])->name('crypto.contact');
Route::post('/crypto/contact/form', [ ContactController::class , 'form'])->name('crypto.contact.form');
// Route CryptoController
Route::get('/crypto/create', [ CryptoController::class , 'create'])->name('crypto.create');
Route::get('/crypto/index', [ CryptoController::class , 'index'])->name('crypto.index');
Route::post('/crypto/store', [ CryptoController::class , 'store'])->name('crypto.store');
// Route WalletController
Route::get('/wallet/create', [ WalletController::class , 'create'])->name('wallet.create');




