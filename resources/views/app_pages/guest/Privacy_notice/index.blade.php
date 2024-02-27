@extends('layouts.app')

@section('page_title')
    {{ __('translations.privacy_notice') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    {{ __('translations.privacy_notice') }} Page
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
