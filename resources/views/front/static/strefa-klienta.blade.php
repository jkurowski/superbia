@extends('layouts.page', ['body_class' => 'strefa-klienta'])

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
                        <li class="breadcrumb-item active" aria-current="page">Strefa klienta</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">

                <div class="row gy-5">
                    <div class="col-12 col-md-6 text-center text-md-start">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Finansowanie
                        </h1>
                        <p data-aos="fade-up">Decyzja o zakupie nowego mieszkania to zazwyczaj jedna z największych
                            inwestycji w
                            życiu. Kwestie związane z kredytami hipotecznymi i ich warunki mogą być skomplikowane.
                            Jednakże,
                            postanowiliśmy zapewnić
                            pełne wsparcie naszym klientom również w tym obszarze. Nasz ekspert finansowy zadba o to,
                            aby proces
                            uzyskania niezbędnego wsparcia finansowego był łatwiejszy i bardziej efektywny, pomagając w
                            realizacji
                            marzeń o własnym domu.</p>

                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <img class="img-fluid" src="{{ asset('images/logo.svg') }}" alt="" data-aos="fade" loading="eager" width="300"
                             height="300">
                    </div>

                </div>
            </div>
        </section>

        <section class="section-spacing">
            <div class="container">

                <div class="row gy-5">
                    <div class="col-12 col-md-8 offset-md-2 text-center">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Pakiety wykończeniowe
                        </h1>
                        <p data-aos="fade-up">Nasze kompleksowe pakiety wykończeniowe ułatwią Ci urządzenie domu,
                            zapewniając
                            szybkie i łatwe
                            rozwiązania, które pozwolą zaoszczędzić czas i wysiłek.</p>
                        <div class="mt-4">
                            <button type="button"
                                    data-target="#contact-form"
                                    class="btn btn-secondary py-3 px-5 scrollTo">Więcej</button>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="row gy-4 text-center justify-content-center">
                            <div class="col-12 col-md-6 col-lg-4">
                                <img src="{{ asset('images/superbia_ikona3.svg') }}" alt="" width="85" height="68">
                                <p class="h4 mt-3 text-primary">Dbamy nawet o najmniejszy aspekt</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <img src="{{ asset('images/superbia_ikona2.svg') }}" alt="" width="85" height="68">
                                <p class="h4 mt-3 text-primary">Zaaranżowane zgodnie z aktualnymi trendami</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <img src="{{ asset('images/superbia_ikona1.svg') }}" alt="" width="85" height="68">
                                <p class="h4 mt-3 text-primary">Wykonane zgodnie z wizja klienta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
