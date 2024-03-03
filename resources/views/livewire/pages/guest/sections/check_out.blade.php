@php
    [
        'check_out' => [
            'name' => $name,
            'email' => $email,
            'city' => $city,
            'phone' => $phone,
            'flight_number' => $flight_number,
            'reservation_info' => $reservation_info,
            'password' => $password,
            'confirm_password' => $confirm_password,
            'terms' => $terms,
            'policy' => $policy,
        ],
    ] = $rawData;
@endphp

@props([
    'left_table' => [
        [
            'description' => 'Rent for 7 Day/s at',
            'price' => '906',
        ],
        [
            'description' => 'Rent for 3 Day/s at',
            'price' => '127',
        ],
        [
            'description' => 'Rent for 1 Day/s at',
            'price' => '70',
        ],
    ],

    'left_aditional_services' => [
        [
            'description' => 'Nitro',
            'price' => '80',
        ],
        [
            'description' => 'Nitro',
            'price' => '70',
        ],
        [
            'description' => 'Nitro',
            'price' => '65',
        ],
    ],

    'right_inputs' => [
        [
            'type' => 'text',
            'key' => 'Nume Client',
            'inputData' => $name ?? null,
            'placeholder' => 'Nume client',
            'wireModelName' => 'rawData.check_out.name',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'email',
            'key' => 'E-mail',
            'inputData' => $email ?? null,
            'placeholder' => 'exemplu@exemplu.com',
            'wireModelName' => 'rawData.check_out.email',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'text',
            'key' => 'Oras Resedinta',
            'inputData' => $city ?? null,
            'placeholder' => 'Oras Resedinta',
            'wireModelName' => 'rawData.check_out.city',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'tel',
            'key' => 'Telefon',
            'inputData' => $phone ?? null,
            'placeholder' => 'Telefon',
            'wireModelName' => 'rawData.check_out.phone',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        // [
        //     'type' => 'text',
        //     'key' => 'flight-number',
        //     'inputData' => $flight_number ?? null,
        //     'placeholder' => 'Add flight number',
        //     'wireModelName' => 'rawData.check_out.flight_number',
        //     'validLabelClass' => config('constants.common_css.check_out.valid_label'),
        //     'errorLabelClass' => config('constants.common_css.check_out.error_label'),
        //     'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
        //     'validInputClass' => config('constants.common_css.check_out.valid_input'),
        //     'errorInputClass' => config('constants.common_css.check_out.error_input'),
        //     'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        // ],
        [
            'type' => 'text',
            'key' => 'Observatii',
            'inputData' => $reservation_info ?? null,
            'placeholder' => 'Observatii',
            'wireModelName' => 'rawData.check_out.reservation_info',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'password',
            'key' => 'Parola',
            'inputData' => $password ?? null,
            'placeholder' => 'Parola',
            'wireModelName' => 'rawData.check_out.password',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'password',
            'key' => 'Confirma parola',
            'inputData' => $confirm_password ?? null,
            'placeholder' => 'Confirma parola',
            'wireModelName' => 'rawData.check_out.confirm_password',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_input'),
            'errorInputClass' => config('constants.common_css.check_out.error_input'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_input'),
        ],
        [
            'type' => 'checkbox',
            'key' => 'Termenii si conditiile inchirierii',
            'inputData' => $terms ?? null,
            'labelClass' => 'block',
            'wireModelName' => 'rawData.check_out.terms',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_checkbox'),
            'errorInputClass' => config('constants.common_css.check_out.error_checkbox'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_checkbox'),
        ],
        [
            'type' => 'checkbox',
            'key' => 'Politica de procesare a datelor personale',
            'inputData' => $policy ?? null,
            'labelClass' => 'block',
            'wireModelName' => 'rawData.check_out.policy',
            'validLabelClass' => config('constants.common_css.check_out.valid_label'),
            'errorLabelClass' => config('constants.common_css.check_out.error_label'),
            'emptyLabelClass' => config('constants.common_css.check_out.empty_label'),
            'validInputClass' => config('constants.common_css.check_out.valid_checkbox'),
            'errorInputClass' => config('constants.common_css.check_out.error_checkbox'),
            'emptyInputClass' => config('constants.common_css.check_out.empty_checkbox'),
        ],
    ],
])

{{-- Section 4 --}}
<section class="mt-4">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 bg-white pb-6 flex justify-center">
        <div class="container relative">

            <div class="text-center py-11">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">
                    {{ __('translations.additional_services_complete_order') }}</h1>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2">
                <div class="col-span-1 px-[3rem]">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-center w-1/2">{{ __('translations.additional_services_description') }}
                                </th>
                                <th class="text-center w-1/2">{{ __('translations.additional_services_price') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($left_table ?? [] as $value)
                                <tr>
                                    <td class="py-2 text-center">{{ $value['description'] }}</td>
                                    <td class="py-2 text-center">${{ $value['price'] }}</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td class="py-2 font-bold text-center" colspan="1">
                                    {{ __('translations.additional_services_section') }}
                                </td>
                            </tr>
                            @foreach ($left_aditional_services ?? [] as $value)
                                <tr>
                                    <td class="p-3 text-center">{{ $value['description'] }}</td>
                                    <td class="py-2 text-center">${{ $value['price'] }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="py-2 font-bold text-center">
                                    {{ __('translations.additional_services_t_price') }}:</td>
                                <td class="py-2 font-bold text-center">$XXXX</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-span-1 px-[3rem] mt-[2rem] sm:mt-[0]">

                    <!-- Input fields -->
                    @foreach ($right_inputs ?? [] as $value)
                        @include('common.genericInputFields', $value)
                    @endforeach

                    <!-- Go to Section 4 Btn -->
                    @include('common.generic-btn', [
                        'is_disabled' => false,
                        'btn_content' => 'Continuati cu plata',
                        'wire_method' => 'changeSection("4")',
                        'class' => 'w-full p-2 mt-4 rounded-md ' . getConstant('modal_generic_colors')['purple'],
                    ])

                </div>
                <pre>
                    @php
                        print_r($rawData);
                    @endphp
                </pre>
            </div>
        </div>
    </div>

</section>
