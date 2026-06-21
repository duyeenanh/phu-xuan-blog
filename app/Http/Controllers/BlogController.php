public function index()
{
    $posts = [
        ['id' => 1, 'title' => 'Bài viết 1', 'author' => 'Admin', 'date' => '2026-06-21', 'excerpt' => 'Đây là đoạn trích bài viết 1'],
        ['id' => 2, 'title' => 'Bài viết 2', 'author' => 'Admin', 'date' => '2026-06-21', 'excerpt' => 'Đây là đoạn trích bài viết 2'],
        ['id' => 3, 'title' => 'Bài viết 3', 'author' => 'Admin', 'date' => '2026-06-21', 'excerpt' => 'Đây là đoạn trích bài viết 3'],
        ['id' => 4, 'title' => 'Bài viết 4', 'author' => 'Admin', 'date' => '2026-06-21', 'excerpt' => 'Đây là đoạn trích bài viết 4'],
        ['id' => 5, 'title' => 'Bài viết 5', 'author' => 'Admin', 'date' => '2026-06-21', 'excerpt' => 'Đây là đoạn trích bài viết 5'],
    ];

    return view('posts.index', compact('posts'));
}