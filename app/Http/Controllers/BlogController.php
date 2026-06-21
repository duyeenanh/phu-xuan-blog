<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        // Mảng dữ liệu chứa 5 bài viết với đầy đủ thông tin
        $posts = [
            [
                'id' => 1, 
                'title' => 'Giới thiệu về Laravel', 
                'author' => 'Nguyễn Văn An', 
                'date' => '2024-01-15', 
                'excerpt' => 'Laravel là framework PHP phổ biến nhất hiện nay.'
            ],
            [
                'id' => 2, 
                'title' => 'MVC là gì?', 
                'author' => 'Trần Thị Bình', 
                'date' => '2024-01-20', 
                'excerpt' => 'Tìm hiểu về kiến trúc Model-View-Controller trong lập trình web.'
            ],
            [
                'id' => 3, 
                'title' => 'Cài đặt môi trường Laravel', 
                'author' => 'Lê Hoàng Cường', 
                'date' => '2024-01-25', 
                'excerpt' => 'Hướng dẫn chi tiết các bước cài đặt Laravel trên Windows.'
            ],
            [
                'id' => 4, 
                'title' => 'Blade Template Engine', 
                'author' => 'Phạm Văn Dũng', 
                'date' => '2024-02-01', 
                'excerpt' => 'Blade giúp viết mã HTML kết hợp PHP trở nên sạch sẽ và dễ đọc hơn.'
            ],
            [
                'id' => 5, 
                'title' => 'Artisan CLI Command', 
                'author' => 'Hoàng Thị Mai', 
                'date' => '2024-02-05', 
                'excerpt' => 'Khám phá các câu lệnh Artisan mạnh mẽ để tự động hóa công việc.'
            ],
        ];
        
        // Truyền biến $posts sang View
        return view('blog.index', compact('posts'));
    }
}