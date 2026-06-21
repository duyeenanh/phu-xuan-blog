<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">My Blog</a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                {{-- Trang chủ --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.index') ? 'active' : '' }}" 
                       href="{{ route('posts.index') }}">Bài viết</a>
                </li>

                {{-- Trang tạo mới --}}
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('posts.create') ? 'active' : '' }}" 
                       href="{{ route('posts.create') }}">Đăng bài mới</a>
                </li>

                {{-- Các mục chưa xây dựng (Đã ẩn link để tránh lỗi) --}}
                <li class="nav-item">
                    <span class="nav-link text-muted">Sản phẩm</span>
                </li>
                <li class="nav-item">
                    <span class="nav-link text-muted">Danh mục</span>
                </li>
            </ul>
        </div>
    </div>
</nav>