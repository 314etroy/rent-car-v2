@props([
    'tableData' => [
        [
            'title' => 'A0',
            'description' => 'aaa0',
            'price' => 0,
        ],
        [
            'title' => 'A1',
            'description' => 'aaa1',
            'price' => 1,
        ],
        [
            'title' => 'A2',
            'description' => 'aaa2',
            'price' => 2,
        ],
        [
            'title' => 'A3',
            'description' => 'aaa3',
            'price' => 3,
        ],
    ],
    'modalCreateId' => 'createUserModal',
    'modalEditId' => 'editUserModal',
    'modalDeleteId' => 'deleteUserModal',
    'inputs' => [
        [
            'type' => 'text',
            'key' => 'title',
            // 'inputData' => $name ?? null,
            'placeholder' => 'Adauga titlu',
            'wireModelName' => 'rawData.service.title',
            'validInputClass' => config('constants.common_css.contact.valid_input'),
            'errorInputClass' => config('constants.common_css.contact.error_input'),
            'emptyInputClass' => config('constants.common_css.contact.empty_input'),
        ],
        [
            'type' => 'textarea',
            'key' => 'description',
            // 'inputData' => $city ?? null,
            'placeholder' => 'Adauga o descriere',
            'wireModelName' => 'rawData.service.description',
            'rows' => 5,
            'validInputClass' => config('constants.common_css.contact.valid_textarea'),
            'errorInputClass' => config('constants.common_css.contact.error_textarea'),
            'emptyInputClass' => config('constants.common_css.contact.empty_textarea'),
        ],
        [
            'type' => 'text',
            'key' => 'price',
            // 'inputData' => $city ?? null,
            'placeholder' => 'Adauga pret',
            'wireModelName' => 'rawData.service.price',
            'validInputClass' => config('constants.common_css.contact.valid_input'),
            'errorInputClass' => config('constants.common_css.contact.error_input'),
            'emptyInputClass' => config('constants.common_css.contact.empty_input'),
        ],
    ],
])

<section>
    <div class="relative overflow-x-auto">
        <div
            class="flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
            <div>
                @include('common.genericInputFields', [
                    'type' => 'search',
                    'placeholder' => 'Cauta Serviciu',
                    'key' => 'search',
                    'wireModelName' => 'rawData.choose_car.search',
                    'emptyInputClass' => config('constants.common_css.choose_car.empty_input'),
                    'hideLabel' => true,
                    'inputData' => $search ?? null,
                    'showValidationMsg' => false,
                    'style' => 'margin-left: 2px;',
                ])
            </div>
            <div>
                @include('common.generic-btn', [
                    'btn_content' => 'Adauga serviciu',
                    'wire_method' => 'changeSection("1")',
                    'data_modal_target' => $modalCreateId,
                    'data_modal_show' => $modalCreateId,
                    'class' =>
                        'w-full p-2 bg-green-500 hover:bg-green-700 text-white border border-gray-300 rounded-md',
                ])
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach (tableHead($additionalServices, ['Id'], ['Action']) ?? [] as $value)
                        <th scope="col" class="px-6 py-3 {{ $value === 'Action' ? 'text-center' : null }}">
                            {{ $value }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($additionalServices ?? [] as $index => $rowData)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <td class="px-6 py-4">
                            {{ $index + 1 }}
                        </td>

                        @foreach ($rowData ?? [] as $key => $value)
                            <td class="px-6 py-4">
                                {{ $value }}
                            </td>
                        @endforeach

                        <td class="px-6 py-4 flex justify-center">
                            <!-- Modal toggle -->
                            @include('common.generic-btn', [
                                'btn_content' => 'Editeaza',
                                'data_modal_target' => $modalEditId,
                                'data_modal_show' => $modalEditId,
                                // 'onclick' => 'getId(' . $index . ',' . json_encode($rowData) . ', "additionalServices")',
                                'wire_click' => '$dispatchTo(`foo`, `show`, { postId: 1 })',
                                'class' => 'font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2',
                            ])
                            
                            <button wire:click="$dispatch('show', '123')">Apasa</button>
                            
                            @include('common.generic-btn', [
                                'btn_content' => 'Sterge',
                                'data_modal_target' => $modalDeleteId,
                                'data_modal_show' => $modalDeleteId,
                                'class' => 'font-medium text-red-600 dark:text-red-500 hover:underline ml-2',
                            ])
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{-- Create modal --}}
        @include('common.generic-modal', [
            'type' => 'create',
            'modal_id' => $modalCreateId,
            'header_name' => 'Adauga serviciu',
            'btn_content' => 'Adauga',
            'btn_collor' => 'green',
            'canBeClosed' => true,
            'modal_fields' => $inputs,
        ])

        {{-- Edit modal --}}
        @include('common.generic-modal', [
            'type' => 'edit',
            'modal_id' => $modalEditId,
            'header_name' => 'Editeaza serviciu',
            'btn_content' => 'Editeaza',
            'btn_collor' => 'blue',
            'canBeClosed' => true,
            'modal_fields' => modifArray($inputs, ['key' => '-edit-additionalServices']),
        ])

        {{-- Delete modal --}}
        @include('common.generic-modal', [
            'type' => 'delete',
            'modal_id' => $modalDeleteId,
            'header_name' => 'Sterge serviciu',
            'btn_content' => 'Sterge',
            'btn_collor' => 'red',
            'canBeClosed' => true,
            'delete_msg' => 'Sunteti siguri ca vreti sa stergeti acest serviciu?',
        ])

    </div>
</section>
