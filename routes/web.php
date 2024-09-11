<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'index'])->name('about-page');
Route::get('/contact', [PagesController::class, 'index'])->name('contact-page');
Route::get('/product', [PagesController::class, 'index'])->name('product-page');
Route::get('/service', [PagesController::class, 'index'])->name('service-page');