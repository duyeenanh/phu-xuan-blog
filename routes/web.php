<?php

use Illuminate\Support\Facades\Route;

// 1. Nhóm các route có chung tiền tố 'shop'
Route::prefix('shop')->group(function () {
    
    // Route shop.products
    Route::get('/products', function () {
        return 'Đây là trang danh sách sản phẩm';
    })->name('shop.products');

    // Route shop.cart
    Route::get('/cart', function () {
        return 'Đây là trang giỏ hàng';
    })->name('shop.cart');
});

// 2. Các route đơn lẻ
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return 'Đây là trang giới thiệu';
})->name('giới thiệu');

Route::get('/contact', function () {
    return 'Đây là trang liên hệ';
})->name('contact');