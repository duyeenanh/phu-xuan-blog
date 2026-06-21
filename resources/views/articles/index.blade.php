<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách bài viết</title>
</head>
<body>
    <h1>Danh sách các bài viết</h1>

    @if(count($articles) > 0)
        <ul>
            {{-- Vòng lặp foreach duyệt qua từng phần tử trong mảng --}}
            @foreach($articles as $article)
                <li>
                    {{-- Tạo thẻ liên kết (a) dẫn đến route show với ID tương ứng --}}
                    {{-- URL sẽ trông như: /articles/1, /articles/2... --}}
                    <a href="{{ route('articles.show', $article['id']) }}">
                        {{ $article['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Không có bài viết nào.</p>
    @endif
</body>
</html>