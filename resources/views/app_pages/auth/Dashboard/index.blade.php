@extends('layouts.app')

@section('page_title')
    {{ 'Dashboard' }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="mt-20 mb-2 bg-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if (isAdmin())
                    {{-- @dd($additionalEquipment) --}}
                    {{-- {{ __("You're logged in as Admin!") }} --}}
                    {{-- @include('app_pages.auth.Dashboard.Content.service-table') --}}
                    @livewire('pages.auth.admin-dashboard')
                @else
                    {{ __("You're logged in as Guest!") }}
                    <h1 class="text-3xl font-bold underline">
                        Hello world!
                    </h1>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
    <script>
        // window.location.reload();


        document.addEventListener('DOMContentLoaded', function() {
            // Verificăm dacă query parameter-ul "reloaded" nu există deja în URL
            if (!window.location.href.includes('reloaded')) {
                // Adăugăm query parameter-ul "reloaded" la URL-ul curent
                var newUrl = window.location.href + (window.location.href.includes('?') ? '&' : '?') + 'reloaded';

                // Reîncărcăm pagina după o anumită perioadă de timp (de exemplu, 3 secunde)
                setTimeout(function() {
                    window.location.href = newUrl;
                }, 3000); // timpul în milisecunde (în acest caz, 3000 ms = 3 secunde)
            }
        });


        const getId = (id, rowData, tableName) => {
            console.log('id: ', id);
            console.log('rowData: ', rowData);
            console.log('tableName: ', tableName);

            Object.keys(rowData).forEach(function(key) {
                // Extrage valoarea corespunzătoare cheii
                const value = rowData[key];

                const labelId = key + '-edit-' + tableName + '-label';

                const labelElement = document.getElementById(labelId);
                console.log('labelId: ', labelId);
                console.log('labelElement: ', labelElement);
                // if (labelElement) {
                //     labelElement.value = value;
                //     labelElement.setAttribute("wire:model.live", "rawData.service." + id + "." +
                //         key);
                // } else {
                //     console.error("Elementul cu id-ul", labelId, "nu a fost găsit.");
                // }
            });
        }
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script> --}}
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
@endpush
