<?php

use App\Http\Controllers\CustomerRequestController;
use App\Http\Controllers\ProductSellerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/customers', [CustomerRequestController::class, 'index'])->name('customers.index');
Route::post('/customers', [CustomerRequestController::class, 'store'])->name('customers.store');

Route::get('/products', [ProductSellerController::class, 'index'])->name('products.index');
Route::post('/products', [ProductSellerController::class, 'store'])->name('products.store');


