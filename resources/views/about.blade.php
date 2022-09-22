@extends('layouts.app')
@push('body_class', 'page-home')

@push('head_injection')
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/js/about.js'])
    <!-- Styles -->
@endpush

@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col py-5 text-center">
                <h1 class="text-light">About</h1>
                {{-- Proper way to load image in blade with Vite --}}
                <img src="{{ Vite::asset('resources/images/incompetent.gif') }}" alt="Funny gif" data-bs-placement="bottom" data-bs-toggle="tooltip" title="This is funny">
            </div>
        </div>
    </div>
@endsection