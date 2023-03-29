<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/things.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/toggle.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/toggle.js') }}" type="text/javascript"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased">

    



    @include('layouts.public-nav')

    @yield('content')

    @yield('footer')


</body>

</html>