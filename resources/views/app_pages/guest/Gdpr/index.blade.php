@extends('layouts.app')

@section('page_title')
    {{ __('translations.gdpr') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    {{ __('translations.gdpr') }} Page
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
