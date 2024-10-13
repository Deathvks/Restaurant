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
        @foreach ($restaurant as $menu)
            <li>{{ $menu->name }} {{ $menu->price }}</li>
        @endforeach
    </ul>
</body>
</html>