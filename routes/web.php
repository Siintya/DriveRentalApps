<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;

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

Route::get('/', [UserController::class, 'index'])->name('home');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register-action', [UserController::class, 'registerAction'])->name('register.action');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/mobil', [RentalController::class, 'index'])->name('mobil.index');
Route::get('/mobil/tambah', [RentalController::class, 'create'])->name('mobil.create');
Route::post('/mobil/store', [RentalController::class, 'store'])->name('mobil.store');
Route::get('/mobil/{id}', [RentalController::class, 'detail'])->name('mobil.detail');

Route::get('/booking', [RentalController::class, 'indexBooking'])->name('booking.index');
Route::get('/booking/create', [RentalController::class, 'createBooking'])->name('booking.create');
Route::post('/booking/store', [RentalController::class, 'storeBooking'])->name('booking.store');

Route::get('/return/create', [RentalController::class, 'createReturn'])->name('return.create');
Route::post('/return/store', [RentalController::class, 'storeReturn'])->name('return.store');