@php
    [
        'additional_services' => [
            'starter_1' => $starter_1,
            'starter_2' => $starter_2,
            'starter_3' => $starter_3,
        ],
    ] = $rawData;
@endphp

@props([
    'warrantyCard' => [
        [
            'card_name' => 'Starter 1',
            'card_price' => '49',
            'card_details' => [
                'Up to 600 minutes usage time',
                'Use for personal only',
                'Add up to 10 attendees',
                'Technical support via email',
            ],
            'checkbox' => [
                'type' => 'checkbox',
                'key' => 'warranty-additional-service-starter-1',
                'inputData' => $starter_1 ?? null,
                'labelClass' => 'block',
                'wireModelName' => 'rawData.additional_services.starter_1',
                'validLabelClass' => config('constants.common_css.additional_services.valid_label'),
                'errorLabelClass' => config('constants.common_css.additional_services.error_label'),
                'emptyLabelClass' => config('constants.common_css.additional_services.empty_label'),
                'validInputClass' => config('constants.common_css.additional_services.valid_checkbox'),
                'errorInputClass' => config('constants.common_css.additional_services.error_checkbox'),
                'emptyInputClass' => config('constants.common_css.additional_services.empty_checkbox'),
            ],
        ],
        [
            'card_name' => 'Starter 2',
            'card_price' => '55',
            'card_details' => [
                'Up to 750 minutes usage time',
                'Use for personal only',
                'Add up to 10 attendees',
                'Technical support via email',
            ],
            'checkbox' => [
                'type' => 'checkbox',
                'key' => 'warranty-additional-service-starter-2',
                'inputData' => $starter_2 ?? null,
                'labelClass' => 'block',
                'wireModelName' => 'rawData.additional_services.starter_2',
                'validLabelClass' => config('constants.common_css.additional_services.valid_label'),
                'errorLabelClass' => config('constants.common_css.additional_services.error_label'),
                'emptyLabelClass' => config('constants.common_css.additional_services.empty_label'),
                'validInputClass' => config('constants.common_css.additional_services.valid_checkbox'),
                'errorInputClass' => config('constants.common_css.additional_services.error_checkbox'),
                'emptyInputClass' => config('constants.common_css.additional_services.empty_checkbox'),
            ],
        ],
        [
            'card_name' => 'Starter 3',
            'card_price' => '70',
            'card_details' => [
                'Up to 900 minutes usage time',
                'Use for personal only',
                'Add up to 10 attendees',
                'Technical support via email',
            ],
            'checkbox' => [
                'type' => 'checkbox',
                'key' => 'warranty-additional-service-starter-3',
                'inputData' => $starter_3 ?? null,
                'labelClass' => 'block',
                'wireModelName' => 'rawData.additional_services.starter_3',
                'validLabelClass' => config('constants.common_css.additional_services.valid_label'),
                'errorLabelClass' => config('constants.common_css.additional_services.error_label'),
                'emptyLabelClass' => config('constants.common_css.additional_services.empty_label'),
                'validInputClass' => config('constants.common_css.additional_services.valid_checkbox'),
                'errorInputClass' => config('constants.common_css.additional_services.error_checkbox'),
                'emptyInputClass' => config('constants.common_css.additional_services.empty_checkbox'),
            ],
        ],
    ],
    'aditionalServiceCard' => [
        [
            'card_name' => 'Starter 1',
            'card_details' => '1',
        ],
        [
            'card_name' => 'Starter 2',
            'card_details' => '2',
        ],
        [
            'card_name' => 'Starter 3',
            'card_details' => '3',
        ],
        [
            'card_name' => 'Starter 4',
            'card_details' => '4',
        ],
        [
            'card_name' => 'Starter 5',
            'card_details' => '5',
        ],
        [
            'card_name' => 'Starter 6',
            'card_details' => '6',
        ],
        [
            'card_name' => 'Starter 7',
            'card_details' => '7',
        ],
        [
            'card_name' => 'Starter 8',
            'card_details' => '8',
        ],
    ],
    'carDetails' => [
        'Private forum access',
        'Member resources',
        'Entry to annual conference',
        'Official member t-shirt',
    ],
])

