<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['id' => 1, 'title' => 'Lập trình Laravel căn bản'],
            ['id' => 2, 'title' => 'Tìm hiểu về Routing'],
        ];
        return view('articles.index', compact('articles'));
    }
}