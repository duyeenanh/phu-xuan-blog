// Trong PostController.php
public function index() {
    $posts = collect([
        (object)['id' => 1, 'title' => 'Bài viết 1', 'author' => 'Tác giả A', 'created_at' => '2026-06-21'],
        (object)['id' => 2, 'title' => 'Bài viết 2', 'author' => 'Tác giả B', 'created_at' => '2026-06-21'],
    ]);
    return view('posts.index', compact('posts'));
}