@extends('layouts.app')

@push('styles')
    @vite('resources/css/home.css')
@endpush

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
                <div class="col-lg-12 text-center mainContent">
                    <span class="mainTitleHome"></span>
                    <p class="secondTitle">
                        {{ $homeData['home']['banner'] ?? '' }}
                    </p>
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
                    <h1 class="text-center titleH1 mt-5">
                        {{ $homeData['purposes']['main_Title'] ?? '' }}
                    </h1>
                </div>
                <div class="row pictoBlocWeb justify-content-center mx-3 g-5">
                    @foreach (['article1', 'article2', 'article3'] as $tempPurposes)
                        @php $articles = $homeData['purposes'][$tempPurposes] @endphp
                        <article class="col-xl-4 col-xxl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 text-center">
                            <img src="{{ asset($articles['img']) ?? '' }} " class="img-fluid"
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

    {{-- Section : Offers  --}}
    <section class="offers">
        <div class="container">
            <div class="row">
                <div class="my-5">
                    <h1 class="text-center titleH1">
                        {{ $homeData['offers']['main_Title'] ?? '' }}
                    </h1>
                </div>
                @foreach ($homeData['offers']['cards'] as $index => $offer)
                    <div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 my-5">
                        <div class="card rounded-5">
                            <img src="{{ asset($offer['img']) ?? '' }}" class="card-img-top rounded-top-5"
                                alt="{{ $offer['alt'] }}">
                            <div class="card-body d-flex flex-column text-center">
                                <h5 class="card-title text-center fs-3 my-3">{{ $offer['title'] }}</h5>
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
                                    <img src="{{ asset($offer['popup']['img']) ?? '' }}" alt="">
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
@endsection
