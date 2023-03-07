<?php

use App\Http\Controllers\CustomerRequestController;
use App\Http\Controllers\ProductSellerController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//@TODO(Implemented middleware role users)
//dd($user);
//if ($user->role == "customer") {
//    Route::get('/customers', [CustomerRequestController::class, 'index'])->name('customers.index');
//    Route::post('/customers', [CustomerRequestController::class, 'store'])->name('customers.store');
//}
//
//if ($user->role == "seller") {
//    Route::get('/products', [customerRequestController::class, 'index'])->name('products.index');
//    Route::post('/products', [customerRequestController::class, 'store'])->name('products.store');
//}

Route::get('/customers', [CustomerRequestController::class, 'index'])->name('customers.index');
Route::post('/customers', [CustomerRequestController::class, 'store'])->name('customers.store');
Route::get('/customers/related-product/{id}', [CustomerRequestController::class, 'relatedProduct'])->name('products.related');
Route::get('/customers/myrequests/', [CustomerRequestController::class, 'myRequests'])->name('myrequests');

Route::get('/products', [ProductSellerController::class, 'index'])->name('products.index');
Route::post('/products', [ProductSellerController::class, 'store'])->name('products.store');
Route::get('/products/related-product/{id}', [ProductSellerController::class, 'relatedCustomer'])->name('customers.related');
Route::get('/products/myproducts/', [ProductSellerController::class, 'myProducts'])->name('myproducts');
