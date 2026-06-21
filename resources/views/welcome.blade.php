<!DOCTYPE html>
<html>
<head>
    <title>Trang Chủ</title>
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Trang chủ</a> |
        <a href="{{ route('about') }}">Giới thiệu</a> |
        <a href="{{ route('shop.products') }}">Sản phẩm</a> |
        <a href="{{ route('shop.cart') }}">Giỏ hàng</a> |
        <a href="{{ route('contact') }}">Liên hệ</a>
    </nav>

    <h1>Chào mừng bạn đến với Website!</h1>
</body>
</html>