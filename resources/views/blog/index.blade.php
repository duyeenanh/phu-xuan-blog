@extends('layouts.app')

@section('content')
    <h1>Danh sách bài viết</h1>

    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>Tác giả: {{ $post->author }}</p>
        </div>
        <hr>
    @endforeach
@endsectionphp 