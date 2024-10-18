<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Menu Item</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #fff
        }

        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0 0 20px;
        }
        .container {
            max-width: 300px;
            margin: 12em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #8b0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a80000;
        }
        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8b0000;
            font-weight: bold;
            text-decoration: none;
        }
        a.back-link:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            background-color: #8b0000;
            border-top: 1px solid rgb(0, 0, 0);
        }

        .eat{
            color: #ffffff;
            margin-bottom: 0.5em;
        }

        .copy{
            color: #ffffff;
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #fff
        }

        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0 0 20px;
        }
        .container {
            max-width: 400px;
            margin: 12em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #8b0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a80000;
        }
        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8b0000;
            font-weight: bold;
            text-decoration: none;
        }
        a.back-link:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            background-color: #8b0000;
            border-top: 1px solid rgb(0, 0, 0);
        }

        .eat{
            color: #ffffff;
            margin-bottom: 0.5em;
        }

        .copy{
            color: #ffffff;
        }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #fff
        }

        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0 0 20px;
        }
        .container {
            max-width: 400px;
            margin: 12em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #8b0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a80000;
        }
        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8b0000;
            font-weight: bold;
            text-decoration: none;
        }
        a.back-link:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            background-color: #8b0000;
            border-top: 1px solid rgb(0, 0, 0);
        }

        .eat{
            color: #ffffff;
            margin-bottom: 0.5em;
        }

        .copy{
            color: #ffffff;
        }
        }

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #fff
        }

        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0 0 20px;
        }
        .container {
            max-width: 400px;
            margin: 12em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #8b0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a80000;
        }
        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8b0000;
            font-weight: bold;
            text-decoration: none;
        }
        a.back-link:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            background-color: #8b0000;
            border-top: 1px solid rgb(0, 0, 0);
        }

        .eat{
            color: #ffffff;
            margin-bottom: 0.5em;
        }

        .copy{
            color: #ffffff;
        }
        }

        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #fff
        }

        h1 {
            background-color: #8b0000;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin: 0 0 20px;
        }
        .container {
            max-width: 400px;
            margin: 12em auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #8b0000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #a80000;
        }
        a.back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8b0000;
            font-weight: bold;
            text-decoration: none;
        }
        a.back-link:hover {
            text-decoration: underline;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 20vh;
            background-color: #8b0000;
            border-top: 1px solid rgb(0, 0, 0);
        }

        .eat{
            color: #ffffff;
            margin-bottom: 0.5em;
        }

        .copy{
            color: #ffffff;
        }
        }
    </style>
</head>
<body>
    <h1>Edit Menu Item</h1>
    <div class="container">
        <form action="{{ route('restaurant.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ $menu->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" value="{{ $menu->price }}" step="0.01" required>
            </div>
            <button type="submit">Update Item</button>
        </form>
        <a href="{{ route('restaurant.index') }}" class="back-link">No want edit? Back to the list</a>
    </div>
    <footer>
        <h1 class="eat">El placer de comer - <a href="{{route("restaurant.index")}}">Menú</a></h1>
        <p class="copy">Copyright @2024 - Todos los derechos reservados</p>
    </footer>
</body>
</html>