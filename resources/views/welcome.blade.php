@extends('layouts.app')
@push('body_class', 'page-home')

@push('head_injection')
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @vite(['resources/js/home.js'])
    <!-- Styles -->
@endpush

@section('content')
    <div class="container py-5">
        <div class="row py-5">
            <div class="col py-5 text-center">
                <h1 class="text-light">Welcome</h1>
                {{-- Proper way to load image in blade with Vite --}}
                <img src="{{ Vite::asset('resources/images/hero-trinary-icon.png') }}" alt="Trinary symbol glitched" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Trinary">
                
                <h2 class="text-warning mt-5">Image loaded by JS:</h2>
                <div id="test">
                    {{-- Loading image with JS --}}
                </div>
            </div>
        </div>
    </div>
@endsection