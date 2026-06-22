<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequest; // <--- Cần dòng này

class CategoryController extends Controller
{
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect()->route('categories.index')->with('success', 'Tạo danh mục thành công!');
    }

    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->validated());
        return redirect()->route('categories.index')->with('success', 'Cập nhật danh mục thành công!');
    }
}