<!DOCTYPE html>
<html lang="{{ webSiteLang() }}">

<head>
    @include('common.metadata')
    <title>@yield('page_title', env('APP_NAME'))</title>
    @include('common.fonts')
    @stack('css')
    @include('common.css')
    @include('common.headScripts')
    @livewireStyles
</head>

<body class="overflow-x-hidden bg-[#070415]">

    @if (isAllowedRoute(getConstant('guestAllowedRoute')))
        @include('common.guestContentWrapper')
    @else
        @component('common.contentWrapper')
            @yield('content')
            @include('common.scrollToTop')
        @endcomponent

        @include('app_footer.footer')

        @include('common.bodyScripts')

        @livewireScripts
        @stack('js')
    @endif

</body>

</html>
