@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Dán đoạn code thông báo vào đây --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Danh sách bài viết</h1>
    
    {{-- Phần hiển thị danh sách bài viết của bạn bên dưới... --}}
    @forelse ($posts as $post)
        {{-- ... --}}
    @empty
        <p>Chưa có bài viết nào.</p>
    @endforelse
</div>
@endsection