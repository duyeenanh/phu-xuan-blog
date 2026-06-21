<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Danh sách bài viết
    public function index() {
        $posts = collect([
            (object)['id' => 1, 'title' => 'Bài viết 1', 'author' => 'Tác giả A', 'created_at' => '2026-06-21'],
            (object)['id' => 2, 'title' => 'Bài viết 2', 'author' => 'Tác giả B', 'created_at' => '2026-06-21'],
        ]);
        return view('posts.index', compact('posts'));
    }

    // Form tạo bài viết
    public function create() {
        return view('posts.create');
    }

    // Lưu bài viết
    public function store(Request $request) {
        return "Đã nhận dữ liệu!";
    }

    // Xem chi tiết
    public function show($id) {
        $post = (object)['id' => $id, 'title' => 'Tiêu đề bài viết '.$id, 'body' => 'Nội dung chi tiết...'];
        return view('posts.show', compact('post'));
    }
}