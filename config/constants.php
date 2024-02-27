<?php
// Project constants
return [
    'guestAllowedRoute' => [
        'login',
        'register',
        'password.reset',
        'password.request',
        'password.confirm',
        'verification.notice',
        'verification.verify',
    ],
    'common_css' => [
        'rent_date' => [
            'label_Class' => 'block font-bold mb-2',

            'empty_label' => 'flex',
            'valid_label' => 'flex ml-1 font-medium text-blue-500 ',
            'error_label' => 'flex ml-1 font-medium text-red-500 ',

            'empty_input' => 'w-full p-2 border rounded-md',
            'valid_input' => 'w-full p-2 border rounded-md border-blue-500',
            'error_input' => 'w-full p-2 border rounded-md border-red-500 focus:border-red-500 focus:ring-red-500',

            'empty_checkbox' => 'ml-2',
            'valid_checkbox' => 'ml-2 border border-blue-500',
            'error_checkbox' => 'ml-2 border border-red-500 focus:border-red-500 focus:ring-red-500',

            'empty_checkbox1' => 'flex mt-2',
            'valid_checkbox1' => 'flex mt-2 border border-blue-500',
            'error_checkbox1' => 'flex mt-2 border border-red-500 focus:border-red-500 focus:ring-red-500',
        ],
        'choose_car' => [
            'empty_input' => 'w-full',
            'valid_input' => 'w-full',
            'error_input' => 'w-full',
        ],
        'additional_services' => [
            'empty_label' => 'flex',
            'valid_label' => 'flex ml-1 font-medium text-blue-500 ',
            'error_label' => 'flex ml-1 font-medium text-red-500 ',

            'empty_checkbox' => '',
            'valid_checkbox' => 'border border-blue-500',
            'error_checkbox' => 'border border-red-500 focus:border-red-500 focus:ring-red-500',
        ],
        'check_out' => [
            'empty_label' => 'flex',
            'valid_label' => 'flex ml-1 font-medium text-blue-500 ',
            'error_label' => 'flex ml-1 font-medium text-red-500 ',

            'empty_input' => 'w-full mb-2 p-2',
            'valid_input' => 'w-full mb-2 p-2 border border-blue-500',
            'error_input' => 'w-full mb-2 p-2 border border-red-500 focus:border-red-500 focus:ring-red-500',

            'empty_checkbox' => '',
            'valid_checkbox' => 'border border-blue-500',
            'error_checkbox' => 'border border-red-500 focus:border-red-500 focus:ring-red-500',
        ],
        'contact' => [
            'empty_label' => 'flex',
            'valid_label' => 'flex ml-1 font-medium text-blue-500 ',
            'error_label' => 'flex ml-1 font-medium text-red-500 ',

            'empty_input' => 'w-full text-gray-700 border border-slate-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',
            'valid_input' => 'w-full text-gray-700 border border-blue-500 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',
            'error_input' => 'w-full text-gray-700 border border-red-500 focus:border-red-500 focus:ring-red-500 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',

            'empty_textarea' => 'w-full text-gray-700 border border-slate-200 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',
            'valid_textarea' => 'w-full text-gray-700 border border-blue-500 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',
            'error_textarea' => 'w-full text-gray-700 border border-red-500 focus:border-red-500 focus:ring-red-500 rounded py-3 px-4 mb-4 leading-tight focus:outline-none',

        ],
        'home_page_contact' => [
            'empty_input' => 'appearance-none bg-[#161321] w-full py-6 px-3 text-[#777] leading-tight focus:outline-none focus:bg-[#120f1c] rounded-t-lg',
            'valid_input' => 'appearance-none bg-[#161321] w-full py-6 px-3 text-[#777] leading-tight focus:outline-none focus:bg-[#120f1c] rounded-t-lg',
            'error_input' => 'appearance-none bg-[#161321] w-full py-6 px-3 text-[#777] leading-tight focus:outline-none focus:bg-[#120f1c] rounded-t-lg',
        ],
    ],
    'modal_generic_colors' => [
        'green' => 'text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800',
        'blue' => 'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
        'red' => 'text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800',
    ],
];
