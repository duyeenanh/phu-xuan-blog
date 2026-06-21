<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts', [PostController::class, 'index']);
// Thêm dòng này vào file routes/web.php nếu chưa có
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);