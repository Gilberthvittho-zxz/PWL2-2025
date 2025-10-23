<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProductCategoryController;

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SupplierController;


Route::get('/', function () {
    return redirect('login');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth'])->group(function () {



Route::resource('suppliers', SupplierController::class);

Route::resource('transaksi', TransaksiPenjualanController::class);

Route::resource('/products', \App\Http\Controllers\ProductController::class);

Route::resource('categories', ProductCategoryController::class);




});
