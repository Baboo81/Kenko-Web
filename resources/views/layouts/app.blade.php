<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kenko-Web | Agence web & développement web')</title>
    <meta name="description" content="@yield('meta_description', 'Développement web sur mesure avec Laravel, SEO et performance.')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Twitter -->
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/img/og-image.jpg') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="{{ asset('assets/img/og-image.jpg') }}">

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    {{-- Leaflet CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/css/navigation.css', 'resources/css/footer.css', 'resources/css/home.css', 'resources/css/contact.css', 'resources/css/qui-suis-je.css', 'resources/css/faq.css', 'resources/css/reset.css', 'resources/css/blobAnimation.css', 'resources/css/cookies-policy.css',  'resources/js/main.js', 'resources/js/blobs-animations.js', 'resources/js/app.js'])

    {{-- Styles spécifiques --}}
    @stack('styles')
</head>

<body>
    {{-- Nav --}}
    @include('partials.navigation')

    {{-- Cookies : banner --}}
    @include('partials.cookies')

    {{-- Blob Background Layer --}}
    <div id="blob-layer">
        <img src="{{ asset('assets/img/blobs/blob1.svg') }}" class="blob" id="blob1">
        <img src="{{ asset('assets/img/blobs/blob2.svg') }}" class="blob" id="blob2">
        <img src="{{ asset('assets/img/blobs/blob1.svg') }}" class="blob" id="blob3">
        <img src="{{ asset('assets/img/blobs/blob2.svg') }}" class="blob" id="blob4">
        <img src="{{ asset('assets/img/blobs/blob1.svg') }}" class="blob" id="blob5">
        <img src="{{ asset('assets/img/blobs/blob2.svg') }} " class="blob" id="blob6">
        <img src="{{ asset('assets/img/blobs/blob1.svg') }}" class="blob" id="blob7">
        <img src="{{ asset('assets/img/blobs/blob2.svg') }}" class="blob" id="blob8">
    </div>

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
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    {{-- Scripts spécifiques --}}
    @stack('scripts')
</body>

</html>
