@extends('layouts.error')

@push('styles')
    @vite(['resources/css/reset.css', 'resources/css/error.css'])
@endpush

@section('content')
    <section class="error">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-6 text-center mt-5">
                    <h1 class="error-title my-5">ERREUR 404</h1>
                    <h2 class="text-muted fs-3 my-5">Oups ! La page que vous cherchez n’existe pas.</h2>
                    <div class="text-center my-5">
                        <a href="{{ url('/') }}" class="text-decoration-none">
                            <button class="button" type="button">
                                Accueil
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
