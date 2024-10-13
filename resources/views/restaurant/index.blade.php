<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Menu</title>
</head>
<body>
    <h1>Menu of the restaurant</h1>
    <ul>
        @foreach ($menu as $res)
            <li>{{ $res->name }} {{ $res->price }}</li>
        @endforeach
    </ul>
</body>
</html>