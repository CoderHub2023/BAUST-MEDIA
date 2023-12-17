<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <script src="https://kit.fontawesome.com/406650d497.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/things.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/toggle.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="{{ asset('js/toggle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/admin-navbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/profile-image.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/add-skills.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/public-nav.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/toggle-propic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/form-validation.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/ajax-csrf.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/registration.js') }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" src="{{ asset('css/public-nav.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-box {
            width: auto;
            height: auto;
            background: linear-gradient(to right, #764BA2, #667EEA);
        }
        .gradient-box2 {
            width: auto;
            height: auto;
            background: linear-gradient(to right, #667EEA, #764BA2);
        }
    </style>

</head>

<body class="antialiased bg-slate-200 dark:text-white dark:bg-slate-600">
    @yield('content')
    @yield('footer')
    
    <script>
        const html = document.documentElement;
        const darkModeToggle = document.getElementById('dark-mode-toggle'); // Changed querySelector to getElementById

        // Check if mode preference is stored and apply it on page load
        const storedMode = localStorage.getItem('darkMode');
        if (storedMode) {
            html.classList.toggle('dark', storedMode === 'true');
        }

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            const isDarkMode = html.classList.contains('dark');
            localStorage.setItem('darkMode', isDarkMode); // Store mode preference
        });

        // loading ui
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
            loader.classList.add("loader-hidden");
            loader.addEventListener("transitionend", () => {
                document.body.removeChild("loader");
            })
        })

        // Ajax setup
        
    </script>
</body>

</html>