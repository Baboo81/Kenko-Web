@extends('layouts.app')

@push('styles')
    @vite(['resources/css/reset.css', 'resources/css/contact.css'])
@endpush

@section('title', $contactData['sections'][0]['meta_title'] ?? 'Kenko-Web')

@section('meta_description', $contactData['sections'][0]['meta_description'] ?? 'Agence web à Waterloo')

@section('content')
 {{-- Div animation : progression de la page --}}
    <div id="scroll-indicator">
        <div class="inner-circle">
            <div class="scroll-arrow"></div>
        </div>
    </div>
{{-- Div animation : progression de la page END --}}

    <section class="contact my-5">
        <h1 class="text-center fs-2 mb-5 titleEffect">
            {{ $contactData['title'] }}
        </h1>
        <div class="container">
            {{-- Messages flash --}}
            @foreach (['success' => 'success', 'error' => 'danger'] as $key => $type)
                @if (session($key))
                    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
                        {{ session($key) }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                    </div>
                @endif
            @endforeach

            <div class="row align-items-center my-5 g-5">
                {{-- Illustration --}}
                <div class="col-md-6 d-none d-md-flex justify-content-center">
                    <img src="{{ asset($contactData['illustration']['src']) ?? '' }}"
                        alt="{{ $contactData['illustration']['alt'] }}" class="img-fluid rounded-4 shadow-sm"
                        style="object-fit: cover;">
                </div>

                {{-- Formulaire --}}
                <div class="col-md-6 col-12">
                    <form class="rounded-4 shadow-lg p-4 bg-light" action="{{ route('contact.send') }}" method="POST"
                        novalidate>
                        @csrf

                        {{-- HoneyPot --}}
                        <input type="text" name="website" style="display:none">

                        {{-- Champs de base --}}
                        @foreach ($contactData['fields'] as $field)
                            <div class="mb-3">
                                <label for="{{ $field['id'] }}"
                                    class="form-label fw-semibold">{{ $field['label'] }}</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi {{ $field['icon'] }}">
                                        </i>
                                    </span>
                                    <input type="{{ $field['type'] }}" class="form-control" id="{{ $field['id'] }}"
                                        name="{{ $field['id'] }}" placeholder="{{ $field['placeholder'] }}" required>
                                </div>
                            </div>
                        @endforeach

                        {{-- Champ message --}}
                        <div class="mb-3">
                            <label for="{{ $contactData['message_field']['id'] }}" class="form-label fw-semibold">
                                {{ $contactData['message_field']['label'] }}
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi {{ $contactData['message_field']['icon'] }}"></i>
                                </span>
                                <textarea class="form-control" id="{{ $contactData['message_field']['id'] }}"
                                    name="{{ $contactData['message_field']['id'] }}" rows="5"
                                    placeholder="{{ $contactData['message_field']['placeholder'] }}" required>
                            </textarea>
                            </div>
                        </div>

                        <div class="text-center my-5">
                            <button type="submit" class="button">
                                {{ $contactData['buttons']['submit'] }}
                            </button>
                        </div>
                    </form>

                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="text-decoration-none">
                            <button class="button" type="button">
                                {{ $contactData['buttons']['back'] }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
