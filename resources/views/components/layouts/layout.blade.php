<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Gestión de instituto</title>

    {{-- SOLO VITE (no duplicar CSS) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-100">

    {{-- Header --}}
    <x-layouts.header />

    {{-- Navegación --}}
    <x-layouts.nav />

    {{-- Contenido principal --}}
    <x-layouts.main>
        {{ $slot }}
    </x-layouts.main>

    {{-- Footer --}}
    <x-layouts.footer />

</body>
</html>
