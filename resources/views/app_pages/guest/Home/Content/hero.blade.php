<section id="home" class="section-hero bg-[#161321] relative"
    style="background-image: url({{ asset('assets/img/webp/home-img.webp') }}); background-size: cover;">
    <img class="shape1 absolute w-12 left-72 bottom-36 parallax sm:block hidden" src="assets/img/shape/shape-1.png"
        alt="shape-1">
    <img class="shape2 absolute w-12 top-72 right-32 parallax top sm:block hidden" src="assets/img/shape/shape-2.png"
        alt="shape-2">
    <img class="shape3 absolute w-12 top-48	left-96 parallax left top sm:block hidden" src="assets/img/shape/shape-3.png"
        alt="shape-3">
    <img class="shape4 absolute w-6 bottom-72 left-24 parallax left sm:block hidden" src="assets/img/shape/shape-4.png"
        alt="shape-4">
    <img class="shape5 absolute w-12 bottom-48 right-12 parallax bottom sm:block hidden"
        src="assets/img/shape/shape-5.png" alt="shape-5">

    {{-- <div
        class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] py-[80px] px-4"> --}}
    <div
        class="flex flex-wrap justify-between items-center mx-auto 2xl:max-w-[1320px] xl:w-full lg:w-full md:w-full sm:w-full py-[80px] px-4">
        <div class="w-full 2xl:h-[90vh] lg:h-[80vh] h-[70vh] max-[320px]:h-[50vh] flex items-center px-2 2xl:max-w-lg xl:max-w-lg lg:max-w-lg lg:w-1/2 lg:mx-0 md:max-w-lg md:w-1/3 md:mx-0 2xl:w-1/2 xl:w-1/2 sm:items-center justify-center"
            data-aos="fade-up" data-aos-duration="2000">
            <div class="text-center mt-20 2xl:text-left xl:text-left lg:text-left md:text-left h-72">
                <span class="text-[#7963e0] text-[18px] font-bold">Starent</span>
                <h1
                    class="text-[#fff] 2xl:text-[60px] xl:text-[55px] lg:text-[50px] md:text-[45px] text-[40px] font-bold">
                    Inchirieri auto</h1>
                <h2 class="py-4 text-[#fff] text-[20px] font-bold">din Campulung Muscel</h2>
                <p class="pt-2 text-white text-base">Inchirieri auto in
                    Romania si in strainatate</p>
            </div>
        </div>
        <div class="w-1/2 hidden px-2 2xl:block xl:block lg:block md:block z-10 md:text-[14px] md:w-1/2"
            data-aos="fade-up" data-aos-duration="2000">
            {{-- <div
            class="w-full 2xl:h-[90vh] lg:h-[80vh] h-[70vh] max-[320px]:h-[50vh] flex items-center px-2 2xl:max-w-lg xl:max-w-lg lg:max-w-lg lg:w-1/2 lg:mx-0 md:max-w-lg md:w-1/2 md:mx-0 2xl:w-1/2 xl:w-1/2 sm:items-center justify-center aos-init aos-animate"> --}}
            @livewire('pages.guest.common.reserve-now-form')
        </div>
        {{-- </div> --}}
    </div>
    <div class="relative">
        <img src="assets/img/shape/hero-shape-dark.png" alt="hero-shape"
            class="absolute bottom-0 left-0 right-0 w-full bg-center z-10 bg-cover border-b border-[#120f1c]">
    </div>
</section>
