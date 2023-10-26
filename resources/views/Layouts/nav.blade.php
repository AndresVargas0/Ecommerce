<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/880d240d27.js" crossorigin="anonymous"></script>   
    <title>Ecommerce - @yield('title')</title>
    @vite('resources/css/nav.css')
</head>
<body>
<nav class="nav">
        <div class="logo">
            <a>ECOMMERCE</a>
        </div>
        <div class="rutas">
            <a class="hover:scale-125 transition-transform ease-in-out" href="{{route('home')}}">Inicio</a>
            <a>Categorias</a>
            <a href="{{route('forms')}}">Resgistrarse</a>
        </div>
    </nav>
    <main>
        @yield('home')
        @yield('registrarse')
    </main>
</body>
</html>