@extends('layouts.app')

@section('page_title')
    {{ 'Dashboard' }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="mt-20 mb-2 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if (isAdmin())
                    @livewire('pages.auth.admin-dashboard', key(uniqid()))
                @else
                    {{ __("You're logged in as Guest!") }}
                    <h1 class="text-3xl font-bold underline">
                        Hello world!
                    </h1>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
