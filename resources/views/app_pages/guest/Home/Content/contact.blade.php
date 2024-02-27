@props([
    'right_inputs' => [
        [
            'hideLabel' => true,
            'type' => 'text',
            'key' => 'Nume-si-Prenume',
            'inputData' => $name ?? null,
            'placeholder' => 'Nume si Prenume',
            'wireModelName' => 'rawData.contact.name',
            'validInputClass' => config('constants.common_css.home_page_contact.valid_input'),
            'errorInputClass' => config('constants.common_css.home_page_contact.error_input'),
            'emptyInputClass' => config('constants.common_css.home_page_contact.empty_input'),
        ],
        [
            'hideLabel' => true,
            'type' => 'email',
            'key' => 'Email',
            'inputData' => $email ?? null,
            'placeholder' => 'Adresa de email',
            'wireModelName' => 'rawData.contact.email',
            'validInputClass' => config('constants.common_css.home_page_contact.valid_input'),
            'errorInputClass' => config('constants.common_css.home_page_contact.error_input'),
            'emptyInputClass' => config('constants.common_css.home_page_contact.empty_input'),
        ],
        [
            'hideLabel' => true,
            'type' => 'text',
            'key' => 'Subiect',
            'inputData' => $city ?? null,
            'placeholder' => 'Subiect',
            'wireModelName' => 'rawData.contact.city',
            'validInputClass' => config('constants.common_css.home_page_contact.valid_input'),
            'errorInputClass' => config('constants.common_css.home_page_contact.error_input'),
            'emptyInputClass' => config('constants.common_css.home_page_contact.empty_input'),
        ],
        [
            'hideLabel' => true,
            'type' => 'textarea',
            'key' => 'Continut-mesaj',
            'inputData' => $city ?? null,
            'placeholder' => 'Scrie mesajul tău aici. Păstrați-l simplu și concis!',
            'wireModelName' => 'rawData.contact.city',
            'rows' => 5,
            'validInputClass' => config('constants.common_css.home_page_contact.valid_input'),
            'errorInputClass' => config('constants.common_css.home_page_contact.error_input'),
            'emptyInputClass' => config('constants.common_css.home_page_contact.empty_input'),
        ],
    ],
])

<section id="contact" class="section-contact 2xl:py-[80px] py-[70px]">
    <div class="banner text-center mb-[30px]" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
        <span class="text-[14px] text-[#ddd]">FORM</span>
        <h2
            class="text-center mt-[5px] 2xl:text-[35px] text-[#fff] xl:text-[33px] lg:text-[30px] md:text-[26px] sm:text-[24px] text-[22px] font-bold">
            Get In <span class="text-[#7963e0]">TOUCH</span></h2>
    </div>
    <form>
        <div
            class="flex flex-wrap justify-between items-center mx-auto mx-auto 2xl:max-w-[1320px] xl:max-w-[1140px] lg:max-w-[960px] md:max-w-[720px] sm:max-w-[540px] max-[320px]:px-[12px] px-6">
            <div class="m-b-minus-24px w-full">
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]" data-aos="fade-up" data-aos-duration="2000"
                    data-aos-delay="300">
                    <div class="border border-[#27213b] rounded-lg">
                        <div class="border-b border-[#27213b]">
                            <input type="text"
                                class="appearance-none bg-[#161321] w-full py-6 px-3 text-[#777] leading-tight focus:outline-none focus:bg-[#120f1c] rounded-t-lg"
                                id="fname" placeholder="Full Name">
                        </div>
                        <form class="w-full border-b border-[#27213b]">
                            <div>
                                @foreach ($right_inputs ?? [] as $value)
                                    @include('common.genericInputFields', $value)
                                @endforeach
                            </div>
                            <div class="flex justify-end">
                                @include('common.generic-btn', [
                                    'btn_content' => 'Trimite mesaj',
                                    'wire_method' => 'changeSection("1")',
                                    'class' =>
                                        'w-full p-2 bg-blue-500 hover:bg-blue-700 text-white border border-gray-300 rounded-md',
                                ])
                            </div>
                        </form>
                    </div>
                    {{-- <div class="mb-0">
                        <div class="mb-4">
                            <textarea
                                class="w-full border border-[#27213b] bg-[#161321] text-[#777] rounded-xl pl-4 pt-2 focus:outline-none focus:bg-[#120f1c]"
                                id="exampleFormControlTextarea1" rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="button"
                            class="text-white bg-[#7963e0] hover:bg-opacity-80 no-underline font-medium rounded-full text-sm px-8 py-2.5 mr-2">
                            Submit</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </form>
</section>
