@extends('layouts.app')

@section('page_title')
    {{ __('translations.faqs') }}
@endsection

@push('css')
    {{-- Zona pentru css-urile folosite la nivel de pagina --}}
@endpush

@section('content')
    <section class="bg-white mt-20">
        <div class="text-center pt-10 md:text-3xl text-xl font-semibold my-5">{{ __('translations.faqs') }}</div>
        <div class="p-5">
            <p>
                It started with 4 people, 7 cars and many big ambitions, about being the best, the biggest, getting to the
                top
                and
                about
                "there is only 1st place and the rest".
            </p>
            <p class="mt-5">As everyone knows, on top of Everest, nobody gets there alone. You need a team of people who
                move,
                communicate
                and
                function as one and complement each other.
            </p>

            <p class="mt-5"><strong>Our story</strong> was written together with all those who are now our colleagues and
                those
                who have
                once been ... They
                are
                all
                part of the Klass Wagen story. We thank every member of our team once again, for their effort on putting the
                customer
                first and delivering excellent service.
            </p>
            <p class="mt-5">

                Klass Wagen has been active for more than a decade in the car rental industry, becoming a national car
                rentals
                leader
                for leisure travel. Our fleet of over 3000 cars is present in Romania (in the main cities with the airport)
                and
                in
                Hungary (Budapest).
            </p>

            <p class="mt-5"><strong>Customer appreciation</strong> for our services has helped us grow year after year.
                This
                has led to the
                opening of new
                locations
                both in the country and abroad.
            </p>

            <p class="mt-5">
                The Klass Wagen team consists of over 160 colleagues focused on providing unforgettable customer experience.
                This
                fact
                is proven by our customers online positive testimonies / reviews.
            </p>

            <h2 class="mt-5 text-2xl">Why choose our services?</h2>
            <p>* Quality / price ratio is great.</p>

            <p>* You will find the perfect car for your needs. This is ensured by the largest fleet of rental cars in
                Romania.
            </p>

            <p>* We pay great attention to customer loyalty, that is why we often organize contests for our existing
                customers,
                where
                we offer substantial prizes (Iphone 7, 10 days free rental for VW Tiguan, VW Passat or VW Golf).</p>

            <p>* The quality of the services offered by us has convinced more than 1900 customers to review our services
                with
                very
                good
                or excellent reviews (according to reviews on Facebook, where we have a rating of 4.8 *, the maximum being 5
                *).
                This
                rating gives us the top position in terms of the most appreciated car rental company in Romania.
            </p>

            <div class="mt-5">
                <h1 class="mt-5 text-2xl">Do you want to join our team?</h1>
                <p>If you are looking for a young, ambitious team, guided by managers who know how to make the most of your
                    qualities,
                    then
                    Klass Wagen is the right place for you.
                </p>
                <p>
                    We offer you the possibility of a beautiful career and to develop new skills that will help you
                    professionally
                    but
                    also
                    personal.
                </p>
                <p>
                    Click this link <a href="#" class="text-red-500">I want to join the team</a> and you can be part
                    of
                    this
                    success
                    story.
                </p>
            </div>
        </div>
    </section>
@endsection

@push('js')
    {{-- Zona pentru js-urile folosite la nivel de pagina --}}
@endpush
