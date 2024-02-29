@extends('layouts.app')

@section('page_title')
    {{ __('translations.terms_and_conditions') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="mt-4 bg-[#161321]">

        <div class="mx-auto max-w-7xl px-4 bg-[#161321] flex justify-center">
            <div class="py-9">
                <div class="text-center text-white md:text-3xl text-xl font-semibold my-5"
                    style="background-image: url(assets/img/webp/header-img.webp); width: 100%; background-size:cover; background-position:center; align-items:center; display:flex; justify-content:center; color:white;">
                    {{-- <img src="assets/img/png/optimizat.webp" alt="Imagine"> --}}
                    {{ __('translations.terms_and_conditions') }}
                </div>
                @include('app_pages.guest.Terms_and_conditions.Contents.content')
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