{{-- Section 3 --}}
<section class="mt-4">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-white flex justify-center">
        <div class="py-5">
            <div class="container relative">

                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 pt-8">
                        {{ __('translations.additional_services_warranty') }}</h1>
                </div>

                <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-7 mt-14">

                    @foreach ($warrantyCard ?? [] as $value)
                        <div data-aos="fade-up" data-aos-duration="500">
                            <div
                                class="transition-all duration-300 pointer-events-auto hover:shadow-[0_0_1.5rem_0_rgba(0,0,0,.12)] hover:-translate-y-1">
                                <div class="border border-gray-300 bg-white rounded w-full h-full text-center p-5">
                                    <span class="text-lg text-primary">{{ $value['card_name'] }}</span>
                                    <h1 class="text-3xl/tight font-semibold mt-3"><sup
                                            class="text-gray-500 text-sm font-normal">$</sup> {{ $value['card_price'] }}
                                        <sub class="text-gray-500 text-sm font-normal">/month</sub>
                                    </h1>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div>
                                        <div class="flex flex-col gap-4">
                                            @foreach ($value['card_details'] ?? [] as $card_detail)
                                                <p class="flex items-center text-gray-600 gap-4"><i
                                                        class="fa-solid fa-check text-green-500 text-lg"></i>
                                                    {{ $card_detail }}</p>
                                            @endforeach
                                        </div>
                                        <div>
                                            @include('common.genericInputFields', $value['checkbox'])
                                        </div>
                                        <div class="flex mt-[20px]">
                                            <!-- Go to Section 3 Btn -->
                                            @include('common.generic-btn', [
                                                'btn_content' => 'Alege',
                                                'wire_method' => 'changeSection("3")',
                                                'class' =>
                                                    'w-full p-2 rounded-md ' .
                                                    getConstant('modal_generic_colors')['purple'],
                                            ])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 pt-14">
                        {{ __('translations.additional_services_section') }}</h1>
                </div>

                <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-7 mt-14">

                    @foreach ($aditionalServiceCard ?? [] as $value)
                        <div data-aos="fade-up" data-aos-duration="500">
                            <div
                                class="transition-all duration-300 pointer-events-auto hover:shadow-[0_0_1.5rem_0_rgba(0,0,0,.12)] hover:-translate-y-1">
                                <div class="border border-gray-300 bg-white rounded w-full h-full text-center p-5">
                                    <span class="text-lg text-primary">{{ $value['card_name'] }}</span>
                                    <h1 class="text-3xl/tight font-semibold mt-3">
                                        {{ $value['card_details'] }}
                                    </h1>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 pt-14">
                        {{ __('translations.additional_services_car_detail') }}</h1>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:max-w-none lg:mx-0 max-w-2xl mx-auto sm:mt-14">
                    <div class="p-8 sm:p-10 lg:flex-auto col-span-2">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">
                            {{ __('translations.additional_services_car_name') }}</h3>
                        <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum dolor sit amet consect
                            etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur
                            quidem assumenda.</p>
                        <div class="mt-10 flex items-center gap-x-4">
                            <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">
                                {{ __('translations.additional_services_included') }}</h4>
                            <div class="h-px flex-auto bg-gray-100"></div>
                        </div>
                        <ul role="list"
                            class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                            @foreach ($carDetails ?? [] as $value)
                                <li class="flex gap-x-3">
                                    @include('svg.check-list')
                                    {{ $value }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="p-2 col-span-2 sm:col-span-1 flex">
                        <img class="w-full rounded-lg object-cover object-center flex-shrink-0"
                            src="https://images.unsplash.com/photo-1580477371194-4593e3c7c6cf?q=80&amp;w=2070&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="product">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
