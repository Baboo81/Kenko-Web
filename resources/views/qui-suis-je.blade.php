@extends('layouts.app')

@push('styles')
    @vite([
        'resources/css/qui-suis-je.css',
        'resources/css/contact.css',
    ])
@endpush

@section('title', $quiSuisJeData['sections'][0]['meta_title'] ?? 'Kenko-Web')

@section('meta_description', $quiSuisJeData['sections'][0]['meta_description'] ?? 'Agence web à Waterloo')

@section('content')
    {{-- Div animation : progression de la page --}}
    <div id="scroll-indicator">
        <div class="inner-circle">
            <div class="scroll-arrow"></div>
        </div>
    </div>
    {{-- Div animation : progression de la page END --}}

    {{-- Section : WhoIam --}}
    <section class="whoIam">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-items-center justify-content-center">
                        <img src="{{ asset('assets/img/quiSuisJe/quiSuisJe.svg') }}" alt="Photo me représentant"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : WhoIam END --}}

    {{-- Section : Qui suis-je ? --}}
    <section class="quiSuisJe my-5">
        <div class="container">
            @foreach ($quiSuisJeData['sections'] as $section)
                <div class="my-5">
                    <h1 class="text-center titleH1 my-5 fs-1 fontBlack">
                        {{ $section['title'] ?? '' }}
                    </h1>
                    <h3 class="text-center my-5">
                        {{ $section['sub_title'] ?? '' }}
                    </h3>
                </div>
                <div class="row text-center my-5 pictoBloc">
                    @foreach ($section['items'] as $item)
                        <article class="col-6 col-md-3 d-flex flex-column align-items-center mb-4">
                            <img src="{{ asset($item['img'])?? ''}}" alt="{{ $item['alt'] }}" class="img-fluid"
                                style="max-width: {{ $item['max_width'] }};">
                            <h4 class="fs-4 my-3">
                                {{ $item['label'] }}
                            </h4>
                        </article>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
    {{-- Section : Qui suis-je ? END --}}

    {{-- Section : Route --}}
    <section class="route">
        <div class="container">
            <h1 class="text-center fs-1 titleH1 my-5 p-5">
                {{ $quiSuisJeData['routeSection']['title'] }}
            </h1>
            <div class="row d-flex align-items-center justify-content-center">
                <article class="col-md-12 my-5 p-5">
                    <div class="boxWhoIam text-center rounded-5 p-5">
                        <div class="col-md-12 d-flex align-items-center justify-content-center">
                            <img src="{{ asset($quiSuisJeData['routeSection']['image']['src']) ?? ''}}"
                                alt="{{ $quiSuisJeData['routeSection']['image']['alt'] }}"
                                style="height: {{ $quiSuisJeData['routeSection']['image']['height'] }};">
                        </div>

                        @foreach ($quiSuisJeData['routeSection']['paragraphs'] as $paragraph)
                            <p class="fontWhite my-3">
                                {{ $paragraph }}
                            </p>
                        @endforeach

                        <div class="text-center my-5">
                            <a href="{{ $quiSuisJeData['routeSection']['button']['url'] }}" target="_blank"
                                rel="noopener noreferrer">
                                <button class="button">
                                    {{ $quiSuisJeData['routeSection']['button']['text'] }}
                                </button>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    {{-- Section : Route END --}}
@endsection
