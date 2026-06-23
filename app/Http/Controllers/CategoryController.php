<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Lấy toàn bộ dữ liệu từ bảng categories
        $categories = Category::all();
        
        // Trả về view index trong thư mục categories
        return view('categories.index', compact('categories'));
    }
}