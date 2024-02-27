@php
    [
        'choose_car' => [
            'search' => $search,
        ],
    ] = $rawData;
@endphp

@props([
    // 'sort_options' => ['Most Popular', 'Best Rating', 'Newest', 'Price: Low to High', 'Price: High to Low'],
    'product_details' => [
        [
            'product_name' => 'Dacia Logan',
            'product_code' => 'logan',
            'product_price' => '120',
            'product_options' => [
                [
                    'name' => 'First option',
                    'info' => 23,
                ],
                [
                    'name' => 'Second option',
                    'info' => 23,
                ],
                [
                    'name' => 'Third option',
                    'info' => 1,
                ],
                [
                    'name' => 'Fourth option',
                    'info' => 23,
                ],
            ],
        ],
        [
            'product_name' => 'Dacia Stepway',
            'product_code' => 'stepway',
            'product_price' => '120',
            'product_options' => [
                [
                    'name' => 'First option',
                    'info' => 23,
                ],
                [
                    'name' => 'Second option',
                    'info' => 23,
                ],
                [
                    'name' => 'Third option',
                    'info' => 1,
                ],
                [
                    'name' => 'Fourth option',
                    'info' => 23,
                ],
            ],
        ],
        // [
        //     'product_name' => 'Product 333',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
        // [
        //     'product_name' => 'Product 444',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
        // [
        //     'product_name' => 'Product 555',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
        // [
        //     'product_name' => 'Product 666',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
        // [
        //     'product_name' => 'Product 777',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
        // [
        //     'product_name' => 'Product 888',
        //     'product_price' => '120',
        //     'product_options' => [
        //         [
        //             'name' => 'First option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Second option',
        //             'info' => 23,
        //         ],
        //         [
        //             'name' => 'Third option',
        //             'info' => 1,
        //         ],
        //         [
        //             'name' => 'Fourth option',
        //             'info' => 23,
        //         ],
        //     ],
        // ],
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

                {{-- <div> @include('common.genericInputFields', [
                    'type' => 'search',
                    'placeholder' => 'Cauta masina',
                    'key' => 'Cauta',
                    'wireModelName' => 'rawData.choose_car.search',
                    'emptyInputClass' => config('constants.common_css.choose_car.empty_input'),
                    'inputData' => $search ?? null,
                    'showValidationMsg' => false,
                    'hideLabel' => true,
                    'validInputClass' => config('constants.common_css.choose_car.valid_input'),
                    'errorInputClass' => config('constants.common_css.choose_car.error_input'),
                    'emptyInputClass' => config('constants.common_css.choose_car.empty_input'),
                ])</div> --}}

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

                    {{-- <div class="hidden lg:block col-span-1">
                        <div class="pb-4 mb-6 border-b border-gray-200">

                            @include('common.genericInputFields', [
                                'type' => 'search',
                                'placeholder' => 'Cauta masina',
                                'key' => 'Cauta',
                                'wireModelName' => 'rawData.choose_car.search',
                                'emptyInputClass' => config('constants.common_css.choose_car.empty_input'),
                                'inputData' => $search ?? null,
                                'showValidationMsg' => false,
                                'validInputClass' => config('constants.common_css.choose_car.valid_input'),
                                'errorInputClass' => config('constants.common_css.choose_car.error_input'),
                                'emptyInputClass' => config('constants.common_css.choose_car.empty_input'),
                            ])

                        </div>

                        <ul role="list"
                            class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">

                            @foreach (range(1, 5) as $i)
                                <li>
                                    <a href="#">Totes {{ $i }}</a>
                                </li>
                            @endforeach

                        </ul>

                        <!-- Filters -->
                        <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                    class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500"
                                    aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-medium text-gray-900">Color</span>
                                    <span class="ml-6 flex items-center">
                                        <!-- Expand icon, show/hide based on section open state. -->
                                        @include('svg.plus-icon')
                                        <!-- Collapse icon, show/hide based on section open state. -->
                                        @include('svg.minus-icon')
                                    </span>
                                </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-0">
                                <div class="space-y-4">

                                    @foreach (range(1, 5) as $i)
                                        <div class="flex items-center">
                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White
                                                {{ $i }}</label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Content grid -->
                    <div class="col-span-6">
                        <!-- Your content -->

                        <div class="grid grid-cols-2">

                            @foreach ($product_details ?? [] as $value)
                                <div class="mx-auto px-5 mb-4">
                                    <div
                                        class="cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md w-full">
                                        <img class="w-full rounded-lg object-cover object-center flex-shrink-0"
                                            src="{{ $value['product_code'] === 'logan' ? asset('assets/img/jpeg/logan-alb.jpg') : asset('assets/img/jpeg/sandero.jpg') }}"
                                            alt="{{ $value['product_code'] }}" />
                                        <div>
                                            <div class="my-6 flex items-center justify-between px-4">
                                                <p class="font-bold text-gray-500">{{ $value['product_name'] }}</p>
                                                <p
                                                    class="rounded-full bg-blue-500 px-2 py-0.5 text-xs font-semibold text-white">
                                                    ${{ $value['product_price'] }}</p>
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
                                                'class' =>
                                                    'w-full p-2 bg-blue-500 hover:bg-blue-700 text-white border border-gray-300 rounded-md',
                                            ])

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </section>
            {{-- <pre>
                @php
                    print_r($rawData);
                @endphp
            </pre> --}}
        </main>
    </div>
</section>
