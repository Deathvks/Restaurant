<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <div id="header-section">
          <a href="/" class="header-p">Inicio</a>
          <a href="{{route("restaurant.index")}}" class="header-p">Menu</a>
        </div>
      </header>
    <section id="full-screen-image">
        <div id="section-one-background">
          <h1 class="offer">Tu comida preferida ahora, al mejor precio</h1>
          <a href="{{route("restaurant.index")}}" class="more">Ver carta</a>
        </div>
    </section>
    <section id="section-one">
        <div id="target">
            <h1 id="title">Sabores increíbles</h1>
            <img src="{{asset('img/hamburguer.webp')}}" alt="a1" class="a1" />
        </div>
        <div id="target">
            <h1 id="title">Sabores increíbles</h1>
            <img src="{{asset('img/hamburguer.webp')}}" alt="a1" class="a1" />
        </div>
    </section>
</body>
</html>