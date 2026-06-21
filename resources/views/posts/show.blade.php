@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}">Quay lại danh sách</a>
</div>
@endsection