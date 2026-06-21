<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Hàm hiển thị danh sách bài viết
    public function index() {
        // Dữ liệu giả lập cho danh sách bài viết
        $posts = collect([
            (object)['id' => 1, 'title' => 'Bài viết 1', 'author' => 'Tác giả A', 'created_at' => '2026-06-21'],
            (object)['id' => 2, 'title' => 'Bài viết 2', 'author' => 'Tác giả B', 'created_at' => '2026-06-21'],
        ]);
        return view('posts.index', compact('posts'));
    }

    // Hàm hiển thị form tạo bài viết
    public function create() {
        return view('posts.create');
    }

    // Hàm lưu dữ liệu với Validation
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|min:5|max:255',
            'content' => 'required|string|min:10',
        ]);
        return redirect()->route('posts.index')->with('success', 'Tạo bài viết thành công!');
    }
}