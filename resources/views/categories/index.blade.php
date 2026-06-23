<!DOCTYPE html>
<html>
<head>
    <title>Danh sách danh mục</title>
</head>
<body>
    <h1>Danh sách các danh mục</h1>
    
    <ul>
        @foreach($categories as $category)
            <li>
                <strong>{{ $category->name }}</strong>
            </li>
        @endforeach
    </ul>
</body>
</html>