<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-box {
            width: auto;
            height: auto;
            background: linear-gradient(to right, #764BA2, #667EEA);
        }
        .gradient-box2 {
            background: linear-gradient(to right, #667EEA, #764BA2);
        }
        .gradient-box3 {
            background: linear-gradient(to right, #4E65FF, #92EFFD);
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900 gradient-box">
        <div class="mt-8 w-full sm:max-w-md">
            <a href="/">
                <img src="{{ asset('uploads/buastmedialogo.webp') }}" alt="Your Logo" class="mx-auto lg:mx-0 lg:-mt-20 rounded-md">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg border border-green-400">
            {{ $slot }}
        </div>
    </div>
</body>



</html>