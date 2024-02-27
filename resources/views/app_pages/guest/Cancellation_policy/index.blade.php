@extends('layouts.app')

@section('page_title')
    {{ __('translations.cancellation_policy') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    {{ __('translations.cancellation_policy') }} Page
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
