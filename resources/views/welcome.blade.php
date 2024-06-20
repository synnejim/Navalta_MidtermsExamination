<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach ()
            <li>{{$movies['name'] }} - ${{$movies['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
