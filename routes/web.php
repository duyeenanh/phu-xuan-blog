<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Định nghĩa các Route kèm theo name() để tránh lỗi RouteNotFoundException
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/about', function () { return 'Trang Giới thiệu'; })->name('about');
Route::get('/shop/products', function () { return 'Trang Sản phẩm'; })->name('shop.products');
Route::get('/shop/cart', function () { return 'Trang Giỏ hàng'; })->name('shop.cart');
Route::get('/contact', function () { return 'Trang Liên hệ'; })->name('contact');

// Route resource cho bài thực hành 2
Route::resource('articles', ArticleController::class);