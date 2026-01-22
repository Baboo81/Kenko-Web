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
@endsection
