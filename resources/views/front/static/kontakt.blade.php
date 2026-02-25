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
                        <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">

                <div class="row gy-3 gy-md-5">
                    <div class="col-12 col-md-6">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Kontakt
                        </h1>
                        <p data-aos="fade-up">Skontaktuj się z nami, a odpowiemy na wszystkie Twoje pytania.</p>
                        <div class="row gy-3 align-items-center pt-3 pt-sm-5 text-center text-md-start">
                            <div class="col-12 col-lg-4 order-last order-lg-0 ">
                                <img src="{{ asset('images/kontakt.webp') }}" width="400" height="600" alt="" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="row gy-3 ">
                                    <div class="col-12" data-aos="fade">
                                        <p class="h4 mb-0">Klaudia</p>
                                        <small class="fw-light text-uppercase ls-15">Dział sprzedaży</small>
                                        <div class="mt-4">
                                            <p class="mb-2">
                                                <a class="icon-link link-body-secondary" href="tel:+48722279888">
                                                    <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="21.838" height="21.878"
                                                         viewBox="0 0 21.838 21.878">
                                                        <path id="Icon_feather-phone" data-name="Icon feather-phone"
                                                              d="M23,17.881v2.992a1.995,1.995,0,0,1-2.174,1.995,19.738,19.738,0,0,1-8.608-3.062,19.449,19.449,0,0,1-5.984-5.984A19.738,19.738,0,0,1,3.176,5.174,1.995,1.995,0,0,1,5.161,3H8.153a2,2,0,0,1,1.995,1.716,12.806,12.806,0,0,0,.7,2.8,2,2,0,0,1-.449,2.1L9.13,10.889a15.958,15.958,0,0,0,5.984,5.984l1.267-1.267a2,2,0,0,1,2.1-.449,12.806,12.806,0,0,0,2.8.7A2,2,0,0,1,23,17.881Z"
                                                              transform="translate(-2.167 -2)" fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2" />
                                                    </svg>
                                                    <span>+48 722 279 888</span>
                                                </a>
                                            </p>
                                            <p class="mb-0">
                                                <a class="icon-link link-body-secondary" href="mailto:sprzedaz@superbia-mostowa.pl">
                                                    <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="23.373" height="16.435"
                                                         viewBox="0 0 23.373 16.435">
                                                        <g id="email_1_" data-name="email (1)" transform="translate(0 -76)">
                                                            <g id="Group_25" data-name="Group 25" transform="translate(0 76)">
                                                                <path id="Path_26" data-name="Path 26"
                                                                      d="M21.319,76H2.054A2.057,2.057,0,0,0,0,78.054V90.38a2.057,2.057,0,0,0,2.054,2.054H21.319a2.057,2.057,0,0,0,2.054-2.054V78.054A2.057,2.057,0,0,0,21.319,76ZM21,77.37l-8.786,8.815a.8.8,0,0,1-1.061,0L2.37,77.37ZM1.37,90.128V78.306l5.892,5.911Zm1,.937,5.859-5.878,1.958,1.964a2.167,2.167,0,0,0,3,0l1.958-1.964L21,91.065ZM22,90.128l-5.892-5.911L22,78.306Z"
                                                                      transform="translate(0 -76)" fill="currentColor" />
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <span>sprzedaz@superbia-mostowa.pl</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12" data-aos="fade">
                                        <p class="h4 mb-0">Karolina</p>
                                        <small class="fw-light text-uppercase ls-15">Dział sprzedaży</small>
                                        <div class="mt-4">
                                            <p class="mb-2">
                                                <a class="icon-link link-body-secondary" href="tel:+48722276888">
                                                    <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="21.838" height="21.878"
                                                         viewBox="0 0 21.838 21.878">
                                                        <path id="Icon_feather-phone" data-name="Icon feather-phone"
                                                              d="M23,17.881v2.992a1.995,1.995,0,0,1-2.174,1.995,19.738,19.738,0,0,1-8.608-3.062,19.449,19.449,0,0,1-5.984-5.984A19.738,19.738,0,0,1,3.176,5.174,1.995,1.995,0,0,1,5.161,3H8.153a2,2,0,0,1,1.995,1.716,12.806,12.806,0,0,0,.7,2.8,2,2,0,0,1-.449,2.1L9.13,10.889a15.958,15.958,0,0,0,5.984,5.984l1.267-1.267a2,2,0,0,1,2.1-.449,12.806,12.806,0,0,0,2.8.7A2,2,0,0,1,23,17.881Z"
                                                              transform="translate(-2.167 -2)" fill="none" stroke="currentColor" stroke-linecap="round"
                                                              stroke-linejoin="round" stroke-width="2" />
                                                    </svg>
                                                    <span>+48 722 276 888</span>
                                                </a>
                                            </p>
                                            <p class="mb-0">
                                                <a class="icon-link link-body-secondary" href="mailto:sprzedaz@superbia-mostowa.pl">
                                                    <svg class="text-secondary" xmlns="http://www.w3.org/2000/svg" width="23.373" height="16.435"
                                                         viewBox="0 0 23.373 16.435">
                                                        <g id="email_1_" data-name="email (1)" transform="translate(0 -76)">
                                                            <g id="Group_25" data-name="Group 25" transform="translate(0 76)">
                                                                <path id="Path_26" data-name="Path 26"
                                                                      d="M21.319,76H2.054A2.057,2.057,0,0,0,0,78.054V90.38a2.057,2.057,0,0,0,2.054,2.054H21.319a2.057,2.057,0,0,0,2.054-2.054V78.054A2.057,2.057,0,0,0,21.319,76ZM21,77.37l-8.786,8.815a.8.8,0,0,1-1.061,0L2.37,77.37ZM1.37,90.128V78.306l5.892,5.911Zm1,.937,5.859-5.878,1.958,1.964a2.167,2.167,0,0,0,3,0l1.958-1.964L21,91.065ZM22,90.128l-5.892-5.911L22,78.306Z"
                                                                      transform="translate(0 -76)" fill="currentColor" />
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
                    <div class="col-12 col-md-6">
                        <div class="map-container ">
                            <div id="map" class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@push('scripts')
    <script>
        const mapId = 'map';
        const map = L.map('map').setView([51.66861115442905, 19.377132597664843], 13);
        const mapMarker = L.icon({
            iconUrl: '{{ asset('images/marker.svg')}}',
            iconSize: [48, 48],
            iconAnchor: [20, 40],
            popupAnchor: [0, -40]
        })

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        const marker = L.marker([51.66861115442905, 19.377132597664843], { icon: mapMarker }).addTo(map).bindPopup('<strong>Superbia</strong><br> ul. Żwirki i Wigury 19a,<br>95-200 Pabianice');
    </script>
@endpush
