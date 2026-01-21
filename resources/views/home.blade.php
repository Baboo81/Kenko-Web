@extends('layouts.app')

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
                <div class="col-12">
                    @if ($user)
                        <p>Bienvenue, {{ $user->name }}</p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 mainContent">
                    <h1 class="mainTitleHome"></h1>
                    <span class="secondTitle">
                        {{ $homeData['home'] }}
                    </span>
                </div>
            </div>
        </div>
    </section>
    {{-- Section : Banner END --}}
    @endsection
