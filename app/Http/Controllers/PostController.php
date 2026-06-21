<?php
namespace App\Http\Controllers; // Phải nằm ở dòng đầu tiên của file

use Illuminate\Http\Request;

class PostController extends Controller // Phải kế thừa Controller
{
    public function index()
    {
        $posts = collect([
            (object)['id' => 1, 'title' => 'Giới thiệu Laravel', 'author' => 'Nguyễn A', 'created_at' => now()->subDays(3)],
            (object)['id' => 2, 'title' => 'Blade Template Engine', 'author' => 'Trần B', 'created_at' => now()->subDays(1)],
            (object)['id' => 3, 'title' => 'Eloquent ORM cơ bản', 'author' => 'Lê C', 'created_at' => now()],
        ]);
        return view('posts.index', compact('posts'));
    }
}