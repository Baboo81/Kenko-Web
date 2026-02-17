<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Erreur')</title>

        @vite(['resources/css/reset.css', 'resources/css/error.css', 'resources/js/main.js', 'resources/js/blobs-animations.js', 'resources/js/app.js'])

        @stack('styles')
    </head>
    <body>
        <main>
            @yield('content')
        </main>
    </body>
</html>
