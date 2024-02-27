@extends('layouts.app')

@section('page_title')
    {{ __('translations.home') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="bg-white my-4">
        <div class="p-8 grid xl:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-5 text-center items-center">
            <div class="col-span-3 text-center">
                <h1 class="text-3xl font-semibold">Inchirieri auto in
                    Romania si in Strainatate
                </h1>
            </div>
            

            <div class="col-span-2 w-full">
                @livewire('pages.guest.common.reserve-now-form')
            </div>
        </div>
    </section>

    <section class="bg-white my-4">
        <div class="flex justify-center py-32 relative bg-orange-700/10">
            <div class="absolute top-0 inset-x-0 hidden sm:block">
                @include('svg.white-wave', ['class' => 'w-full -scale-x-100'])
            </div>
            <div class="text-center">

                <h1 class="text-3xl font-semibold">SERVICII PREMIUM LA PRETURI ACCESIBILE.</h1>
                <p class="text-slate-600">Inchiriere masini premium la cele mai bune tarife. In toata lumea.</p>

            </div>
            <div class="absolute bottom-0 inset-x-0 hidden sm:block">
                @include('svg.white-wave', ['class' => 'w-full scale-x-100 -scale-y-100'])
            </div>
        </div>
    </section>

    <section class="bg-white my-4">
        <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 text-center">
            <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                <h1 class="font-semibold my-5">Acoperire globala</h1>
                <p class="text-slate-400">Peste 2000 de statii in peste 105 tari</p>
            </div>

            <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                <h1 class="font-semibold my-5">Flota distinctive</h1>
                <p class="text-slate-400">De la cabriolete de inalta calitate la SUV-uri premium</p>
            </div>

            <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                <h1 class=" font-semibold my-5">Serviciu exceptional</h1>
                <p class="text-slate-400">Fara stres, de incredere, fara costuri ascunse</p>
            </div>
        </div>
    </section>

    <section class="bg-white my-4">
        <div class="container p-6">

            <div class="mt-2">
                <h4 class="font-semibold text-gray-700 text-xl">Inchiriez masina simplu si usor</h4>
                <div class="mt-2 ml-2">
                    <p>Rezerva online un autoturism pentru calatoria ta, in 4 pasi simpli:</p>
                    <ol>
                        <li>1. Alege locatia de preluare si predare non-stop si intervalul inchirierii</li>
                        <li>2. Alege masina dorita</li>
                        <li>3. Selectati extra-optiunile necesare</li>
                        <li>4. Finalizati inchirierea masinii dorite</li>
                    </ol>
                </div>
            </div>

            <div class="mt-2">
                <h4 class="font-semibold text-gray-700 text-xl">Rent a Car personalizat nevoilor tale</h4>
                <div class="mt-2 ml-2">
                    <p>Cu serviciile car rentals de la Starent gasesti masina de inchiriat potrivita pentru nevoile tale
                        de
                        mobilitate. Ai kilometri nelimitati pentru deplasari nationale si posibilitatea de a prelua si
                        preda
                        autoturismul in locatii diferite.</p>
                    <p>Poti beneficia de protectie suplimentara in caz de dauna cu acoperire SCDW sau SCDW + (Super
                        collision Damage Waiver), o acoperire optionala care limiteaza raspunderea financiara in cazul
                        unui
                        accident. Pretul acestui tip de acoperire difera in functie de autoturism si perioada de
                        inchiriere.
                    </p>
                    <p>Flota noastra contine o gama variata de autoturisme, incepand de la clasa mica, pana la SUV-uri,
                        masini premium si autoutilitare. Poti inchiria la preturi avantajoase masini precum: Dacia
                        Logan,
                        Renault Clio, Opel Astra sau Skoda Octavia.</p>
                </div>
            </div>

            <div class="mt-2">
                <h4 class="font-semibold text-gray-700 text-xl">Inchiriere auto fara costuri ascunse</h4>
                <div class="mt-2 ml-2">
                    <p>Calculeaza online pretul inchirierii sau aboneaza-te la newsletter si primesti periodic cele mai
                        bune
                        oferte Autonom rent a car.</p>
                    <p>Atentie! Nu putem garanta rezervarea exact aa unui model de autoturism dintr-o clasa deoarece
                        evenimente neprevazute pot aparea pana la data preluarii acestuia.</p>
                    <p>Pentru serviciile de inchiriere auto, apeleaza la Starent, partenerul tau de mobilitate oriunde
                        in
                        tara. Rezervari non-stop, online sau la numarul de telefon afisat.</p>
                    <p>Reteaua de mobilitate Starent include serviciile: car rentals, inchiriere auto pe termen mediu,
                        leasing operational, transferul cu sofer, asistenta rutiera, masina de inlocuire in caz de
                        accident
                        si multe altele.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-white my-4">
        <div class="container p-5">
            <div class="text-center">
                <h1 class="text-3xl font-medium">Oferte speciale</h1>
                <p class="font-medium text-slate-500 mt-5 mb-4">Ce tip de masina doresti?</p>
            </div>

            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
                <div
                    class="relative pb-4 flex flex-col items-center border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="relative flex w-full justify-center bg-cover">
                        <img src='{{ asset('assets/img/png/toyota-rav4-hybrid.PNG') }}'
                            class="flex h-[250px] w-full justify-center bg-cover">
                        <div
                            class="absolute -bottom-4 bg-white p-1 flex items-center justify-center border-[2px] border-black dark:!border-navy-700">
                            <span class="font-semibold text-orange-300">50,00$</span> / Ziua
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            Toyota rav 4 hybrid 2023
                        </h4>
                    </div>
                </div>

                <div
                    class="relative pb-4 flex flex-col items-center border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="relative flex w-full justify-center bg-cover">
                        <img src='{{ asset('assets/img/png/toyota-corolla-hybrid.PNG') }}'
                            class="flex h-[250px] w-full justify-center bg-cover">
                        <div
                            class="absolute -bottom-4 bg-white p-1 flex items-center justify-center border-[2px] border-black dark:!border-navy-700">
                            <span class="font-semibold text-orange-300">50,00$</span> / Ziua
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            Toyota Coorolla Hybrid 2023
                        </h4>
                    </div>
                </div>

                <div
                    class="relative pb-4 flex flex-col items-center border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
                    <div class="relative flex w-full justify-center bg-cover">
                        <img src='{{ asset('assets/img/png/renault-megane-sedan.PNG') }}'
                            class="flex h-[250px] w-full justify-center bg-cover">
                        <div
                            class="absolute -bottom-4 bg-white p-1 flex items-center justify-center border-[2px] border-black dark:!border-navy-700">
                            <span class="font-semibold text-orange-300">50,00$</span> / Ziua
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col items-center">
                        <h4 class="text-xl font-bold text-navy-700 dark:text-white">
                            Renault Megane Sedan 2023
                        </h4>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white my-4">
        <div class="p-5 py-20 grid xl:grid-cols-5 md:grid-cols-2 grid-cols-1 gap-5 text-center items-center">
            <div class="col-span-3 text-center p-5">
                <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold">Suntem alaturi de tine</h1>
                <p>Cand inchiriati o masina, exista multi factori care contribuie atunci cans va decideti, de exemplu:
                    ce
                    dimensiuni ar trebuii sa aiba masina inchiriata?</p>
            </div>

            <div class="col-span-2 text-center p-5">
                <h1>CONTACTEAZA-NE ACUM</h1>
                <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold">+40 726 142 220</h1>
                @include('common.generic-btn', [
                    'btn_content' => 'OFERTE PERSONALIZATE',
                    'wire_method' => 'changeSection("1")',
                    'class' => 'w-full p-2 bg-blue-500 hover:bg-blue-700 text-white border border-gray-300 rounded-md',
                ])
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container p-5">
            <div class="text-center">
                <h1 class="text-3xl font-medium">Experiente Desavarsite</h1>
                <p class="font-medium text-slate-500 mt-5 mb-4">Testimonialele clientilor nostrii</p>
            </div>

            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-5 text-center">
                <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Tania Andrew</h5>

                            <div class="flex">
                                @foreach (range(1, 5) as $value)
                                    @include('svg.star')
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div>
                        <p class="block font-sans text-left font-light leading-relaxed text-inherit antialiased">
                            "I found solution to all my design needs from Creative Tim. I use them
                            as a freelancer in my hobby projects for fun! And its really affordable,
                            very humble guys !!!"
                        </p>
                    </div>
                </div>

                <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Tania Andrew</h5>

                            <div class="flex">
                                @foreach (range(1, 5) as $value)
                                    @include('svg.star')
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div>
                        <p class="block font-sans text-left font-light leading-relaxed text-inherit antialiased">
                            "I found solution to all my design needs from Creative Tim. I use them
                            as a freelancer in my hobby projects for fun! And its really affordable,
                            very humble guys !!!"
                        </p>
                    </div>
                </div>

                <div class="p-6 hover:bg-white hover:shadow-xl transition-all duration-500">
                    <div class="flex w-full flex-col gap-0.5">
                        <div class="flex items-center justify-between">
                            <h5
                                class="block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                                Tania Andrew</h5>

                            <div class="flex">
                                @foreach (range(1, 5) as $value)
                                    @include('svg.star')
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div>
                        <p class="block font-sans text-left font-light leading-relaxed text-inherit antialiased">
                            "I found solution to all my design needs from Creative Tim. I use them
                            as a freelancer in my hobby projects for fun! And its really affordable,
                            very humble guys !!!"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
