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
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }}</li>
            <li>{{  $movie['DirectedBy'] }}</li>
        @endforeach
    </ul>
</body>
</html>
