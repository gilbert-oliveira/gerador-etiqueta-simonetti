<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Gerador de Etiqueta')</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}" class="text-black">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>


<main>@yield('main')</main><!-- Main -->

<!-- Custom Scripts -->
@yield('js')
@stack('js')

</body>
</html>
