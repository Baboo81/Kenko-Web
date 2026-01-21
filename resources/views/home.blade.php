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
        <div class="container">
            <div class="row">
                <div class="col-12 mainContent">
                    <span class="mainTitleHome"></span>
                    <p class="secondTitle">
                        {{ $homeData['home'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Banner END --}}
    @endsection
