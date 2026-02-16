@extends('layouts.app')

@push('styles')
    @vite([
        'resources/css/reset.css',
        'resources/css/404.css',
    ])
@endpush

@section('content')
<section class="error">
    <div class="container">
        <div class="row">
            <div class="text-center mt-5">
                <h1>404</h1>
                <h2>Oups ! La page que vous cherchez n’existe pas.</h2>
                <p>Retournez à <a href="{{ url('/') }}">l’accueil</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
