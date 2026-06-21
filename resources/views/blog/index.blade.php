<h1>Danh sách bài viết</h1>
<ul>
    @foreach($posts as $post)
        <li style="margin-bottom: 20px;">
            <h3>{{ $post['title'] }}</h3>
            <p>
                <strong>Tác giả:</strong> {{ $post['author'] }} | 
                <strong>Ngày:</strong> {{ $post['date'] }}
            </p>
            <p><em>{{ $post['excerpt'] }}</em></p>
            <hr>
        </li>
    @endforeach
</ul>