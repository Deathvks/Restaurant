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
            <img src="{{asset('img/hamburguer.webp')}}" alt="hamburguer" class="hamburguer" />
        </div>
        <div id="target">
            <h1 id="titleMap">Ubicación:</h1>
            <p class="subTitleMap">C. Almudena, 75, 35010 Los Giles, Las Palmas</p>
            <img src="{{asset('img/maps.png')}}" alt="map" class="map" />
        </div>
    </section>
    <h1 class="our">Nuestros mejores platos</h1>
    <section id="section-two">
        <div id="target-two">
            <img src="{{asset('img/food.avif')}}" alt="food" class="food" />
        </div>
        <div id="target-tow">
            <img src="{{asset('img/food2.jpg')}}" alt="food" class="food" />
        </div>
        <div id="target-tow">
            <img src="{{asset('img/food3.jpg')}}" alt="food" class="food" />
        </div>
        <div id="target-tow">
            <img src="{{asset('img/food4.webp')}}" alt="food" class="food" />
        </div>
    </section>
    <footer>
        <h1 class="eat">El placer de comer | <a href="{{route("restaurant.index")}}">Menú</a></h1>
        <p class="copy">Copyright @2024 - Todos los derechos reservados</p>
    </footer>
</body>
</html>