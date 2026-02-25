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
                        <li class="breadcrumb-item active" aria-current="page">Finansowanie</li>
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
                        <p data-aos="fade-up">Decyzja o zakupie nowego mieszkania to zazwyczaj jedna z największych inwestycji w
                            życiu. Kwestie związane z kredytami hipotecznymi i ich warunki mogą być skomplikowane. Jednakże,
                            postanowiliśmy zapewnić
                            pełne wsparcie naszym klientom również w tym obszarze. Nasz ekspert finansowy zadba o to, aby proces
                            uzyskania niezbędnego wsparcia finansowego był łatwiejszy i bardziej efektywny, pomagając w realizacji
                            marzeń o własnym domu.</p>

                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <img class="img-fluid" src="{{ asset('images/logo.svg') }}" alt="" data-aos="fade" loading="eager" width="300" height="300">
                    </div>

                </div>
            </div>
        </section>


        <section class="section-spacing text-center text-md-start">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-sm-10 col-xxl-8 mx-auto aos-init aos-animate bg-primary text-white p-4"
                         data-aos="zoom-in" data-aos-duration="700">

                        <div class="row gy-4">
                            <div class="col-12 col-md-3 ">
                                <img src="{{ asset('images/karolina.png') }}" alt="" width="190" height="190"
                                     class="img-fluid max-w-xs-100 aos-init aos-animate" loading="lazy" data-aos="fade">
                            </div>
                            <div class="col-12 col-md-8">
                                <div class=" mb-3">
                                    <h2 class="h3">Zapytaj o ofertę</h2>
                                </div>
                                <div class=" mb-4">
                                    <p>Zapraszamy do zapytania o naszą ofertę dotyczącą wsparcia finansowego - chętnie pomożemy Ci
                                        zrealizować Twoje plany.</p>
                                </div>
                                <div class="mt-4">
                                    <p class="mb-2">
                                        <a class="icon-link link-white" href="tel:+48 722 279 888">
                                            <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="21.838" height="21.878"
                                                 viewBox="0 0 21.838 21.878">
                                                <path id="Icon_feather-phone" data-name="Icon feather-phone"
                                                      d="M23,17.881v2.992a1.995,1.995,0,0,1-2.174,1.995,19.738,19.738,0,0,1-8.608-3.062,19.449,19.449,0,0,1-5.984-5.984A19.738,19.738,0,0,1,3.176,5.174,1.995,1.995,0,0,1,5.161,3H8.153a2,2,0,0,1,1.995,1.716,12.806,12.806,0,0,0,.7,2.8,2,2,0,0,1-.449,2.1L9.13,10.889a15.958,15.958,0,0,0,5.984,5.984l1.267-1.267a2,2,0,0,1,2.1-.449,12.806,12.806,0,0,0,2.8.7A2,2,0,0,1,23,17.881Z"
                                                      transform="translate(-2.167 -2)" fill="none" stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round" stroke-width="2"></path>
                                            </svg>
                                            <span>+48 722 279 888</span>
                                        </a>
                                    </p>
                                    <p class="mb-0">
                                        <a class="icon-link link-white" href="mailto:sprzedaz@superbia-mostowa.pl">
                                            <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="23.373" height="16.435"
                                                 viewBox="0 0 23.373 16.435">
                                                <g id="email_1_" data-name="email (1)" transform="translate(0 -76)">
                                                    <g id="Group_25" data-name="Group 25" transform="translate(0 76)">
                                                        <path id="Path_26" data-name="Path 26"
                                                              d="M21.319,76H2.054A2.057,2.057,0,0,0,0,78.054V90.38a2.057,2.057,0,0,0,2.054,2.054H21.319a2.057,2.057,0,0,0,2.054-2.054V78.054A2.057,2.057,0,0,0,21.319,76ZM21,77.37l-8.786,8.815a.8.8,0,0,1-1.061,0L2.37,77.37ZM1.37,90.128V78.306l5.892,5.911Zm1,.937,5.859-5.878,1.958,1.964a2.167,2.167,0,0,0,3,0l1.958-1.964L21,91.065ZM22,90.128l-5.892-5.911L22,78.306Z"
                                                              transform="translate(0 -76)" fill="currentColor"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                            <span>sprzedaz@superbia-mostowa.pl</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
@endsection
