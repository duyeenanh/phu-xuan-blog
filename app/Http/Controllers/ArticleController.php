public function index()
{
    // Tạo một collection chứa danh sách các bài viết
    $posts = collect([
        (object)['id' => 1, 'title' => 'Bài viết 1', 'author' => 'Tác giả A', 'created_at' => '2026-06-21'],
        (object)['id' => 2, 'title' => 'Bài viết 2', 'author' => 'Tác giả B', 'created_at' => '2026-06-21'],
        (object)['id' => 3, 'title' => 'Bài viết 3', 'author' => 'Tác giả C', 'created_at' => '2026-06-21'],
    ]);

    // Trả về view và truyền dữ liệu $posts sang
    return view('posts.index', compact('posts'));
}