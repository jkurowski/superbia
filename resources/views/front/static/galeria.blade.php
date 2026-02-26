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
        @if(isset($galleries) && $galleries->count())
            @foreach($galleries as $gallery)
                <section class="section-spacing">
                    <div class="container">
                        <h2 class="text-primary text-center mb-4" data-aos="fade-up">
                            {{ $gallery->name }}
                        </h2>
                        @php
                            $galleryUid = 'gallery-'.$gallery->id;
                        @endphp
                        <div class="row justify-content-center gy-4">
                            @forelse($gallery->photos as $photo)
                                @php
                                    $bigWebp = asset('uploads/gallery/images/webp/' . $photo->file_webp);
                                    $bigJpg  = asset('uploads/gallery/images/' . $photo->file);
                                    $thumbWebp = asset('uploads/gallery/images/thumbs/webp/' . $photo->file_webp);
                                    $thumbJpg  = asset('uploads/gallery/images/thumbs/' . $photo->file);
                                    $alt = $photo->file_alt ?: $photo->name;
                                @endphp
                                <div class="col-6 col-md-4 col-lg-3">
                                    <a href="{{ $bigWebp }}" class="glightbox" data-gallery="{{ $galleryUid }}" aria-label="{{ $alt }}">
                                        <picture>
                                            <source type="image/webp" srcset="{{ $thumbWebp }}">
                                            <img width="800" height="800" src="{{ $thumbJpg }}" alt="{{ $alt }}" class="img-fluid" loading="lazy" decoding="async" data-aos="fade">
                                        </picture>
                                    </a>
                                </div>
                            @empty
                                <div class="col-12 text-center text-muted">Brak zdjęć w tej galerii.</div>
                            @endforelse
                        </div>
                    </div>
                </section>
            @endforeach
        @else
            <section class="section-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center text-muted">Aktualnie brak galerii do wyświetlenia.</div>
                    </div>
                </div>
            </section>
        @endif
    </main>
@endsection
