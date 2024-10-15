<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Menu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 20px auto;
            max-width: 600px;
        }
        li {
            background-color: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        li:nth-child(even) {
            background-color: #f1f1f1;
        }
        a.add-link {
            display: block;
            text-align: center;
            margin: 20px 0;
            color: #8b0000;
            text-decoration: none;
            font-weight: bold;
        }
        a.add-link:hover {
            text-decoration: underline;
        }
        form {
            display: inline;
        }
        button.delete-button {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        button.delete-button:hover {
            background-color: #e60000;
        }
    </style>
</head>
<body>
    <h1>Menu of the restaurant</h1>
    <div class="container">
        <ul>
            @foreach ($menu as $res)
                <li>
                    {{ $res->name }} - ${{ $res->price }}
                    <form action="{{ route('restaurant.destroy', $res->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <a href="{{ route('restaurant.create') }}" class="add-link">Add New Menu Item</a>
    </div>
</body>
</html>
