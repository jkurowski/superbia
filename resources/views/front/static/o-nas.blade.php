@extends('layouts.page', ['body_class' => 'o-nas'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main>
    <section class="breadcrumb-page section-spacing bg-primary text-white">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-white"><a href="/">Strona główna</a></li>
                    <li class="breadcrumb-item active" aria-current="page">O nas</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="section-spacing bg-primary text-white">
        <div class="container">

            <div class="row gy-5">
                <div class="col-12 col-md-6">
                    <h1 class="h2 mb-4 " data-aos="fade-up">
                        O nas
                    </h1>
                    <p data-aos="fade-up">Nasza firma oferuje kompleksowe usługi zarządzania projektami
                        inwestycyjnymi, zapewniając wsparcie na każdym etapie realizacji. Od planowania po uzyskanie pozwolenia na
                        użytkowanie, zajmujemy się wszystkim. Nasze działania obejmują analizę, projektowanie, selekcję
                        wykonawców, nadzór nad pracami oraz rozliczenia uczestników projektu, zapewniając kompleksową obsługę
                        inwestycji.</p>
                    <p data-aos="fade-up" class="mb-4 mb-lg-5">Specjalizujemy się w pełnej realizacji budowlanej, co oznacza, że
                        jesteśmy
                        odpowiedzialni za całokształt prac budowlanych, od fundamentów aż po finalne wykończenie. Dzięki temu nasi
                        klienci mogą być pewni, że ich projekt jest realizowany zgodnie z najwyższymi standardami jakości i
                        bezpieczeństwa, przy jednoczesnej optymalizacji kosztów i czasu realizacji. Nasze doświadczenie i
                        profesjonalizm gwarantują, że każda inwestycja jest prowadzona efektywnie, z uwzględnieniem indywidualnych
                        potrzeb i oczekiwań klienta.</p>
                    <div class="row gy-4 align-items-baseline justify-content-center">

                        <div class="col-6 col-lg-6">
                            <a href="https://www.zielonybugaj.pl/" target="_blank" rel="noopener norefferer">
                                <img src="{{ asset('images/zielony_bugaj_logo.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                     data-aos="fade">
                            </a>
                        </div>
                        <div class="col-6 col-lg-6">
                            <a href="https://osiedlebliskawola.pl/" target="_blank" rel="noopener norefferer">
                                <img src="{{ asset('images/bliska_wola_logo.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                     data-aos="fade">
                            </a>
                        </div>
                        <div class="col-6 col-lg-6">

                            <img src="{{ asset('images/moniuszki_logo.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                 data-aos="fade">

                        </div>
                        <div class="col-6 col-lg-6">
                            <a href="https://www.dachy-zrbzawadzki.pl/" target="_blank" rel="noopener norefferer">
                                <img src="{{ asset('images/zis-logo-jasne.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                     data-aos="fade">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/17_Post.jpg') }}" alt="" data-aos="fade" loading="eager" width="736"
                         height="442">
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing mt-5">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-12 col-md-6 order-last order-md-first">
                    <img class="img-fluid" src="{{ asset('images/warto_wiedziec.png') }}" alt="" data-aos="fade" loading="lazy" width="1869"
                         height="526" data-aos="fade">
                </div>
                <div class="col-12 col-md-6" style="text-wrap: balance;">
                    <h2 class="mb-4" data-aos="fade-up">
                        Kilka słów o firmie z zakresu dachów.
                    </h2>
                    <p data-aos="fade-up">
                        Dachy płaskie są naszą specjalizacją od 30 lat. To usługa na której zbudowaliśmy markę, której zaufało
                        wiele znanych w Polsce firm, jak: Budimex, Skanska, Polimex, Mostostal i innych potentatów branży
                        budowlanej w Polsce.
                    </p>
                    <p data-aos="fade-up">
                        Wykonujemy pokrycia dachów płaskich w pełnych systemach izolacji termicznej w zróżnicowanych
                        zastosowaniach materiałowych w zależności od potrzeb i specyfiki dachu klienta. Dzięki korzystaniu z
                        nowoczesnych technologii, wykonywane przez naszą firmę dachy płaskie cechują się bardzo dużą trwałością.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 position-relative">
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-12 col-md-10 col-xl-8 offset-md-1 offset-xl-2">
                    <p class="h3 text-center">
                        Grupa kapitałowa Zawadzki dołączyła do grona stałych darczyńców UNICEF Polska
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing  position-relative">

        <div class="container position-relative z-1">

            <div class="row gy-5 align-items-center">
                <div class="col-12 col-md-6">

                    <h2 class="mb-4" data-aos="fade-up">
                        Partnerstwo
                    </h2>
                    <p data-aos="fade-up">Aktywnie uczestniczymy na rynku nieruchomości, dokonując zakupu gruntów o różnym
                        stopniu przygotowania pod inwestycje mieszkaniowe, obejmujące pełen cykl inwestycyjny. </p>
                    <p data-aos="fade-up">Nasze działania obejmują grunty objęte miejscowym planem zagospodarowania
                        przestrzennego, grunty z decyzjami o warunkach
                        zabudowy, jak i te, które wymagają przygotowania zarówno pod względem formalno-prawnym, jak i technicznym.
                        Podejmujemy współpracę z posiadaczami gruntów, angażując się w projekty, które przynoszą korzyści obu
                        stronom, tworząc wyjątkowe produkty inwestycyjne. </p>
                    <p data-aos="fade-up">
                        Podejmujemy współpracę z posiadaczami gruntów, angażując się w projekty, które przynoszą korzyści obu
                        stronom, tworząc wyjątkowe produkty inwestycyjne. </p>
                    <div class="text-center text-sm-start mt-4">
                        <a class="btn btn-secondary py-3 px-5" href="{{ route('front.kontakt')}}">Sprawdź</a>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/17_Post_logo.webp') }}" alt="" data-aos="fade" width="736" height="442">
                </div>
            </div>
            <div class="row gy-3 gy-md-5 align-items-center mt-4 mt-md-6">
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/13_Post_logo.webp') }}" alt="" data-aos="fade" width="736" height="442">
                </div>
                <div class="col-12 col-md-6 order-first order-md-0">
                    <h2 class="mb-4" data-aos="fade-up">
                        Kompleksowość
                    </h2>
                    <p data-aos="fade-up">Nasza kompleksowość to gwarancja, że każdy aspekt Twojego projektu jest perfekcyjnie
                        zorganizowany i zarządzany. Dzięki nam masz pewność, że wszystkie potrzeby i wymagania zostaną
                        zrealizowane w jednym miejscu, bez zbędnego stresu i komplikacji.</p>

                    <div class="text-center text-sm-start mt-4">
                        <a class="btn btn-secondary py-3 px-5" href="{{ route('front.kontakt')}}">Sprawdź</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacing  position-relative">
        <img src="{{ asset('images/footer_decor.png') }}" class="position-absolute bottom-0 end-0 z-0 opacity-05" alt="" width="727"
             height="847" loading="lazy" decoding="async">
        <div class="container position-relative z-1">
            <div class="row gy-5 align-items-center mb-md-5">
                <div class="col-12 text-center ">
                    <h2 class="mb-4" data-aos="fade-up">
                        Zrealizowane inwestycje
                    </h2>

                </div>
            </div>

            <div class="row gy-3 gy-md-5 align-items-center">
                <div class="col-12 col-md-6 order-first order-md-0">
                    <div class="col-6">
                        <a href="https://osiedlebliskawola.pl/" target="_blank" rel="noopener norefferer">
                            <img src="{{ asset('images/bliska_wola_logo.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                 data-aos="fade">
                        </a>
                    </div>
                    <h2 class="mb-4" data-aos="fade-up">
                        Osiedle Bliska Wola
                    </h2>
                    <p data-aos="fade-up">Osiedle Bliska wola rozpoczęcie budowy 2019 rok zakończenie 2021 . 24 domy
                        jednorodzinne w zabudowie szeregowej. Nowoczesne osiedle z jasnymi i praktycznymi wnętrzami. </p>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/invest_osiedle_bliska_wola.webp') }}" alt="" data-aos="fade" width="800"
                         height="449" loading="lazy" decoding="async">
                </div>
            </div>

            <div class="row gy-3 gy-md-5 align-items-center pt-6">
                <div class="col-12 col-md-6 order-first order-md-0">
                    <div class="col-6">
                        <a href="https://www.zielonybugaj.pl/" target="_blank" rel="noopener norefferer">
                            <img src="{{ asset('images/zielony_bugaj_logo.png') }}" alt="" width="230" height="114" class="img-fluid p-md-2"
                                 data-aos="fade">
                        </a>
                    </div>

                    <h2 class="mb-4" data-aos="fade-up">
                        Osiedle Zielony Bugaj
                    </h2>
                    <p data-aos="fade-up">Osiedle zielony Bugaj rozpoczęcie budowy 2022 rok zakończenie 2023 rok . Ekologiczne
                        osiedle z fotowoltaika i pompą ciepła . To nowoczesne osiedle składające się z 36 lokali mieszkalnych z
                        ogródkami </p>
                </div>
                <div class="col-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('images/invest_osiedle_zielony_bugaj.webp') }}" alt="" data-aos="fade" width="800"
                         height="449" loading="lazy" decoding="async">
                </div>
            </div>


        </div>
    </section>

</main>
@endsection
