@extends('layouts.homepage', ['body_class' => 'homepage'])
@if ($isAdmin)
    @include('layouts.partials.inline')
@endif
@section('content')
    <main>
        <!-- Hero #start -->
        <section class="position-relative home-hero">
            <div class="position-absolute start-0 top-0 end-0 bottom-0 z-0">
                <img class="w-100 h-100 object-fit-cover filter-brightness" src="{{ asset('images/hero_bg.jpg') }}" alt="Osiedle domków" width="800" height="800">
            </div>
            <div class="container position-relative z-1 text-white home-hero-container">
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-2 text-center text-md-start col-xxl-5">
                        <h1 class="text-shadow lh-11 mb-4" data-aos="fade-in">Dla najbardziej wymagających</h1>
                        <p class="fs-3 fw-medium text-shadow mb-5" data-aos="fade-in" data-aos-delay="300">Odetchnij krystalicznie
                            czystym powietrzem w łonie natury</p>
                        <div data-aos="fade-in" data-aos-delay="600">
                            <a href="{{ route('front.zobacz-domy') }}" class="btn btn-secondary ls-15 text-uppercase">Poznaj inwestycję</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Hero #end -->
        <!-- Boxes #start -->
        <section class="boxes-section text-center text-md-start">
            <div class="container">
                <div class="row gy-3 gy-md-4">
                    <div class="col-12 col-md-6 col-xl-3">
                        <div
                            class="px-3 px-sm-5 py-3 py-sm-40 bg-white box-shadow d-flex flex-column align-items-center align-items-md-start h-100"
                            data-aos="fade-up">
                            <img src="{{ asset('images/apartamenty.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                 loading="lazy">
                            <h2 class="fs-xs-18px fs-24 text-primary text-uppercase mb-2 mb-md-20">LUKSUSOWE APARTAMENTY</h2>
                            <p class="mb-0">Przestrzenie pełne wygody, gdzie nowoczesność spotyka się z innowacją, tworząc idealne
                                miejsce do życia.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div
                            class="px-3 px-sm-5 py-3 py-sm-40 bg-white box-shadow d-flex flex-column align-items-center align-items-md-start h-100"
                            data-aos="fade-up">
                            <img src="{{ asset('images/park.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64" loading="lazy">
                            <h2 class="fs-xs-18px fs-24 text-primary text-uppercase mb-2 mb-md-20">BLISKI KONTAKT<br> Z NATURĄ</h2>
                            <p class="mb-0">Wybierając apartamenty blisko natury, zyskujesz czyste powietrze i spokój, co korzystnie
                                wpływa na zdrowie i samopoczucie.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div
                            class="px-3 px-sm-5 py-3 py-sm-40 bg-white box-shadow d-flex flex-column align-items-center align-items-md-start h-100"
                            data-aos="fade-up">
                            <img src="{{ asset('images/relaks.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                 loading="lazy">
                            <h2 class="fs-xs-18px fs-24 text-primary text-uppercase mb-2 mb-md-20">STREFA RELAKSU<br>DLA KAŻDEGO</h2>
                            <p class="mb-0">Idealne miejsce do odpoczynku i regeneracji. Dzięki ogrodom i tarasom, mieszkańcy mogą
                                cieszyć się spokojem bez opuszczania osiedla.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <div
                            class="px-3 px-sm-5 py-3 py-sm-40 bg-white box-shadow d-flex flex-column align-items-center align-items-md-start h-100"
                            data-aos="fade-up">
                            <img src="{{ asset('images/miasto.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                 loading="lazy">
                            <h2 class="fs-xs-18px fs-24 text-primary text-uppercase mb-2 mb-md-20">15 minut do centrum Łodzi lub w 10
                                minut do Łodzi</h2>
                            <p class="mb-0">To idealne rozwiązanie dla osób szukających ukojenia bez rezygnacji z miejskich
                                udogodnień.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Boxes #end -->
        <!-- Text with slider #start -->
        <section class="text-with-slider-section position-relative">
            <div class="home-slider-wrapper" data-aos="fade">
                <ul data-home-slider class="list-unstyled m-0 p-0">
                    <li>
                        <img src="{{ asset('images/10_Post.jpg') }}" alt="" class="img-fluid" loading="lazy" width="2500" height="1500">
                    </li>
                    <li>
                        <img src="{{ asset('images/6_Post.jpg') }}" alt="" class="img-fluid" loading="lazy" width="2500" height="1500">
                    </li>
                    <li>
                        <img src="{{ asset('images/7_Post.jpg') }}" alt="" class="img-fluid" loading="lazy" width="2500" height="1500">
                    </li>
                </ul>
                <button data-home-nav="prev" class="btn btn-secondary btn-sm slider-nav-btn slider-nav-btn-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </button>
                <button data-home-nav="next" class="btn btn-secondary btn-sm slider-nav-btn slider-nav-btn-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right"
                         viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                    </svg>
                </button>
                <div class="home-slider-nav">
                    <div data-current-slide-num class="current-slide-num">01</div>
                    <div class="line"></div>
                    <div data-slides-count class="slides-count">03</div>
                </div>
            </div>
            <div class="container py-5 py-lg-0">
                <div class="row">

                    <div class="col-12 offset-lg-7 col-lg-5 text-center text-lg-start">
                        <h2 class="text-primary mb-md-40" data-aos="fade-in">Wszystko, czego potrzebujesz</h2>
                        <p class="fs-5 mb-md-5" data-aos="fade-in">
                            To nowoczesne osiedle
                            wykonane z wysokiej jakości materiałów przy zastosowaniu zielonych technologii takich jak pompy ciepła czy
                            fotowoltaika
                        </p>
                        <p class="fs-5 mb-md-40" data-aos="fade-in">
                            Spokojna i cicha okolica pozwoli odetchnąć
                            od miejskiego zgiełku. Swoje miejsce na ziemi odnajdą tu zarówno single, pary czy rodziny
                            z dziećmi.
                        </p>
                        <div data-aos="fade-in" data-aos-delay="600">
                            <a href="{{ route('front.zobacz-domy') }}" class="btn btn-secondary ls-15 text-uppercase">Więcej informacji</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Text with slider #end -->
        <!-- Text with image #start -->
        <section
            class="text-with-image bg-primary text-white pt-170-pb-240 text-center text-md-start position-relative white-rect-bottom ">
            <div class="overflow-hidden position-absolute top-0 start-0 w-100 h-100">
                <img src="{{ asset('images/footer_decor.png') }}" class="position-absolute bottom-neg-25per start-0 z-0 d-none d-md-block" alt=""
                     width="727" height="847" loading="lazy" decoding="async">
            </div>

            <div class="container position-relative z-1">
                <div class="row gy-5">
                    <div class="col-12 col-md-6 col-lg-4">
                        <h2 class="mb-4 mb-md-40" data-aos="fade-up">
                            Oddychaj naturalnie świeżym powietrzem
                        </h2>
                        <p class="ls-20 fs-5" data-aos="fade-up">Wybór apartamentu blisko natury przynosi szereg korzyści, takich
                            jak dostęp do czystego powietrza, naturalnego światła i spokojnego otoczenia, które wspiera zarówno
                            fizyczny, jak i psychiczny dobrostan mieszkańców, podnosząc codzienną jakość życia.</p>
                        <div data-aos="fade-in" class="mt-5">
                            <a href="{{ route('front.zobacz-domy')}}" class="btn btn-secondary ls-15 text-uppercase">Więcej informacji</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-7 offset-lg-1 position-relative" data-aos="fade">

                        <img class="img-fluid position-absolute-xl image-computed translate-xl side-image"
                             style="--translate-xl-y: -35%; --width:941; --height: 911;" src="{{ asset('images/13_Post_logo.webp') }}" alt=""
                             width="941" height="911" loading="lazy">

                    </div>
                </div>
            </div>

        </section>
        <!-- Text with image #end -->
        <!-- Image with text-icons #start -->
        <section class="image-with-text-icons pt-170-pb-140 position-relative">
            <img data-aos="fade-right" class="img-fluid  side-image" style=" --width:841; --height: 733;--max-width:841;"
                 src="{{ asset('images/17_Post_logo.webp') }}" alt="" width="841" height="733" loading="lazy">
            <div class="container">
                <div class="row">

                    <div class="col-12 col-xl-6 offset-xl-6">
                        <div class="row text-center text-xl-start">
                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <img src="{{ asset('images/plan.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                         loading="lazy">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">FUNKCJONALNY UKŁAD</h2>
                                    <p class="mb-0">Zapewnia optymalne wykorzystanie przestrzeni i maksymalny komfort dla mieszkańców.
                                        Dzięki starannie zaplanowanym wnętrzom, życie w naszych apartamentach staje się wyjątkowo efektywne
                                        i przyjemne.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <img src="{{ asset('images/duze_okna.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                         loading="lazy">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">DUŻO NATURALNEGO ŚWIATŁA</h2>
                                    <p class="mb-0">Jasne i przestronne wnętrza dzięki naturalnemu światłu to jeden z największych atutów
                                        naszych apartamentów, który tworzy wyjątkową atmosferę w naszych wnętrzach.</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <img src="{{ asset('images/pompa_ciepla.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                         loading="lazy">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">POMPA CIEPŁA</h2>
                                    <p class="mb-0">Nowoczesne i ekologiczne rozwiązanie ogrzewania, które zapewnia mieszkańcom komfort
                                        termiczny przez cały rok.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <img src="{{ asset('images/ogrod.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                         loading="lazy">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">WŁASNY OGRÓD</h2>
                                    <p class="mb-0">Apartament z własnym ogrodem to nie tylko dodatkowa przestrzeń, ale przede wszystkim
                                        możliwość cieszenia się naturą i wypoczynkiem na własnym kawałku zieleni.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <img src="{{ asset('images/parking.png') }}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
                                         loading="lazy">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">GARAŻ LUB MIEJSCE PARKINGOWE</h2>
                                    <p class="mb-0">Dla wygody i bezpieczeństwa</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class=" py-4 d-flex flex-column align-items-center align-items-xl-start h-100 aos-init aos-animate"
                                     data-aos="fade-up">
                                    <h2 class="fs-22 text-primary text-uppercase mb-2 mb-md-20">WYKOŃCZENIE POD KLUCZ</h2>
                                    <p class="mb-0">Dla najbardziej wymagających zgodnie z najnowszymi trendami</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- Image with text-icons #end -->
        <!-- Map fullwidth #start -->
        <div class="map-fullwidth text-center">
            <img class="img-fluid" src="{{ asset('images/mapka.png') }}" alt="" loading="lazy" decoding="async" width='1912' height="811">
        </div>
        <!-- Map fullwidth #end -->
        <!-- Text with list icons #start -->
        <section class="py-155">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5 text-center text-md-start">
                        <h2 class="mb-4 mb-md-40 text-primary" data-aos="fade-up">
                            Atuty lokalizacji
                        </h2>
                        <p class="ls-20 fs-5 text-primary" data-aos="fade-up">Nasza lokalizacja gwarantuje łatwy dostęp do
                            kluczowych punktów usługowych, rozrywkowych i edukacyjnych, zapewniając wygodę i komfort naszym
                            mieszkańcom. </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 offset-lg-1">
                        <div class="row">

                            <div class="col-6">
                                <div
                                    class="py-3 py-md-4 d-flex flex-column gap-2 gap-md-3 flex-xl-row align-items-center align-items-xl-start h-100 aos-init aos-animate text-center text-xl-start"
                                    data-aos="fade-up">
                                    <div>
                                        <img src="{{ asset('images/przedszkole.png') }}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
                                             loading="lazy">
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary m-0 fw-bold">Przedszkole</p>
                                        <p class="mb-0 fs-4 text-secondary fw-bold">5 min</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="py-3 py-md-4 d-flex flex-column gap-2 gap-md-3 flex-xl-row align-items-center align-items-xl-start h-100 aos-init aos-animate text-center text-xl-start"
                                    data-aos="fade-up">
                                    <div>
                                        <img src="{{ asset('images/sklep.png') }}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
                                             loading="lazy">
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary m-0 fw-bold">Biedronka</p>
                                        <p class="mb-0 fs-4 text-secondary fw-bold">8 min</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="py-3 py-md-4 d-flex flex-column gap-2 gap-md-3 flex-xl-row align-items-center align-items-xl-start h-100 aos-init aos-animate text-center text-xl-start"
                                    data-aos="fade-up">
                                    <div>
                                        <img src="{{ asset('images/sklep.png') }}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
                                             loading="lazy">
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary m-0 fw-bold">Port Łódź</p>
                                        <p class="mb-0 fs-4 text-secondary fw-bold">10 min</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="py-3 py-md-4 d-flex flex-column gap-2 gap-md-3 flex-xl-row align-items-center align-items-xl-start h-100 aos-init aos-animate text-center text-xl-start"
                                    data-aos="fade-up">
                                    <div>
                                        <img src="{{ asset('images/szkola.png') }}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
                                             loading="lazy">
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary m-0 fw-bold">Szkoła podstawowa</p>
                                        <p class="mb-0 fs-4 text-secondary fw-bold">7 min</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="py-3 py-md-4 d-flex flex-column gap-2 gap-md-3 flex-xl-row align-items-center align-items-xl-start h-100 aos-init aos-animate text-center text-xl-start"
                                    data-aos="fade-up">
                                    <div>
                                        <img src="{{ asset('images/autostrada.png') }}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
                                             loading="lazy">
                                    </div>
                                    <div>
                                        <p class="fs-4 text-primary m-0 fw-bold">Obwodnica Pabianic</p>
                                        <p class="mb-0 fs-4 text-secondary fw-bold">6 min</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Text with list icons #end -->
        <!-- Images overlapped with text #start -->
        <section class="images-overlapped-with-text">
            <div class="image-top-wrapper">
                <img class="img-fluid" src="{{ asset('images/taras_02.webp') }}" alt="" loading="lazy" data-aos="fade" width="1500" height="900">
            </div>
            <div class="bg-with-decor">
                <img src="{{ asset('images/footer_decor.png') }}" class="position-absolute bottom-0 end-0 z-0 " alt="" width="684" height="765"
                     loading="lazy" decoding="async">
            </div>

            <div class="container">

                <div class="row mb-115">
                    <div class="col-12 offset-lg-1 col-lg-5">
                        <div class="d-flex flex-column justify-content-end h-100">
                            <h2 class="mb-4 mb-md-40" data-aos="fade-up">Luksusowe wnętrza zaprojektowane dla Twojej wygody</h2>
                            <p class="fs-5 ls-20" data-aos="fade-up">Każdy element, od wysokiej jakości materiałów po przemyślane
                                rozwiązania przestrzenne, został starannie dobrany, aby wspierać komfortowe życie codzienne.</p>
                        </div>

                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="img-fluid image-in-column" src="{{ asset('images/salon_02.webp') }}" alt="" loading="lazy" data-aos="fade"
                             width="716" height="430">
                    </div>
                </div>
                <div class="row gy-90">
                    <div class="col-12 col-md-6 offset-xl-1 col-xl-5">
                        <h3 class="h4" data-aos="fade-up">Ergonomiczny design</h3>
                        <p class="ls-20" data-aos="fade-up">Wnętrza naszych apartamentów są zaprojektowane z myślą o ergonomii i
                            wygodzie użytkowania, co sprawia, że każda przestrzeń jest maksymalnie funkcjonalna i przemyślana.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="h4" data-aos="fade-up">Wysokiej jakości materiały</h3>
                        <p class="ls-20" data-aos="fade-up">Używamy tylko najlepszych, trwałych materiałów do wykończenia wnętrz, co
                            nie tylko dodaje elegancji, ale również zapewnia długotrwałość i łatwość utrzymania.</p>
                    </div>
                    <div class="col-12 col-md-6 offset-xl-1 col-xl-5">
                        <h3 class="h4" data-aos="fade-up">Indywidualne rozwiązania</h3>
                        <p class="ls-20" data-aos="fade-up">W naszych apartamentach każdy detal został zaprojektowany z myślą o
                            indywidualnych potrzebach mieszkańców.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <h3 class="h4" data-aos="fade-up">Nowoczesne technologie</h3>
                        <p class="ls-20" data-aos="fade-up">Włączamy najnowsze technologie do wnętrz naszych apartamentów, oferując
                            inteligentne rozwiązania, które zwiększają komfort i bezpieczeństwo mieszkańców.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Images overlapped with text #end -->
        <!-- Widget house type #end -->
        <section class="pt-140 pb-5">
            <div class="container">
                <h2 class="mb-40 text-primary text-center" data-aos="fade-up">Przykładowe typy domów</h2>

                <div class="row">
                    <div class="col-12">
                        <div class="house-types-slider-wrapper position-relative">
                            <ul data-house-types-slider class="m-0 p-0 list-unstyled z-1">
                                <li>
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-12 col-lg-6 text-primary text-center mt-2 mt-md-0">
                                            <p class="h3 text-secondary">Typ1</p>
                                            <p class="h3 mb-4 mb-lg-6 d-none">Apartament 3-pokojowy</p>
                                            <p class="mb-0 fs-24 d-none">Ogródek: <strong>187,9 m2</strong></p>
                                            <p class="mb-4 mb-lg-6 fs-24">Powierzchnia: <strong> od 82,8 m2</strong></p>
                                            <div class="d-flex justify-content-center flex-wrap gap-40 row-gap-3">
                                                <div>
                                                    <button class="btn btn-secondary ls-15 text-uppercase scrollTo" type="button" data-target="#contact-form">Zapytaj o cenę</button>
                                                </div>
                                                <div>
                                                    <a href="https://360.3destate.pl/mostowa-park/b2-c?hideDarkModeButton=true" target="_blank"
                                                       class="btn btn-secondary ls-15 text-uppercase ">Zobacz dom</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div data-with-controls data-state='{
                        "part": "floor",
                        "type": "threeD"
                      }' data-variants='{
                            "twoD": {
                              "base": "{{ asset('images/typ1parter2d.png') }}",
                              "floor": "{{ asset('images/typ1pietro2d.png') }}"
                            },
                            "threeD": {
                              "base": "{{ asset('images/typ1parter3d.png') }}",
                              "floor": "{{ asset('images/typ1pietro3d.png') }}"
                            }
                      }' class="border border-primary position-relative">
                                                <div class="house-types-slider-top-controls">
                                                    <button data-part="base" class="control-btn">
                                                        Parter
                                                    </button>
                                                    <button data-part="floor" class="control-btn">
                                                        Piętro
                                                    </button>
                                                </div>
                                                <div class="house-types-slider-side-controls">
                                                    <button data-type="threeD" class="control-btn">3D</button>
                                                    <button data-type="twoD" class="control-btn">2D</button>
                                                </div>
                                                <img data-img-preview src="" alt="" class="image-preview" width="735" height="411">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-12 col-lg-6 text-primary text-center mt-2 mt-md-0">
                                            <p class="h3 text-secondary">Typ2</p>
                                            <p class="h3 mb-4 mb-lg-6 d-none">Apartament 3-pokojowy</p>
                                            <p class="mb-0 fs-24 d-none">Ogródek: <strong>187,9 m2</strong></p>
                                            <p class="mb-4 mb-lg-6 fs-24">Powierzchnia: <strong>od 96,9 m2</strong></p>
                                            <div class="d-flex justify-content-center flex-wrap gap-40 row-gap-3">
                                                <div>
                                                    <button class="btn btn-secondary ls-15 text-uppercase scrollTo" type="button" data-target="#contact-form">Zapytaj o cenę</button>
                                                </div>
                                                <div>
                                                    <a href="https://360.3destate.pl/mostowa-park/a10-a?hideDarkModeButton=true" target="_blank"
                                                       class="btn btn-secondary ls-15 text-uppercase">Zobacz dom</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div data-with-controls data-state='{
                        "part": "floor",
                        "type": "threeD"
                      }' data-variants='{
                        "twoD": {
                          "base": "{{ asset('images/typ2parter2d.png') }}",
                          "floor": "{{ asset('images/typ2pietro2d.png') }}"
                        },
                        "threeD": {
                          "base": "{{ asset('images/typ2parter3d.png') }}",
                          "floor": "{{ asset('images/typ2pietro3d.png') }}"
                        }
                  }' class="border border-primary position-relative">
                                                <div class="house-types-slider-top-controls">
                                                    <button data-part="base" class="control-btn">
                                                        Parter
                                                    </button>
                                                    <button data-part="floor" class="control-btn">
                                                        Piętro
                                                    </button>
                                                </div>
                                                <div class="house-types-slider-side-controls">
                                                    <button data-type="threeD" class="control-btn">3D</button>
                                                    <button data-type="twoD" class="control-btn">2D</button>
                                                </div>
                                                <img data-img-preview src="" alt="" class="image-preview">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-12 col-lg-6 text-primary text-center mt-2 mt-md-0">
                                            <p class="h3 text-secondary">Typ3</p>
                                            <p class="h3 mb-4 mb-lg-6 d-none">Apartament 3-pokojowy</p>
                                            <p class="mb-0 fs-24 d-none">Ogródek: <strong>187,9 m2</strong></p>
                                            <p class="mb-4 mb-lg-6 fs-24">Powierzchnia: <strong>od 109,8 m2</strong></p>
                                            <div class="d-flex justify-content-center flex-wrap gap-40 row-gap-3">
                                                <div>
                                                    <button class="btn btn-secondary ls-15 text-uppercase scrollTo" type="button" data-target="#contact-form">Zapytaj o cenę</button>
                                                </div>
                                                <div>
                                                    <a href="https://360.3destate.pl/mostowa-park/c3-f?hideDarkModeButton=true" target="_blank"
                                                       class="btn btn-secondary ls-15 text-uppercase">Zobacz dom</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div data-with-controls data-state='{
                        "part": "floor",
                        "type": "threeD"
                      }' data-variants='{
                        "twoD": {
                          "base": "{{ asset('images/typ3parter2d.png') }}",
                          "floor": "{{ asset('images/typ3pietro2d.png') }}"
                        },
                        "threeD": {
                          "base": "{{ asset('images/typ3parter3d.png') }}",
                          "floor": "{{ asset('images/typ3pietro3d.png') }}"
                        }
                  }' class="border border-primary position-relative">
                                                <div class="house-types-slider-top-controls">
                                                    <button data-part="base" class="control-btn">
                                                        Parter
                                                    </button>
                                                    <button data-part="floor" class="control-btn">
                                                        Piętro
                                                    </button>
                                                </div>
                                                <div class="house-types-slider-side-controls">
                                                    <button data-type="threeD" class="control-btn">3D</button>
                                                    <button data-type="twoD" class="control-btn">2D</button>
                                                </div>
                                                <img data-img-preview src="" alt="" class="image-preview">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-12 col-lg-6 text-primary text-center mt-2 mt-md-0">
                                            <p class="h3 text-secondary">Typ4</p>
                                            <p class="h3 mb-4 mb-lg-6 d-none">Apartament 3-pokojowy</p>
                                            <p class="mb-0 fs-24 d-none">Ogródek: <strong>187,9 m2</strong></p>
                                            <p class="mb-4 mb-lg-6 fs-24">Powierzchnia: <strong>od 148,5 m2</strong></p>
                                            <div class="d-flex justify-content-center flex-wrap gap-40 row-gap-3">
                                                <div>
                                                    <button class="btn btn-secondary ls-15 text-uppercase scrollTo" type="button" data-target="#contact-form">Zapytaj o cenę</button>
                                                </div>
                                                <div>
                                                    <a href="https://360.3destate.pl/mostowa-park/a7-c?hideDarkModeButton=true" target="_blank"
                                                       class="btn btn-secondary ls-15 text-uppercase">Zobacz dom</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div data-with-controls data-state='{
                        "part": "floor",
                        "type": "threeD"
                      }' data-variants='{
                        "twoD": {
                          "base": "{{ asset('images/typ4parter2d.png') }}",
                          "floor": "{{ asset('images/typ4pietro2d.png') }}"
                        },
                        "threeD": {
                          "base": "{{ asset('images/typ4parter3d.png') }}",
                          "floor": "{{ asset('images/typ4pietro3d.png') }}"
                        }
                  }' class="border border-primary position-relative">
                                                <div class="house-types-slider-top-controls">
                                                    <button data-part="base" class="control-btn">
                                                        Parter
                                                    </button>
                                                    <button data-part="floor" class="control-btn">
                                                        Piętro
                                                    </button>
                                                </div>
                                                <div class="house-types-slider-side-controls">
                                                    <button data-type="threeD" class="control-btn">3D</button>
                                                    <button data-type="twoD" class="control-btn">2D</button>
                                                </div>
                                                <img data-img-preview src="" alt="" class="image-preview">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row gy-5 align-items-center">
                                        <div class="col-12 col-lg-6 text-primary text-center mt-2 mt-md-0">
                                            <p class="h3 text-secondary">Typ5</p>
                                            <p class="h3 mb-4 mb-lg-6 d-none">Apartament 3-pokojowy</p>
                                            <p class="mb-0 fs-24 d-none">Ogródek: <strong>187,9 m2</strong></p>
                                            <p class="mb-4 mb-lg-6 fs-24">Powierzchnia: <strong>163,9 m2</strong></p>
                                            <div class="d-flex justify-content-center flex-wrap gap-40 row-gap-3">
                                                <div>
                                                    <button class="btn btn-secondary ls-15 text-uppercase scrollTo" type="button" data-target="#contact-form">Zapytaj o cenę</button>
                                                </div>
                                                <div>
                                                    <a href="https://360.3destate.pl/mostowa-park/c4-b?hideDarkModeButton=true" target="_blank"
                                                       class="btn btn-secondary ls-15 text-uppercase">Zobacz dom</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div data-with-controls data-state='{
                        "part": "floor",
                        "type": "threeD"
                      }' data-variants='{
                        "twoD": {
                          "base": "{{ asset('images/typ5parter2d.png') }}",
                          "floor": "{{ asset('images/typ5pietro2d.png') }}"
                        },
                        "threeD": {
                          "base": "{{ asset('images/typ5parter3d.png') }}",
                          "floor": "{{ asset('images/typ5pietro3d.png') }}"
                        }
                  }' class="border border-primary position-relative">
                                                <div class="house-types-slider-top-controls">
                                                    <button data-part="base" class="control-btn">
                                                        Parter
                                                    </button>
                                                    <button data-part="floor" class="control-btn">
                                                        Piętro
                                                    </button>
                                                </div>
                                                <div class="house-types-slider-side-controls">
                                                    <button data-type="threeD" class="control-btn">3D</button>
                                                    <button data-type="twoD" class="control-btn">2D</button>
                                                </div>
                                                <img data-img-preview src="" alt="" class="image-preview">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="house-types-slider-nav z-0">
                                <button class="arrow-prev house-types-slider-nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56.183" height="58.254" viewBox="0 0 56.183 58.254">
                                        <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                           transform="translate(61.183 62.219) rotate(180)">
                                            <path id="Path_15" data-name="Path 15" d="M7.5,18H58.683" transform="translate(0 15.092)"
                                                  fill="none" stroke="#45125b" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                                            <path id="Path_16" data-name="Path 16" d="M18,7.5,43.592,33.092,18,58.683"
                                                  transform="translate(15.092)" fill="none" stroke="#45125b" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="5" />
                                        </g>
                                    </svg>

                                </button>
                                <button class="arrow-next house-types-slider-nav-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="56.183" height="58.254" viewBox="0 0 56.183 58.254">
                                        <g id="Icon_feather-arrow-right" data-name="Icon feather-arrow-right"
                                           transform="translate(-5 -3.965)">
                                            <path id="Path_15" data-name="Path 15" d="M7.5,18H58.683" transform="translate(0 15.092)"
                                                  fill="none" stroke="#45125b" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" />
                                            <path id="Path_16" data-name="Path 16" d="M18,7.5,43.592,33.092,18,58.683"
                                                  transform="translate(15.092)" fill="none" stroke="#45125b" stroke-linecap="round"
                                                  stroke-linejoin="round" stroke-width="5" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mt-lg-6">
                    <div class="col-12">
                        <div id="smart-makieta"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Widget house type #end -->




        <!-- Blog posts #start -->
        <!-- <section class="blog-posts">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="text-primary mb-4 mb-md-50" data-aos="fade-up">Zobacz postępy na budowie</h2>
              </div>
            </div>
            <div class="row gy-4 justify-content-center">
              <div class="col-12 col-md-6 col-xl-4">
                <div class="blog-post position-relative ratio ratio-4x3" data-aos="zoom-in">
                  <div class="position-absolute start-0 top-0">
                    <img src="{{ asset('images/post_image_1.png') }}" alt="" class="w-100 h-100" loading="lazy" width="483" height="362">
                  </div>
                  <div class="overlay"></div>
                  <div class="blog-post-content text-white p-20 d-flex flex-column justify-content-end ">
                    <time class="fs-small d-block">12.05.2021</time>
                    <h3 class="h4">II etap rozpoczęty</h3>

                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="blog-post position-relative ratio ratio-4x3" data-aos="zoom-in">
                  <div class="position-absolute start-0 top-0">
                    <img src="{{ asset('images/post_image_1.png') }}" alt="" class="w-100 h-100" loading="lazy" width="483" height="362">
                  </div>
                  <div class="overlay"></div>
                  <div class="blog-post-content text-white p-20 d-flex flex-column justify-content-end ">
                    <time class="fs-small d-block">12.05.2021</time>
                    <h3 class="h4">II etap rozpoczęty</h3>

                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-4">
                <div class="blog-post position-relative ratio ratio-4x3" data-aos="zoom-in">
                  <div class="position-absolute start-0 top-0">
                    <img src="{{ asset('images/post_image_1.png') }}" alt="" class="w-100 h-100" loading="lazy" width="483" height="362">
                  </div>
                  <div class="overlay"></div>
                  <div class="blog-post-content text-white p-20 d-flex flex-column justify-content-end ">
                    <time class="fs-small d-block">12.05.2021</time>
                    <h3 class="h4">II etap rozpoczęty</h3>

                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- Blog posts #end -->





    </main>
@endsection
