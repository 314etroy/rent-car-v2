@extends('layouts.app')

@section('page_title')
    {{ __('translations.gdpr') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="mt-4 bg-[#161321]">

        <div class="mx-auto max-w-7xl px-4 bg-[#161321] flex justify-center">
            <div class="py-9">
                <div class="text-center text-white md:text-3xl text-xl font-semibold my-5">
                    {{ __('translations.gdpr') }}
                </div>
                @include('app_pages.guest.Gdpr.Contents.content')
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
