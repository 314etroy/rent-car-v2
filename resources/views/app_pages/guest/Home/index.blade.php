@extends('layouts.app')

@section('page_title')
    {{ __('translations.home') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@section('content')
    <!-- Loader -->
    {{-- @include('app_pages.guest.Home.Content.loader') --}}

    <!-- hero section -->
    @include('app_pages.guest.Home.Content.hero')

    <!-- service -->
    @include('app_pages.guest.Home.Content.info')

    <!-- about -->
    @include('app_pages.guest.Home.Content.about')

    <!-- Portfolio -->
    @include('app_pages.guest.Home.Content.portofoliuAuto')

    <!-- News -->
    @include('app_pages.guest.Home.Content.testimoniale')

    <!-- contact -->
    {{-- @include('app_pages.guest.Home.contact') --}}
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallaxmouse.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
@endpush
