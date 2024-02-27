@props([
    'guest_links' => [
        [
            'route_name' => 'reserve_now',
            'route_translation' => __('translations.home'),
        ],
        [
            'route_name' => 'about_us',
            'route_translation' => __('translations.about_us'),
        ],
        [
            'route_name' => 'faqs',
            'route_translation' => __('translations.faqs'),
        ],
        // [
        //     'route_name' => 'home',
        //     'route_translation' => __('translations.home'),
        // ],
        // [
        //     'route_name' => 'terms_and_conditions',
        //     'route_translation' => __('translations.terms_and_conditions'),
        // ],
        // [
        //     'route_name' => 'privacy_notice',
        //     'route_translation' => __('translations.privacy_notice'),
        // ],
        // [
        //     'route_name' => 'rental_conditions',
        //     'route_translation' => __('translations.rental_conditions'),
        // ],
        // [
        //     'route_name' => 'gdpr',
        //     'route_translation' => __('translations.gdpr'),
        // ],
        // [
        //     'route_name' => 'anpc',
        //     'route_translation' => __('translations.anpc'),
        // ],
        // [
        //     'route_name' => 'return_policy',
        //     'route_translation' => __('translations.return_policy'),
        // ],
        // [
        //     'route_name' => 'cancellation_policy',
        //     'route_translation' => __('translations.cancellation_policy'),
        // ],
        [
            'route_name' => 'contact',
            'route_translation' => __('translations.contact'),
        ],
    ],
])

<nav x-data="{ open: false }"
    class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 fixed w-full top-0 inset-x-0 mb-4 z-40">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" wire:navigate>
                        {{-- @include('svg.application-logo', [
                            'class' => 'block h-9 w-auto fill-current text-gray-800 dark:text-gray-200',
                        ]) --}}
                        <img src="{{ asset('assets/img/png/black-logo.png') }}" alt="starent-logo" width="110px" height="20px">
                    </a>
                </div>

                <!-- Navigation Links -->
                @foreach ($guest_links ?? [] as $value)
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route($value['route_name'])" :active="request()->routeIs($value['route_name'])" wire:navigate>
                            {{ $value['route_translation'] }}
                        </x-nav-link>
                    </div>
                @endforeach

                @auth
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                @endauth
            </div>

            <!-- Settings Dropdown -->

            <div class="hidden sm:flex">
                <x-nav-link :href="route('login')" wire:navigate>
                    {{ __('Log in') }}
                </x-nav-link>

                <x-nav-link :href="route('register')" wire:navigate>
                    {{ __('Register') }}
                </x-nav-link>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    @include('svg.hamburger')
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Home') }}
            </x-responsive-nav-link>
            @foreach ($guest_links ?? [] as $value)
                <x-responsive-nav-link :href="route($value['route_name'])" wire:navigate>
                    {{ $value['route_translation'] }}
                </x-responsive-nav-link>

                {{-- <x-responsive-nav-link :href="route('register')" wire:navigate>
                {{ __('Register') }}
            </x-responsive-nav-link> --}}
            @endforeach
        </div>
    </div>
</nav>
