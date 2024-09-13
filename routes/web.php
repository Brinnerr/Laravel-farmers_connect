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
Route::get('/products', [PagesController::class, 'product'])->name('product');
Route::get('/service', [PagesController::class, 'service'])->name('service-page');


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
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create'])->name('create-product');
Route::get('/store', [ProductController::class, 'store'])->name('store-product');
Route::get('/edit', [ProductController::class, 'edit'])->name('edit-product');
Route::get('/service', [ProductController::class, 'update'])->name('update-page');
