<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController; // Nhớ thêm dòng này

// Các route của Post
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Route trang chủ
Route::get('/', function () {
    return redirect('/posts/create');
});

// DÁN DÒNG NÀY VÀO ĐÂY:
Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');