<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kenko Web – Développement web & solutions digitales')</title>
    <meta name="description" content="@yield('meta_description', 'Développement web sur mesure avec Laravel, SEO et performance.')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/css/navigation.css', 'resources/css/footer.css', 'resources/js/main.js', 'resources/js/app.js'])

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

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Lucide --}}
    <script src="https://unpkg.com/lucide@latest"></script>

    {{-- Leaflet JS --}}
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-o9N1j7kP5QkQ4M4xj8M2JvY6kKpG5N6k6p+JQk5vY=" crossorigin=""></script>

    {{-- Vite --}}
    @vite(['resources/js/main.js', 'resources/js/app.js'])

    {{-- Scripts spécifiques --}}
    @stack('scripts')
</body>

</html>
