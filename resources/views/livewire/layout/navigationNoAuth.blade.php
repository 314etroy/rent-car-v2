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
        [
            'route_name' => 'contact',
            'route_translation' => __('translations.contact'),
        ],
    ],
])

<header class="bg-[#1d1a29] bx-dark bx-static">
    <nav x-data="{ open: false }" class="bg-[#1d1a29] dark:bg-gray-800 fixed top-0 left-0 w-full z-50">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}" wire:navigate>
                            <img src="{{ asset('assets/img/png/white-logo.png') }}" alt="starent-logo" width="100px"
                                height="60px">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    @foreach ($guest_links ?? [] as $value)
                        <div class="hidden space-x-8 md:-my-px md:ms-3 md:flex">
                            <x-nav-link :href="route($value['route_name'])" :active="request()->routeIs($value['route_name'])" wire:navigate>
                                {{ $value['route_translation'] }}
                            </x-nav-link>
                        </div>
                    @endforeach

                    @auth
                        <div class="hidden space-x-8 md:-my-px md:ms-10 md:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                {{ __('Dashboard') }}
                            </x-nav-link>
                        </div>
                    @endauth
                </div>

                <!-- Settings Dropdown -->

                <div class="hidden md:flex">

                    <x-nav-link :href="route('login')" wire:navigate>
                        {{ __('translations.check_booking') }}
                    </x-nav-link>

                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center md:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        @include('svg.hamburger')
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden md:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                    {{ __('Home') }}
                </x-responsive-nav-link>
                @foreach ($guest_links ?? [] as $value)
                    <x-responsive-nav-link :href="route($value['route_name'])" wire:navigate>
                        {{ $value['route_translation'] }}
                    </x-responsive-nav-link>
                @endforeach
            </div>
        </div>
    </nav>
</header>
