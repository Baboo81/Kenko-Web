@extends('layouts.app')

@push('styles')
    @vite([
        'resources/css/reset.css',
        'resources/css/home.css',
    ])
@endpush

@section('title', 'Agence web Waterloo | Création de sites internet – Kenko-Web')

@section('meta_description',
    'Kenko-Web est une agence web à Waterloo spécialisée en création de sites internet,
    développement web et accompagnement digital.')

@section('content')
    {{-- Div animation : progression de la page --}}
    <div id="scroll-indicator">
        <div class="inner-circle">
            <div class="scroll-arrow"></div>
        </div>
    </div>
    {{-- Div animation : progression de la page END --}}

    {{-- Section : Banner --}}
    <section class="home">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-12 mainContent">
                    <span class="mainTitleHome"></span>
                    <h1 class="secondTitle">
                        {{ $homeData['home']['banner'] ?? '' }}
                    </h1>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Banner END --}}

    <!-- SVG WAVE -->
    <svg class="waveWeb" viewBox="0 0 1440 120" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
        aria-hidden="true" role="img">
        <path d="M0,32 C200,120 400,0 720,48 C1040,96 1240,0 1440,48 L1440 120 L0 120 Z" fill="#FFFFF0"></path>
    </svg>

    {{-- Section : Purposes --}}
    <section class="purposes">
        <div class="containter">
            <div class="row">
                <div class="p-5">
                    <h2 class="text-center fs-2 titleEffect mt-5">
                        {{ $homeData['purposes']['main_Title'] ?? '' }}
                    </h2>
                </div>
                <div class="row pictoBlocWeb justify-content-center">
                    @foreach (['article1', 'article2', 'article3'] as $tempPurposes)
                        @php $articles = $homeData['purposes'][$tempPurposes] @endphp
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset($articles['img']) ?? '' }} " class="img-fluid mx-5"
                                alt="Pictos représentant les différentes propositions du suivi">
                            <h4 class="mb-5">
                                {{ $articles['sub_Title'] ?? '' }}
                            </h4>
                            <p class="text-muted">
                                {{ $articles['txt'] ?? '' }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Purposes END --}}

    {{-- blueBlob svg --}}
    <div class="blob-container" style="position: relative; width: 100%; height: 400px; overflow: visible;">
        <svg id="blob1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 401.81 237.25"><path d="M672.54,674.5a83.58,83.58,0,0,0-18.69-1.08C641,674,628.42,676.57,616,680c-11.72,3.27-23.19,7.32-34.73,11.17-10.39,3.47-20.83,6.79-31.51,9.29a138.44,138.44,0,0,1-33.23,4c-14.13-.18-27.64-3-40.24-9.63a71.09,71.09,0,0,1-15.82-11.15,53.52,53.52,0,0,1-15.08-56c.69-2.3,1.54-4.56,2.31-6.84a2.07,2.07,0,0,0,.68-1.93v0l.45-.69c2.12-3.72,4.05-7.55,6.38-11.13,7.62-11.76,17.45-21.41,28.71-29.67a194.27,194.27,0,0,1,26.53-15.88c6.45-3.3,12.9-6.6,19.29-10a140.9,140.9,0,0,0,16.53-10.2,26.71,26.71,0,0,0,2.37-2.16h0a1,1,0,0,0,1.22-.8h0l.77-.57a52.7,52.7,0,0,0,11.13-10.68c2.34-2.89,4.47-6,6.61-9a169.29,169.29,0,0,1,19.93-23.65,102.47,102.47,0,0,1,28.59-20.3A74.06,74.06,0,0,1,655,467.58a109.11,109.11,0,0,1,46.51,15.24,188.19,188.19,0,0,1,16.08,10.89q7.39,5.51,14.77,11.06a200.87,200.87,0,0,0,38.54,22.59c9.11,4.08,18.16,8.27,26.84,13.23a116,116,0,0,1,19.39,13.58c13.19,11.65,21.43,26.22,25.43,43.27a81.3,81.3,0,0,1,1.87,24.87,75.63,75.63,0,0,1-10.16,33.06l-3,5.11-.5.77a.67.67,0,0,0-.26.41l-.54.84,0,0c-.18.26-.36.51-.55.76s-.27.35-.41.53l-.41.66h0a22.17,22.17,0,0,0-1.85,1.77,84.16,84.16,0,0,1-26,20.93,78.25,78.25,0,0,1-35.7,9.1,106.91,106.91,0,0,1-25.76-3c-9-2.11-17.72-5-26.45-8-9.15-3.07-18.27-6.24-27.67-8.46-3.51-.83-7-1.91-10.64-1.88h0A2,2,0,0,0,672.54,674.5Zm64-163c-.58-.81-1.12-1.7-2.36-1.39.12-1.13-.88-1.39-1.53-1.87-4.67-3.46-9.33-6.92-14.06-10.31s-9.23-6.7-14-9.82a114.28,114.28,0,0,0-38-15.94,18.14,18.14,0,0,0-2.87-.18,7.31,7.31,0,0,0-1.49-.56q-3.75-.52-7.5-.94a66.28,66.28,0,0,0-28.54,3.2A87.9,87.9,0,0,0,597,490.55a155.59,155.59,0,0,0-25.35,28c-2.44,3.38-4.91,6.73-7.33,10.11-.35.49-1,.94-.64,1.72-.5-.32-.79,0-1.08.35-1.1,1.22-2.15,2.49-3.3,3.66a96.2,96.2,0,0,1-17,13.47c-6.84,4.39-14,8.11-21.25,11.83-6.82,3.51-13.67,7-20.42,10.61a123.68,123.68,0,0,0-30.36,22.86,97.39,97.39,0,0,0-18.15,25.26,55.51,55.51,0,0,0-4.92,13.87,47.37,47.37,0,0,0,.94,27.57c3.31,10,9.4,18,17.51,24.61,13,10.53,28,15.69,44.54,16.85A121.64,121.64,0,0,0,542,699.07a268.88,268.88,0,0,0,32.08-8.57c11.37-3.7,22.7-7.51,34.1-11.11A191.65,191.65,0,0,1,648,670.92c2.29-.14,4.58-.33,6.88-.41a117.5,117.5,0,0,1,33.88,4.16c9.88,2.61,19.5,6,29.18,9.24,10.63,3.55,21.31,6.85,32.44,8.54a80,80,0,0,0,30.1-.93c22-5,47.65-21.27,58-52.42a7.87,7.87,0,0,0,.15-1.89,5.51,5.51,0,0,0,.61-1.11,79.69,79.69,0,0,0-26.92-82.16,124.24,124.24,0,0,0-22.69-14.49c-7.35-3.68-14.79-7.16-22.24-10.64A190.57,190.57,0,0,1,738,512.18a8.61,8.61,0,0,0-1.44-.67Z" transform="translate(-442.91 -467.28)" style="fill:#121110"/><path d="M674.62,674.9c3.66,0,7.13,1.05,10.64,1.88,9.4,2.22,18.52,5.39,27.67,8.46,8.73,2.94,17.47,5.87,26.45,8a106.91,106.91,0,0,0,25.76,3,78.25,78.25,0,0,0,35.7-9.1,84.16,84.16,0,0,0,26-20.93,22.17,22.17,0,0,1,1.85-1.77,2.41,2.41,0,0,1-.65,2.42c-2.16,3-4.15,6.22-6.57,9a79.78,79.78,0,0,1-14,12.93,81.12,81.12,0,0,1-30.09,13.54,73.6,73.6,0,0,1-13.65,1.75A88,88,0,0,1,734,699.56a197.63,197.63,0,0,1-20.23-7.85c-9.11-4.05-18.23-8.1-27.4-12-3.32-1.42-6.77-2.53-10.17-3.79C675.6,675.66,674.85,675.7,674.62,674.9Z" transform="translate(-442.91 -467.28)" style="fill:#e3c7af"/><path d="M548.67,539.33a26.71,26.71,0,0,1-2.37,2.16,140.9,140.9,0,0,1-16.53,10.2c-6.39,3.39-12.84,6.69-19.29,10A194.27,194.27,0,0,0,484,577.56c-11.26,8.26-21.09,17.91-28.71,29.67-2.33,3.58-4.26,7.41-6.38,11.13h-.53a42.83,42.83,0,0,1,3.83-12.53,76.08,76.08,0,0,1,11.36-18,112.73,112.73,0,0,1,27.37-23.44,131.18,131.18,0,0,1,19.32-9.88c9.71-4.05,19.53-7.86,29.29-11.79,2.34-.94,4.63-2,7-2.94A11.26,11.26,0,0,1,548.67,539.33Z" transform="translate(-442.91 -467.28)" style="fill:#e3c7af"/><path d="M672.54,674.5a2,2,0,0,1,2.07.4A1.61,1.61,0,0,1,672.54,674.5Z" transform="translate(-442.91 -467.28)" style="fill:#cfb38b"/><path d="M448.42,619a2.07,2.07,0,0,1-.68,1.93A1.71,1.71,0,0,1,448.42,619Z" transform="translate(-442.91 -467.28)" style="fill:#cdb18a"/><path d="M549.87,538.54a1,1,0,0,1-1.22.8C548.74,538.59,549.24,538.47,549.87,538.54Z" transform="translate(-442.91 -467.28)" style="fill:#d0b18a"/><path d="M829.49,663.24c.19-.25.37-.5.55-.76C829.86,662.73,829.68,663,829.49,663.24Z" transform="translate(-442.91 -467.28)" style="fill:#cdb18a"/><path d="M830,662.5l.54-.84Z" transform="translate(-442.91 -467.28)" style="fill:#cdb18a"/><path d="M830.82,661.25l.5-.77Z" transform="translate(-442.91 -467.28)" style="fill:#cdb18a"/><path d="M550.64,538l-.77.57Z" transform="translate(-442.91 -467.28)" style="fill:#d0b18a"/><path d="M448.33,618.36h.53l-.45.69Z" transform="translate(-442.91 -467.28)" style="fill:#cdb18a"/><path d="M828.67,664.43l.41-.66c.06.14.13.28.2.43Z" transform="translate(-442.91 -467.28)" style="fill:#cfb38b"/><path d="M838.66,637.21a7.87,7.87,0,0,1-.15,1.89c-10.34,31.15-36,47.41-58,52.42a80,80,0,0,1-30.1.93c-11.13-1.69-21.81-5-32.44-8.54-9.68-3.23-19.3-6.63-29.18-9.24a117.5,117.5,0,0,0-33.88-4.16c-2.3.08-4.59.27-6.88.41-1.52-.18-3-.48-4.55-.51a127.85,127.85,0,0,0-23,1.32c-4.87.78-9.79,1.28-14.61,2.27-11.37,2.34-22.71,4.88-34,7.37-6.42,1.4-12.85,2.78-19.36,3.69-3.47.48-6.94,1-10.42,1.41-3.91.44-7.84.94-11.77,1.06a126.85,126.85,0,0,1-17.1-.43,94.74,94.74,0,0,1-14.57-2.47,79.69,79.69,0,0,1-21.2-8.82A68.74,68.74,0,0,1,458,658.74a49.51,49.51,0,0,1-9.79-21.68c-.27-1.61-.66-3.2-1-4.79a55.51,55.51,0,0,1,4.92-13.87,97.39,97.39,0,0,1,18.15-25.26,123.68,123.68,0,0,1,30.36-22.86c6.75-3.64,13.6-7.1,20.42-10.61,7.21-3.72,14.41-7.44,21.25-11.83a96.2,96.2,0,0,0,17-13.47c1.15-1.17,2.2-2.44,3.3-3.66.29-.32.58-.67,1.08-.35a63.48,63.48,0,0,0,14.56-12.73c4.2-4.92,8.52-9.72,13.09-14.3a135.58,135.58,0,0,1,23.28-18.7,88.38,88.38,0,0,1,23.34-10.41,56.52,56.52,0,0,1,11.94-2.11c4.59-.28,9.2-.08,13.81-.09a18.14,18.14,0,0,1,2.87.18,114.28,114.28,0,0,1,38,15.94c4.78,3.12,9.38,6.49,14,9.82s9.39,6.85,14.06,10.31c.65.48,1.65.74,1.53,1.87.62.75,1.14,1.66,2.36,1.39v0c-.33.93.34,1.44.89,1.94,2.18,2,4.35,4,6.6,5.95,3.42,2.92,6.85,5.84,10.37,8.64,7.92,6.3,16.57,11.51,25.32,16.56,10.28,5.93,20.32,12.22,29.48,19.79A89.42,89.42,0,0,1,821.76,577a76,76,0,0,1,15.38,32.41A61.09,61.09,0,0,1,838.79,623C838.71,627.76,838.7,632.48,838.66,637.21Z" transform="translate(-442.91 -467.28)" style="fill:#8ccece"/></svg>
    </div>
    {{-- blueBlob svg END --}}

    {{-- Section : Offers  --}}
    <section class="offers">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h2 class="text-center fs-2 titleEffect mb-5">
                        {{ $homeData['offers']['main_Title'] ?? '' }}
                    </h2>
                </div>
                @foreach ($homeData['offers']['cards'] as $index => $offer)
                    <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-5">
                        <div class="card rounded-5">
                            <img src="{{ asset($offer['img']) ?? '' }}" class="card-img-top rounded-top-5"
                                alt="{{ $offer['alt'] }}">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title text-muted text-center fs-3 my-3">{{ $offer['title'] }}</h5>
                                <h6 class="fontBolded fs-5 my-3">{{ $offer['price'] }}</h6>
                                <p class="card-text">{{ $offer['text'] }}</p>
                                <div class="button-container mt-auto justify-content-center">
                                    <button onclick="showPopup('popup{{ $index + 1 }}')" class="my-3">À qui s'adresse
                                        cette offre ?</button>
                                </div>
                            </div>

                            {{-- Popup --}}
                            <div class="popup-container" id="popup{{ $index + 1 }}">
                                <div class="popup">
                                    <h4 class="fs-3 my-3">{{ $offer['popup']['title'] }}</h4>
                                    <img src="{{ asset($offer['popup']['img']) ?? '' }}"
                                        alt="Image représentant un personnage devant un ordinateur">
                                    <p class="text-start my-3">{{ $offer['popup']['intro'] }}</p>
                                    <ul class="text-start">
                                        @foreach ($offer['popup']['items'] as $item)
                                            <li class="my-2">&nbsp;{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                    @if (!empty($offer['popup']['outro']))
                                        <p class="pPopUp fs-6 my-3">{{ $offer['popup']['outro'] }}</p>
                                    @endif
                                    <div class="button-container justify-content-center">
                                        <button onclick="closePopup('popup{{ $index + 1 }}')"
                                            class="my-3">Fermer</button>
                                    </div>
                                </div>
                            </div>
                            {{-- Popup END --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Section : Offers  END --}}

    {{-- Section : Skills --}}
    <section class="skills">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h2 class="text-center fs-2 titleEffect">
                        {{ $homeData['skills']['main_Title'] ?? '' }}
                    </h2>
                </div>
                {{-- Bloc : img --}}
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="/assets/img/pictos/atouts.svg" class="pictoAtoutsPerso"
                        alt="Picto représentant deux personnages tenant un panneau">
                </div>
                {{-- Bloc : articles/pictos --}}
                <div class="col-md-6 d-flex flex-column skillsContent">
                    @foreach (['article1', 'article2', 'article3'] as $tempSkills)
                        @php
                            $article = $homeData['skills'][$tempSkills];
                        @endphp
                        <article class="text-center">
                            <img src="{{ asset($article['img']) ?? '' }}" class="pictoAtouts"
                                alt="{{ $article['text'] }}">
                            <p class="text-muted p-1">
                                {{ $article['text'] ?? '' }}
                            </p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Skills END --}}

    {{-- Section : Time Line --}}
    <section class="timeLine">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h2 class="text-center fs-2 titleEffect">
                        {{ $homeData['timeline']['main_Title'] ?? '' }}
                    </h2>
                </div>
            </div>
            <section class="container py-5">
                <div class="timeline">
                    @foreach ($homeData['timeline']['steps'] as $step)
                        <div class="timeline-item">
                            <div class="timeline-content text-center">
                                <h4 class="fw-bold my-3">{{ $step['title'] ?? '' }}</h4>
                                <img src="{{ asset($step['img'] ?? '') }}" alt="{{ $step['alt'] ?? '' }}"
                                    class="me-3 my-2" width="{{ $step['width'] ?? 60 }}">
                                <p class="text-muted">{{ $step['text'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </section>
    {{-- Section : Time Line END --}}

    {{-- Section : Maintenance --}}
    <section class="maintenance">
        <div class="container">
            <div class="row p-2">
                <div class="text-center my-5">
                    <h2 class="fs-2 titleEffect">
                        {{ $homeData['maintenance']['main_Title'] ?? '' }}
                    </h2>
                </div>

                <div class="boxWeb rounded-5 p-5 d-flex flex-wrap justify-content-center">

                    {{-- IMAGE — cachée mobile / visible dès sm / en haut sur md --}}
                    <div
                        class="col-12 col-md-6
                            d-none d-sm-flex
                            align-items-center justify-content-center
                            order-md-1 order-lg-1">
                        <img src="{{ $homeData['maintenance']['img'] }}" alt="{{ $homeData['maintenance']['alt'] }}"
                            class="img-fluid w-100" style="object-fit:cover;">
                    </div>

                    {{-- TEXTE --}}
                    <div class="col-12 col-md-6 order-md-2 order-lg-2">
                        <article class="fontWhite">
                            <p class="text-center">{!! $homeData['maintenance']['intro'] !!}</p>
                            <h4 class="text-center my-3">{{ $homeData['maintenance']['title'] }}</h4>

                            @foreach ($homeData['maintenance']['types'] as $type)
                                <ul class="mx-3 my-4">
                                    <h5>{{ $type['category'] }}</h5>
                                    @foreach ($type['items'] as $item)
                                        <li class="my-2">{{ $loop->iteration }}. {{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- Section : Maintenance END --}}


    {{-- Section : Hébergement --}}
    <section class="hosting">
        <div class="container">
            <div class="row p-2">
                <div class="text-center my-5">
                    <h2 class="fs-2 titleEffect">
                        {{ $homeData['hosting']['main_Title'] ?? '' }}
                    </h2>
                </div>

                <div class="boxWeb rounded-5 p-5 d-flex flex-wrap justify-content-center">

                    {{-- IMAGE — cachée mobile / visible dès sm / en haut sur md --}}
                    <div
                        class="col-12 col-md-6
                            d-none d-sm-flex
                            align-items-center justify-content-center
                            order-md-1 order-lg-2">
                        <img src="{{ $homeData['hosting']['img'] ?? '' }}" alt="{{ $homeData['hosting']['alt'] ?? '' }}"
                            class="img-fluid w-100" style="object-fit:cover;">
                    </div>

                    {{-- TEXTE --}}
                    <div class="col-12 col-md-6 order-md-2 order-lg-1">
                        <article class="fontWhite">
                            <p class="text-center">{!! $homeData['hosting']['intro'] !!}</p>

                            @foreach ($homeData['hosting']['sections'] as $section)
                                <div class="my-3">
                                    <h5 class="my-2">{{ $section['title'] }}</h5>
                                    <p>{!! $section['txt'] !!}</p>
                                </div>
                            @endforeach
                        </article>
                    </div>

                </div>

            </div>
        </div>
    </section>
    {{-- Section : Hébergement END --}}

    {{-- Section : Trust --}}
    <section class="trustSection">
        <div class="container">
            <div class="row align-items-center p-2">
                <div class="trustBox d-flex justify-content-center align-items-center">
                    {{-- Texte à gauche --}}
                    <div class="col-md-3 d-flex flex-column align-items-start text-md-start text-center mx-5">
                        <article class="text-center">
                            <p class="fs-4 fontWhite mb-3">{{ $homeData['trust']['title1'] ?? '' }}</p>
                            <p class="fs-3 fontWhite">{{ $homeData['trust']['title2'] ?? '' }}</p>
                        </article>
                    </div>

                    {{-- Logos à droite --}}
                    <div
                        class="col-md-3 d-flex justify-content-center align-items-center position-relative logo-container">
                        @foreach ($homeData['trust']['logos'] as $index => $logo)
                            <img id="logo{{ $index + 1 }}" class="logo {{ $index === 0 ? 'active' : '' }}"
                                src="{{ asset($logo['src']) ?? '' }}" alt="{{ $logo['alt'] ?? '' }}"
                                style="height: 10rem;">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Trust END --}}
@endsection
