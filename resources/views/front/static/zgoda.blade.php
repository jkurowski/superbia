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
                        <li class="breadcrumb-item active" aria-current="page">Polityka prywatności</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="section-spacing">
            <div class="container">

                <div class="row gy-5">
                    <div class="col-12 ">
                        <h1 class="h2 text-primary mb-4 " data-aos="fade-up">
                            Polityka prywatności formularza kontaktowego
                        </h1>
                        <p>Nasza firma szanuje Twoją prywatność i zobowiązuje się do ochrony danych osobowych, które nam
                            przekazujesz. Niniejsza Polityka Prywatności opisuje, w jaki sposób zbieramy, wykorzystujemy, ujawniamy i
                            chronimy Twoje dane osobowe w związku z korzystaniem z formularza kontaktowego na naszej stronie
                            internetowej.
                        </p>
                        <p>
                            Podczas korzystania z formularza kontaktowego na naszej stronie, możemy zbierać następujące
                            dane osobowe:
                        </p>
                        <ul>
                            <li>Imię nazwisko,</li>
                            <li>Adres email,</li>
                            <li>Numer telefonu,</li>
                            <li>Treść wiadomości,</li>
                        </ul>
                        <p>Podanie danych jest dobrowolne. Zebrane dane osobowe są wykorzystywane wyłącznie w celu udzielenia
                            odpowiedzi na Twoje zapytanie lub wiadomość przekazaną za pośrednictwem formularza kontaktowego. Twoje
                            dane osobowe nie są udostępniane osobom trzecim bez Twojej wyraźnej zgody, chyba że wymaga tego prawo.
                            Podjęliśmy odpowiednie środki bezpieczeństwa, aby chronić Twoje dane osobowe przed nieuprawnionym
                            dostępem, utratą, zmianą lub zniszczeniem. Masz prawo do dostępu do swoich danych osobowych, ich
                            poprawiania, usunięcia lub ograniczenia przetwarzania. Możesz również w każdej chwili wycofać udzieloną
                            wcześniej <a class="text-decoration-underline" href="{{ route('front.zgoda')}}">zgodę na przetwarzanie</a>
                            danych osobowych. Jeśli masz
                            jakiekolwiek
                            pytania dotyczące naszej
                            Polityki Prywatności lub chcesz skorzystać z swoich praw, prosimy o kontakt za pomocą danych podanych na
                            naszej stronie internetowej. Zachowujemy sobie prawo do wprowadzania zmian w niniejszej Polityce
                            Prywatności w dowolnym czasie. Zalecamy regularne sprawdzanie naszej strony internetowej w celu uzyskania
                            najnowszych informacji.
                        </p>
                        <p>
                            Dziękujemy za zaufanie i skorzystanie z naszych usług.
                        </p>
                    </div>


                </div>
            </div>
        </section>


    </main>
@endsection
