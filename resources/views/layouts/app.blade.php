<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Kenko Web – Développement web & solutions digitales')</title>
        <meta name="description" content="@yield('meta_description', 'Développement web sur mesure avec Laravel, SEO et performance.')">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Styles spécifiques --}}
        @stack('styles')
    </head>
    <body>
        {{-- Nav --}}
        @include('partials.navigation')

        {{-- Contenu principal --}}
        <main>
            @yield('content')
        </main>

        {{-- Footer --}}
        @include('partials.footer')

        {{-- Scripts spécifiques --}}
        @stack('scripts')
    </body>
</html>
