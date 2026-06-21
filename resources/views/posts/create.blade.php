@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tạo bài viết mới</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Tiêu đề</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nội dung</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu bài viết</button>
    </form>
</div>
@endsection