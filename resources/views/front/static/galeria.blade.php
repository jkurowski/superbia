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
                        <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                    </ol>
                </nav>
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
        <section class="section-spacing">
            <div class="container">
                <h2 class="text-primary text-center mb-4" data-aos="fade-up">
                    Dziennik inwestycji
                </h2>
                <div class="row justify-content-center gy-4">

                </div>
            </div>
        </section>
    </main>
@endsection
