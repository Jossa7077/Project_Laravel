<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

    <!-- Barra de navegación -->
    <nav style="background:#1e40af; padding:15px; width:100%; text-align:center;">
        <a href="/" style="color:white; margin-right:20px; text-decoration:none; font-weight:bold;">Inicio</a>
        <a href="/saludo" style="color:white; margin-right:20px; text-decoration:none; font-weight:bold;">Saludo</a>
        <a href="/contacto" style="color:white; text-decoration:none; font-weight:bold;">Contacto</a>
    </nav>

    <!-- Contenido principal -->
    <div style="margin-top:40px; text-align:center;">

        <h1 style="font-size:30px; font-weight:bold;">
            Bienvenido a mi Proyecto en Laravel
        </h1>

        <p style="margin-top:15px; font-size:18px;">
            Esta es la página principal.
        </p>

        <p style="margin-top:10px;">
            Usa la barra de navegación para ir a otras páginas.
        </p>

    </div>

</body>
</html>