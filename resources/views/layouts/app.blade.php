<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gestión de Trabajadores')</title>

    <!-- Enlace a los estilos CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header>
    <div class="container">
        <!-- Aquí se agrega el logo -->
        <div class="logo">
            <img src="{{ asset('images/Sticker_21.png') }}" alt="Logo Hoy Voy" width="150">
        </div>

        @yield('content')
    </div>

    <h1>Gestión de Trabajadores</h1>
    <nav>
        <ul>
            <li><a href="{{ route('trabajadores.index') }}">Trabajadores</a></li>
            <li><a href="{{ route('centros.index') }}">Centros</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; 2023 Gestión de Trabajadores</p>
</footer>
</body>
</html>
