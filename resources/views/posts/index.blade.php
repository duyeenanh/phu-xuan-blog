@extends('layouts.app') 

@section('content')
    <div class="container">
        <h1>Danh sách bài viết</h1>

        @forelse ($posts as $post)
            <div class="post-card" style="border: 1px solid #ddd; padding: 15px; margin-bottom: 10px;">
                <h3>{{ $loop->iteration }}. {{ $post->title }}</h3>
                <p>Tác giả: {{ $post->author }} | Ngày đăng: {{ $post->created_at }}</p>
            </div>
        @empty
            <p>Hiện tại chưa có bài viết nào.</p>
        @endforelse
    </div>
@endsection