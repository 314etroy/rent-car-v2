@php
    [
        'choose_car' => [
            'search' => $search,
        ],
    ] = $rawData;
@endphp

@props([
    'product_details' => [
        [
            'product_name' => 'Dacia Logan Expression Tce 90 MT6',
            'product_code' => 'logan',
            'product_price' => '120',
            'product_options' => [
                [
                    'name' => 'Culoare',
                    'info' => 'GLACF ARTIC WHITE',
                ],
                [
                    'name' => 'Tapiterie',
                    'info' => 'DRAP10 Tapiterie Comfort',
                ],
            ],
        ],
        [
            'product_name' => 'Dacia Spring Extreme',
            'product_code' => 'stepway',
            'product_price' => '120',
            'product_options' => [
                [
                    'name' => 'Culoare',
                    'info' => 'MOTON CENOTE BLUE',
                ],
                [
                    'name' => 'Tapiterie',
                    'info' => 'DRAP10 Tapiterie Comfort',
                ],
            ],
        ],
    ],
])

{{-- Section 2 --}}
<section class="mt-4">
    <div>
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-white">
            <div class="border-b border-gray-200 pb-6 pt-8">
                {{-- Left Content --}}
                <h1 class="text-4xl font-bold text-center tracking-tight text-gray-900">
                    {{ __('translations.choose_car_section') }}
                </h1>

                {{-- Right Content --}}
                @if (count($sort_options ?? []))

                    <div class="flex items-center">
                        <div class="relative inline-block text-left">
                            <div>
                                <button type="button"
                                    class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900"
                                    id="menu-button" aria-expanded="false" aria-haspopup="true">
                                    Sort
                                    @include('svg.dropdown-down-arrow', [
                                        'class' =>
                                            '-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500',
                                    ])
                                </button>
                            </div>


                            <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                                <div class="py-1" role="none">

                                    @foreach ($sort_options ?? [] as $value)
                                        <button
                                            class="text-gray-500 block px-4 py-2 text-sm">{{ $value }}</button>
                                    @endforeach

                                </div>
                            </div>


                        </div>

                        <button type="button"
                            class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                            <span class="sr-only">Filters</span>
                            @include('svg.dropdown-down-arrow', ['class' => 'h-5 w-5'])
                        </button>

                    </div>
                @endif
            </div>

            <section aria-labelledby="products-heading" class="pb-6 pt-6">
                <div class="grid grid-cols-5 gap-6">

                    <!-- Content grid -->
                    <div class="col-span-6">
                        <!-- Your content -->

                        <div class="grid grid-cols-2">

                            @foreach ($product_details ?? [] as $value)
                                <div class="mx-auto px-5 mb-4">
                                    <div
                                        class="cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md w-full">
                                        <img class="w-full h-[400px] rounded-lg object-cover object-center flex-shrink-0"
                                            src="{{ $value['product_code'] === 'logan' ? asset('assets/img/jpeg/logan-alb.jpg') : asset('assets/img/jpeg/spring.jpg') }}" 
                                            alt="{{ $value['product_code'] }}" />
                                        <div>
                                            <div class="my-6 flex items-center justify-between px-4">
                                                <p class="font-bold text-gray-500">{{ $value['product_name'] }}</p>
                                                <p
                                                    class="rounded-full bg-[#7963e0] px-2 py-0.5 text-xs font-semibold text-white">
                                                    {{ $value['product_price'] }} Lei</p>
                                            </div>

                                            @foreach ($value['product_options'] ?? [] as $option)
                                                <div class="my-4 flex items-center justify-between px-4">
                                                    <p class="text-sm font-semibold text-gray-500">{{ $option['name'] }}
                                                    </p>
                                                    <p
                                                        class="rounded-full bg-gray-200 px-2 py-0.5 text-xs font-semibold text-gray-600">
                                                        {{ $option['info'] }}</p>
                                                </div>
                                            @endforeach

                                            <!-- Go to Section 2 Btn -->
                                            @include('common.generic-btn', [
                                                'btn_content' => 'Alege masina',
                                                'wire_method' => 'changeSection("2")',
                                                'class' => 'w-full p-2 rounded-md ' . getConstant('modal_generic_colors')['purple'],
                                            ])

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </section>

        </main>
    </div>
</section>
