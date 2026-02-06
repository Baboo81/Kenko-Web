@extends('layouts.app')

@section('title', 'Politique de cookies | Kenko-Web')
@section('meta_description', 'Découvrez la politique de cookies de Kenko-Web et comment nous utilisons les cookies pour améliorer votre expérience.')

@section('content')
<section class="container my-5">
   <h1>{{ $cookiesPolicy['heading'] }}</h1>
    <p>{{ $cookiesPolicy['intro'] }}</p>

    <h2>{{ $cookiesPolicy['purpose_intro'] }}</h2>
    <ul>
        @foreach($cookiesPolicy['purposes'] as $purpose)
            <li>{{ $purpose }}</li>
        @endforeach
    </ul>

    <p>{{ $cookiesPolicy['consent_note'] }}</p>

    <h2>{{ $cookiesPolicy['philosophy_heading'] }}</h2>
    <ul>
        @foreach($cookiesPolicy['philosophy_points'] as $point)
            <li>{{ $point }}</li>
        @endforeach
    </ul>

    <h2>Cookies utilisés sur le site</h2>
    <ul>
        @foreach($cookiesPolicy['cookies_list'] as $cookie)
            <li>
                <strong>{{ $cookie['name'] }}</strong>
                ({{ $cookie['category'] }}) : {{ $cookie['purpose'] }} – Durée : {{ $cookie['duration'] }}
            </li>
        @endforeach
    </ul>

    <p>{{ $cookiesPolicy['how_to_change'] }}</p>
    <p>Pour en savoir plus sur la protection de vos données :
        <a href="{{ $cookiesPolicy['privacy_link'] }}">Politique de confidentialité</a>
        ou contactez-nous à <a href="mailto:{{ $cookiesPolicy['contact'] }}">{{ $cookiesPolicy['contact'] }}</a>.
    </p>
</section>
@endsection
