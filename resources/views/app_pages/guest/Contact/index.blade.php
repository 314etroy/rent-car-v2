@extends('layouts.app')

@section('page_title')
    {{ __('translations.contact') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flowbite.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@props([
    'right_inputs' => [
        [
            'type' => 'text',
            'key' => 'Nume-si-Prenume',
            'inputData' => $name ?? null,
            'placeholder' => 'Nume si Prenume',
            'wireModelName' => 'rawData.contact.name',
            'validLabelClass' => config('constants.common_css.contact.valid_label'),
            'errorLabelClass' => config('constants.common_css.contact.error_label'),
            'emptyLabelClass' => config('constants.common_css.contact.empty_label'),
            'validInputClass' => config('constants.common_css.contact.valid_input'),
            'errorInputClass' => config('constants.common_css.contact.error_input'),
            'emptyInputClass' => config('constants.common_css.contact.empty_input'),
        ],
        [
            'type' => 'email',
            'key' => 'Email',
            'inputData' => $email ?? null,
            'placeholder' => 'Adresa de email',
            'wireModelName' => 'rawData.contact.email',
            'validLabelClass' => config('constants.common_css.contact.valid_label'),
            'errorLabelClass' => config('constants.common_css.contact.error_label'),
            'emptyLabelClass' => config('constants.common_css.contact.empty_label'),
            'validInputClass' => config('constants.common_css.contact.valid_input'),
            'errorInputClass' => config('constants.common_css.contact.error_input'),
            'emptyInputClass' => config('constants.common_css.contact.empty_input'),
        ],
        [
            'type' => 'text',
            'key' => 'Subiect',
            'inputData' => $city ?? null,
            'placeholder' => 'Subiect',
            'wireModelName' => 'rawData.contact.city',
            'validLabelClass' => config('constants.common_css.contact.valid_label'),
            'errorLabelClass' => config('constants.common_css.contact.error_label'),
            'emptyLabelClass' => config('constants.common_css.contact.empty_label'),
            'validInputClass' => config('constants.common_css.contact.valid_input'),
            'errorInputClass' => config('constants.common_css.contact.error_input'),
            'emptyInputClass' => config('constants.common_css.contact.empty_input'),
        ],
        [
            'type' => 'textarea',
            'key' => 'Continut-mesaj',
            'inputData' => $city ?? null,
            'placeholder' => 'Scrie mesajul tău aici. Păstrați-l simplu și concis!',
            'wireModelName' => 'rawData.contact.city',
            'rows' => 5,
            'validLabelClass' => config('constants.common_css.contact.valid_label'),
            'errorLabelClass' => config('constants.common_css.contact.error_label'),
            'emptyLabelClass' => config('constants.common_css.contact.empty_label'),
            'validInputClass' => config('constants.common_css.contact.valid_textarea'),
            'errorInputClass' => config('constants.common_css.contact.error_textarea'),
            'emptyInputClass' => config('constants.common_css.contact.empty_textarea'),
        ],
    ],
])

@section('content')
    <section class="flex justify-center mt-20 bg-white">
        <div class="container p-5">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                <div data-aos="fade-up" data-aos-duration="600">
                    <h2 class="md:text-3xl text-xl font-semibold my-5">Contacteazane</h2>
                    <p class="text-slate-700">Pentru mai multe informatii va rugam completati formularul.</p>
                    <p class="text-slate-500 mt-12">Adresa noastra de email:</p>
                    <h4>
                        <a href="#" class="text-lg font-semibold text-slate-600">office@starentinchirieriauto.ro</a>
                    </h4>
                    <div class="mt-12">
                        <div class="flex flex-col gap-3">
                            <h5 class="text-slate-400">Ne puteti gasii si online pe:</h5>
                            <div class="flex gap-5">
                                <div>
                                    <a href="#">
                                        <svg class="w-7 h-7 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <svg class="w-7 h-7 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <svg class="w-7 h-7 text-slate-500" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5">
                                            </rect>
                                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-duration="900">
                    <form class="w-full">
                        <div>
                            @foreach ($right_inputs ?? [] as $value)
                                @include('common.genericInputFields', $value)
                            @endforeach
                        </div>
                        <div class="flex justify-end">
                            @include('common.generic-btn', [
                                'btn_content' => 'Trimite mesaj',
                                'wire_method' => 'changeSection("1")',
                                'class' => 'w-full p-2 rounded-md ' . getConstant('modal_generic_colors')['purple'],
                            ])
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
