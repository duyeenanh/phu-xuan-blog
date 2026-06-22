<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:10',
        ]);
        
        // Lab 3: Flash message thành công
        return redirect()->route('posts.create')->with('success', 'Tạo bài viết thành công!');
    }
}