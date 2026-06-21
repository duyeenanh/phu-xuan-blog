<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">MyBlog</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
            <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
            <a class="nav-link" href="{{ route('articles.index') }}">Bài viết</a>
        </div>
    </div>
</nav>