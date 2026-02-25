@extends('layouts.page', ['body_class' => 'o-nas'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
<main>
    <section class="breadcrumb-page section-spacing">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">O inwestycji</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="section-spacing">
        <div class="container">
            <div class="row gy-4">
                <div class="col-12 col-md-6">
                    <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                        O inwestycji
                    </h1>
                    <p data-aos="fade-up">To nowoczesne osiedle wykonane z wysokiej jakości materiałów przy zastosowaniu
                        zielonych technologii takich jak pompy ciepła czy fotowoltaika.
                    </p>
                    <p data-aos="fade-up">Spokojna i cicha okolica pozwoli odetchnąć od miejskiego zgiełku. Swoje miejsce na
                        ziemi odnajdą tu
                        zarówno single, pary czy rodziny z dziećmi.</p>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images//17_Post.jpg') }}" alt="" data-aos="fade" width="736" height="442">
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing text-md-start">
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

    <section class="section-spacing pb-0">
        <div class="ratio ratio-16x9">
            <iframe class="w-100 h-100 pe-none"
                    src="https://www.youtube.com/embed/2YfIb2acQEY?si=Gp2gWuXuuea6U0A6&amp;controls=0&mute=1&autoplay=1&loop=1&iv_load_policy=3&showinfo=0&cc_load_policy=0&modestbranding=0"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>



    <section class="image-with-text-icons pt-170-pb-140  section-spacing position-relative">
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
                                <img src="{{ asset('images/pompa_ciepla.png')}}" alt="" width="85" height="68" class="img-fluid mb-3 max-w-xs-64"
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

    <section class="section-spacing">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-5 text-center text-md-start">
                    <h2 class="mb-4 mb-md-40 text-primary" data-aos="fade-up">
                        Atuty lokalizacji
                    </h2>
                    <p class="" data-aos="fade-up">Nasza lokalizacja gwarantuje łatwy dostęp do kluczowych punktów usługowych,
                        rozrywkowych i edukacyjnych, zapewniając wygodę i komfort naszym mieszkańcom.</p>
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
                                    <img src="{{ asset('images/szkola.png')}}" alt="" width="85" height="68" class="img-fluid mb-md-3 max-w-xs-64"
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




    <section class="section-spacing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary text-center mb-4" data-aos="fade-up">
                        Lokalizacja
                    </h2>
                </div>
            </div>
        </div>
        <div class="map-fullwidth text-center">
            <img class="img-fluid" src="{{ asset('images/mapka.png') }}" alt="" loading="lazy" decoding="async" width='1912' height="811">
        </div>
    </section>


    <section class="section-spacing">
        <div class="container">
            <h1 class="h2 text-primary text-center mb-4 " data-aos="fade-up">
                Wizualizacje zewnętrzne
            </h1>
            <div class="row justify-content-center gy-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/17_Post.webp') }}" class="glightbox" data-gallery="gallery-1">
                        <img width="800" height="800" src="{{ asset('images/17_Post.webp') }}" alt="Salon" class="img-fluid" loading="eager"
                             data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/10_Post.webp') }}" class="glightbox" data-gallery="gallery-1">
                        <img width="800" height="800" src="{{ asset('images/10_Post.webp') }}" alt="Salon" class="img-fluid" loading="eager"
                             data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/taras_01.webp') }}" class="glightbox" data-gallery="gallery-1">
                        <img width="800" height="800" src="{{ asset('images/taras_01.webp') }}" alt="Salon" class="img-fluid" loading="eager"
                             data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/taras_02.webp') }}" class="glightbox" data-gallery="gallery-1">
                        <img width="800" height="800" src="{{ asset('images/taras_02.webp') }}" alt="Salon" class="img-fluid" loading="eager"
                             data-aos="fade">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing">
        <div class="container">
            <h2 class="text-primary text-center mb-4" data-aos="fade-up">
                Wizualizacje wnętrz
            </h2>
            <div class="row justify-content-center gy-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_01.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_01.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_02.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_02.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_03.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_03.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_04.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_04.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_05.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_05.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/salon_06.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/salon_06.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/sypialnia_01.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/sypialnia_01.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/sypialnia_02.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/sypialnia_02.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/gabinet_01.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/gabinet_01.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="{{ asset('images/gabinet_02.webp') }}" class="glightbox" data-gallery="gallery-2">
                        <img width="800" height="800" src="{{ asset('images/gabinet_02.webp') }}" alt="Salon" class="img-fluid" loading="lazy"
                             decoding="async" data-aos="fade">
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection
