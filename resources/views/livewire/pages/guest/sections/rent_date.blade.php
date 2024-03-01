@php
    [
        'rent_date' => [
            'return_to_another_location' => $return_to_another_location,
            'location' => $location,
            'return_location' => $return_location,
            'pickup_date' => $pickup_date,
            'return_date' => $return_date,
            'pickup_time' => $pickup_time,
            'return_time' => $return_time,
        ],
    ] = $rawData;
@endphp

@props([
    'firstColumn' => [
        [
            'type' => 'select',
            'key' => 'alege-locatia',
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'selectDefaultText' => 'Selecteaza orasul',
            'allOptions' => [
                'campulung' => 'Câmpulung',
                'bucuresti' => 'Bucuresti',
            ],
            'wireModelName' => 'rawData.rent_date.location',
            'inputData' => $location ?? null,
        ],
        [
            'type' => 'date',
            'key' => 'alege-data',
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'wireModelName' => 'rawData.rent_date.pickup_date',
            'inputData' => $pickup_date ?? null,
        ],
        [
            'type' => 'time',
            'key' => 'ora-preluarii',
            'step' => '1800',
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'wireModelName' => 'rawData.rent_date.pickup_time',
            'inputData' => $pickup_time ?? null,
        ],
    ],
    'secondColumn' => [
        [
            'type' => $return_to_another_location ?? null ? 'hidden' : 'checkbox',
            'hideLabel' => $return_to_another_location ?? null,
            'key' => 'predarea-in-alta-locatie',
            'labelClass' => 'block',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_checkbox'),
            'errorInputClass' => config('constants.common_css.check_out.error_checkbox'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_checkbox'),
            'wireModelName' => 'rawData.rent_date.return_to_another_location',
            'inputData' => $return_to_another_location ?? null,
        ],
        [
            'type' => $return_to_another_location ?? null ? 'select' : 'hidden',
            'hideLabel' => $return_to_another_location ?? null ? false : true,
            'key' => 'locatie-predare',
            'showValidationMsg' => false,
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'selectDefaultText' => 'Selecteaza orasul',
            'allOptions' => [
                'campulung' => 'Câmpulung',
                'bucuresti' => 'Bucuresti',
            ],
            'wireModelName' => 'rawData.rent_date.return_location',
            'inputData' => $return_location ?? null,
        ],
        [
            'type' => 'date',
            'key' => 'data-predare',
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'wireModelName' => 'rawData.rent_date.return_date',
            'inputData' => $return_date ?? null,
        ],
        [
            'type' => 'time',
            'key' => 'ora-predarii',
            'step' => '1800',
            'labelClass' => config('constants.common_css.rent_date.label_Class'),
            'validLabelClass' => config('constants.common_css.rent_date.valid_label'),
            'errorLabelClass' => config('constants.common_css.rent_date.error_label'),
            'emptyLabelClass' => config('constants.common_css.rent_date.empty_label'),
            'validInputClass' => config('constants.common_css.rent_date.valid_input'),
            'errorInputClass' => config('constants.common_css.rent_date.error_input'),
            'emptyInputClass' => config('constants.common_css.rent_date.empty_input'),
            'wireModelName' => 'rawData.rent_date.return_time',
            'inputData' => $return_time ?? null,
        ],
    ],
])

{{-- Section 1 --}}
<section class="mt-4 bg-white">

    <div class="mx-auto max-w-7xl px-4 bg-white flex justify-center">
        <div class="py-9">
            <div class="container relative w-[500px]">

                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 pt-6">Închiriază o mașină ușor și rapid
                    </h1>
                </div>

                <div class="bg-white p-8 rounded-md">

                    <div class="gap-4 grid grid-cols-2">
                        <!-- First Column -->
                        <div>
                            @foreach ($firstColumn ?? [] as $value)
                                <div class="mb-4">
                                    @include('common.genericInputFields', $value)
                                </div>
                            @endforeach
                        </div>

                        <!-- Second Column -->
                        <div class="{{ $return_to_another_location ?? null ? '' : 'mt-[26px]' }}">
                            @foreach ($secondColumn ?? [] as $index => $value)
                                <div class="{{ $value['type'] === 'hidden' ? '' : 'mb-4' }}">
                                    @include('common.genericInputFields', $value)
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Go to Section 1 Btn -->
                    @include('common.generic-btn', [
                        'btn_content' => 'Inchiriază masina',
                        'wire_method' => 'changeSection("1")',
                        'class' => 'w-full p-2 rounded-md ' . getConstant('modal_generic_colors')['purple'],
                    ])

                    {{-- <pre>
                        @php
                            print_r($rawData);
                        @endphp
                    </pre> --}}
                </div>
            </div>
        </div>
    </div>

</section>
