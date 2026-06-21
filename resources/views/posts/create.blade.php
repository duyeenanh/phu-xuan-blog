{{-- Hiển thị tổng hợp các lỗi --}}
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    {{-- Input Title --}}
    <input type="text" name="title" value="{{ old('title') }}" 
           class="form-control @error('title') is-invalid @enderror">
    @error('title') 
        <span class="invalid-feedback">{{ $message }}</span> 
    @enderror

    {{-- Input Content --}}
    <textarea name="content" class="form-control @error('content') is-invalid @enderror">
        {{ old('content') }}
    </textarea>
    @error('content') 
        <span class="invalid-feedback">{{ $message }}</span> 
    @enderror

    <button type="submit" class="btn btn-primary">Lưu bài viết</button>
</form>