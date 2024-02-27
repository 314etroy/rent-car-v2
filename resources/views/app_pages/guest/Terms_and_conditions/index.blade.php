@extends('layouts.app')

@section('page_title')
    {{ __('translations.terms_and_conditions') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    {{ __('translations.terms_and_conditions') }} Page
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
