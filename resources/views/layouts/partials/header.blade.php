<header class="sticky-top">
    <nav class="navbar navbar-expand-xxl bg-primary py-0 ">
        <div class="container header-nav-container">
            <!-- Logo -->
            <div class="header-logo-container">
                <a class="text-center d-inline-flex justify-content-center" href="/">
                    <img src="{{ asset('images/logo.svg') }}" alt="Logo" width="194" height="136" class="img-fluid header-logo">
                </a>
            </div>


            <!-- Toggle button for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse justify-content-end bg-primary" id="navbarNav">
                <ul class="navbar-nav py-3 fw-light gap-3 align-items-xxl-center">
                    <li class="nav-item text-uppercase {{ Route::is('front.zobacz-domy') ? 'active' : '' }}">
                        <a class="nav-link link-white" href="{{ route('front.zobacz-domy') }}">Zobacz domy</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <a class="nav-link link-white" href="{{ route('front.o-inwestycji') }}">O inwestycji</a>
                    </li>
                    <li class="nav-item text-uppercase {{ Route::is('front.galeria') ? 'active' : '' }}">
                        <a class="nav-link link-white" href="{{ route('front.galeria') }}">Galeria</a>
                    </li>
                    <li class="nav-item text-uppercase {{ Route::is('front.o-nas') ? 'active' : '' }}">
                        <a class="nav-link link-white" href="{{ route('front.o-nas') }}">O nas</a>
                    </li>
                    <li class="nav-item text-uppercase {{ Route::is('front.strefa-klienta') ? 'active' : '' }}">
                        <a class="nav-link link-white" href="{{ route('front.strefa-klienta') }}">Strefa klienta</a>
                    </li>
                    <li class="nav-item text-uppercase {{ Route::is('front.kontakt') ? 'active' : '' }}">
                        <a class="nav-link link-white" href="{{ route('front.kontakt') }}">Kontakt</a>
                    </li>
                    <li class="nav-item text-uppercase">
                        <div class="d-flex flex-column gap-3">
                            <div class="flex-fill">
                                <a class="btn btn-secondary btn-sm fw-bold icon-link" href="tel:722 279 888">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.364" height="14.364" viewBox="0 0 14.364 14.364">
                                        <path
                                            d="M13.954,10.15,10.812,8.8A.673.673,0,0,0,10.026,9L8.635,10.7A10.4,10.4,0,0,1,3.664,5.726l1.7-1.392a.672.672,0,0,0,.194-.786L4.211.407a.678.678,0,0,0-.772-.39L.522.691A.673.673,0,0,0,0,1.347,13.016,13.016,0,0,0,13.017,14.364a.673.673,0,0,0,.656-.522l.673-2.918a.681.681,0,0,0-.393-.774Z"
                                            transform="translate(0 0)" fill="currentColor" />
                                    </svg>

                                    <span>722 279 888</span></a>
                            </div>
                            <div class="flex-fill">
                                <a class="btn btn-secondary btn-sm fw-bold icon-link" href="tel:722 276 888">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14.364" height="14.364" viewBox="0 0 14.364 14.364">
                                        <path
                                            d="M13.954,10.15,10.812,8.8A.673.673,0,0,0,10.026,9L8.635,10.7A10.4,10.4,0,0,1,3.664,5.726l1.7-1.392a.672.672,0,0,0,.194-.786L4.211.407a.678.678,0,0,0-.772-.39L.522.691A.673.673,0,0,0,0,1.347,13.016,13.016,0,0,0,13.017,14.364a.673.673,0,0,0,.656-.522l.673-2.918a.681.681,0,0,0-.393-.774Z"
                                            transform="translate(0 0)" fill="currentColor" />
                                    </svg>

                                    <span>722 276 888</span></a>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="widget">
    <ul>
        <li>
            <a rel="nofollow" target="_blank" class="Facebook" href="https://www.facebook.com/profile.php?id=61560722412059"><span>Facebook</span></a>
        </li>
        <li>
            <a rel="nofollow" target="_blank" class="Instagram" href="https://www.instagram.com/superbia_mostowa/"><span>Instagram</span></a>
        </li>
    </ul>
</div>
