<!--Header-->
@auth
    {{-- <livewire:layout.navigation /> --}}
    {{-- @livewire('layout.navigation') --}}
    @include('layouts.navigation')
@else
    {{-- <livewire:layout.navigationNoAuth /> --}}
    {{-- aici --}}
    {{-- @livewire('layout.navigationNoAuth') --}}
@endauth
<!--End Header-->
