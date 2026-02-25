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
                        <li class="breadcrumb-item active" aria-current="page">Pakiety wykończeniowe</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">

                <div class="row gy-5">
                    <div class="col-12 col-md-8 offset-md-2 text-center">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Pakiety wykończeniowe
                        </h1>
                        <p data-aos="fade-up">Nasze kompleksowe pakiety wykończeniowe ułatwią Ci urządzenie domu, zapewniając
                            szybkie i łatwe
                            rozwiązania, które pozwolą zaoszczędzić czas i wysiłek.</p>
                        <div class="mt-4">
                            <a class="btn btn-secondary py-3 px-5" href="#" download>Pobierz</a>
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

        <section class="section-spacing">
            <div class="container">

                <div class="row justify-content-center gy-4">
                    <div class="col-6 col-md-4">
                        <a href="{{ asset('images/AD209503-2-1.jpg') }}" class="glightbox" data-gallery="gallery-3">
                            <img width="800" height="800" src="{{ asset('images/AD209503-2-1_cropped.jpg') }}" alt="Salon" class="img-fluid"
                                 loading="lazy" decoding="async" data-aos="fade">
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ asset('images/AD209527-2.jpg') }}" class="glightbox" data-gallery="gallery-3">
                            <img width="800" height="800" src="{{ asset('images/AD209527-2_cropped.jpg') }}" alt="Salon" class="img-fluid"
                                 loading="lazy" decoding="async" data-aos="fade">
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                        <a href="{{ asset('images/AD209563-2.jpg') }}" class="glightbox" data-gallery="gallery-3">
                            <img width="800" height="800" src="{{ asset('images/AD209563-2_cropped.jpg') }}" alt="Salon" class="img-fluid"
                                 loading="lazy" decoding="async" data-aos="fade">
                        </a>
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
