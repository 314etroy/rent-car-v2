@extends('layouts.app')

@section('page_title')
    {{ __('translations.gdpr') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="mt-20 bg-[#161321]">
        <div class="mx-auto max-w-7xl px-4 bg-[#161321] flex justify-center">
            <div>
                @include('common.generic-page-header', [
                    'imageUrl' => 'assets/img/webp/header-img.webp',
                    'redirectUrl' => route('reserve_now'),
                    'description' => __('translations.gdpr'),
                ])
                @include('app_pages.guest.Gdpr.Contents.content')
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
