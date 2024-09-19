<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about'])->name('about-page');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact-page');
Route::get('/service', [PagesController::class, 'service'])->name('service-page');
Route::get('/products', [PagesController::class, 'products'])->name('products');



Route::get('/prav', function () {
    return view('farm-c_checkout.prav');
});
Route::get('/prac2', function () {
    return view('farm-c_checkout.prac2');
});
Route::get('/insertpro', function () {
    return view('farm-c_checkout.myproduct');
});
//product
Route::get('/product', [ProductController::class, 'index'])->name('products.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/update', [ProductController::class, 'update'])->name('products.store');


//login4
Route::get('/login',[UserController::class, 'login'])->name('login-page');
Route::get('/login',[UserController::class, 'register'])->name('login-page');
