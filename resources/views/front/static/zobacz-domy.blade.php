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
                        <li class="breadcrumb-item active" aria-current="page">Zobacz domy</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="smart-makieta"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">
                <div class="row gy-4 text-center">
                    <div class="col-12 col-md-8 offset-md-2">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Zobacz domy
                        </h1>
                        <p data-aos="fade-up">Sprawdź naszą ofertę i przekonaj się, jak nasze domy mogą zmienić Twoje życie,
                            oferujemy kompleksowe rozwiązania dla każdego.</p>
                    </div>
                    <div class="col-12 ">
                        <a href="{{ asset('images/mapa-zagospodarowania.jpg') }}" class="glightbox">
                            <img class="img-fluid glight" src="{{ asset('images/mapa-zagospodarowania.min.jpg') }}" alt="" data-aos="fade" width="1500"
                                 srcset="{{ asset('images/mapa-zagospodarowania_mobile.min.jpg') }} 768w, {{ asset('images/mapa-zagospodarowania.min.jpg') }} 1500w"
                                 loading="eager" height="2500">
                        </a>
                    </div>
                </div>
            </div>
        </section>




        <section class="section-spacing bg-primary text-white position-relative">
            <img src="{{ asset('images/footer_decor.png') }}" class="position-absolute bottom-0 end-0 z-0 " alt="" width="727" height="847"
                 loading="lazy" decoding="async">
            <div class="container position-relative z-1">
                <div class="row gy-5 align-items-center">
                    <div class="col-12 col-md-6" id="typ1">
                        <h2 class="mb-4" data-aos="fade-up">
                            Typ I
                        </h2>

                        <a class="btn btn-secondary" href="https://360.3destate.pl/mostowa-park/b2-c?hideDarkModeButton=true"
                           target="_blank" data-aos="fade-up">Zobacz zrzut
                            lokalu
                            typu I</a>
                    </div>
                    <div class="col-12 mt-5 mt-md-0 col-md-6 pt-md-5">
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
                <div class="row gy-4 gy-md-5 align-items-center mt-4 mt-md-6">
                    <div class="col-12 mt-5 mt-md-0 col-md-6">
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
                            <img data-img-preview src="" alt="" class="image-preview" width="735" height="411">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-first order-md-0" id="typ2">
                        <h2 class="mb-4" data-aos="fade-up">
                            Typ II
                        </h2>

                        <a class="btn btn-secondary glightbox"
                           href="https://360.3destate.pl/mostowa-park/a10-a?hideDarkModeButton=true" target="_blank"
                           data-aos="fade-up">Zobacz zrzut
                            lokalu
                            typu II</a>

                    </div>
                </div>
                <div class="row gy-4 gy-md-5 align-items-center mt-4 mt-md-6">
                    <div class="col-12 col-md-6" id="typ3">
                        <h2 class="mb-4" data-aos="fade-up">
                            Typ III
                        </h2>

                        <a class="btn btn-secondary glightbox"
                           href="https://360.3destate.pl/mostowa-park/c3-f?hideDarkModeButton=true" target="_blank"
                           data-aos="fade-up">Zobacz zrzut
                            lokalu
                            typu III</a>
                    </div>
                    <div class="col-12 mt-5 mt-md-0 col-md-6">
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
                            <img data-img-preview src="" alt="" class="image-preview" width="735" height="411">
                        </div>
                    </div>
                </div>
                <div class="row gy-4 gy-md-5 align-items-center mt-4 mt-md-6">
                    <div class="col-12 mt-5 mt-md-0 col-md-6">
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
                            <img data-img-preview src="" alt="" class="image-preview" width="735" height="411">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 order-first order-md-0" id="typ4">
                        <h2 class="mb-4" data-aos="fade-up">
                            Typ IV
                        </h2>

                        <a class="btn btn-secondary glightbox"
                           href="https://360.3destate.pl/mostowa-park/a7-c?hideDarkModeButton=true" target="_blank"
                           data-aos="fade-up">Zobacz zrzut
                            lokalu
                            typu IV</a>
                    </div>
                </div>
                <div class="row gy-4 gy-md-5 align-items-center mt-4 mt-md-6" id="typ5">
                    <div class="col-12 col-md-6">
                        <h2 class="mb-4" data-aos="fade-up">
                            Typ V
                        </h2>

                        <a class="btn btn-secondary glightbox"
                           href="https://360.3destate.pl/mostowa-park/c4-b?hideDarkModeButton=true" target="_blank"
                           data-aos="fade-up">Zobacz zrzut
                            lokalu
                            typu V</a>
                    </div>
                    <div class="col-12 mt-5 mt-md-0 col-md-6">
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
                            <img data-img-preview src="" alt="" class="image-preview" width="735" height="411">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
