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
                            Polityka prywatności
                        </h1>
                        <article>
                            <p class="h5">1.Informacje ogólne</p>
                            <p>
                                Dostawcą witryny oraz serwisu: www.superbia-mostowa.pl jest firma: ZIS NIERUCHOMOŚCI ZAWADZKI spółka
                                komandytowa (dalej: Firma), NIP 7312061966, REGON: 380751795, KRS: 0000740445 tel.
                                <a class="link-primary text-decoration-underline" href='tel:+48722276888'>722 276 888</a>,
                                <a class="link-primary text-decoration-underline" href='tel:+48722279888'>722 279 888</a>, mail: <a
                                    class="link-primary text-decoration-underline"
                                    href='mailto:biuro@superbia-mostowa.pl'>biuro@superbia-mostowa.pl</a>.
                                Podmiot ten, jest także
                                administratorem danych użytkowników
                                (klientów) udostępnionych przez użytkownika lub pobranych od użytkownika za pośrednictwem tej strony, z
                                zastrzeżeniem ppkt. 4.1. i ppkt. 4.2. poniżej.
                            </p>
                            <p>
                                Z Administratorem można się kontaktować, w następujący sposób:
                            </p>
                            <ul class="list-unstyled">
                                <li>
                                    a) listownie: ul. Żwirki i Wigury 19A, 95-200 Pabianice, z dopiskiem „Administrator Ochrony Danych”.
                                </li>
                                <li>
                                    b) pocztą elektroniczną (e-mail) pod adresem: biuro@superbia-mostowa.pl
                                </li>
                                <li>
                                    c) telefonicznie: 722 276 999, 722 279 888
                                </li>
                            </ul>
                            <p>
                                Dokładamy szczególnych starań, aby dane osobowe były przetwarzane zgodnie z prawem, rzetelnie i w sposób
                                przejrzysty. Dane są zbierane i przetwarzane w konkretnych, wyraźnych i prawnie uzasadnionych celach.
                                Dokładamy starań, aby przetwarzać dane jedynie w niezbędnym zakresie oraz, by zawsze były prawidłowe i w
                                razie potrzeby aktualizowane. Dane osobowe są przetwarzane w okresie nie dłuższym niż jest to niezbędne
                                do realizacji celów przetwarzania lub nie dłużej niż to wynika z przepisów prawa. Za nadrzędną wartość
                                przyjmujemy dbałość o integralność oraz poufność danych osobowych.
                                Korzystając ze strony internetowej www.superbia-mostowa.pl każdy użytkownik akceptuje zasady zawarte w
                                niniejszej Polityce prywatności i Plików Cookies.
                                Przedstawione w tym dokumencie zasady dotyczą zachowania prywatności i plików cookies oraz określają
                                sposób, w jaki Firma pozyskuje, przetwarza i wykorzystuje dane osobowe klientów (zamiennie:
                                użytkowników), w drodze następujących procesów:
                            </p>
                            <ul class="list-unstyled">
                                <li>
                                    a) odbiór informacji dobrowolnie podawanych przez użytkowników poprzez ich wprowadzenie w formularzu
                                    lub
                                    podanie w związku z prowadzeniem korespondencji z Firmą;
                                </li>
                                <li>
                                    b) zapisywanie w urządzeniach końcowych plików cookies;
                                </li>
                                <li>
                                    c) gromadzenie logów serwera www oraz operatora hostingowego strony www.superbia-mostowa.pl
                                </li>
                                <li>
                                    d) działanie narzędzi analitycznych szczegółowo opisanych w niniejszej „Polityce prywatności i Plików
                                    Cookies”.
                                </li>
                            </ul>
                            <p>
                                Udostępniamy jedną uniwersalną klauzulę informacyjną, którą zamieszczono w zakładce „RODO”. Szczegółowy
                                katalog usług znajduje się na stronie: www.superbia-mostowa.pl
                                Niniejsza Polityka prywatności i Plików Cookies została wprowadzona w dniu 01.04.2024 r.
                            </p>


                            <p class="h5 pt-4">2.Zasady przetwarzania danych osobowych</p>
                            <p class="h6">2.1. Zasady ogólne</p>
                            <p>
                                1. Zarówno Firma, jak i wszelkie inne podmioty przetwarzające dane użytkownika (klienta) w związku z
                                korzystaniem ze strony www.superbia-mostowa.pl zobowiązane są do stosowania niżej określonych zasad.
                                Jakiekolwiek naruszenie wskazanych zasad przez administratora lub podmiot przetwarzający dane upoważnia
                                użytkownika (klienta) do skorzystania z przysługujących mu następujących praw:
                            </p>
                            <ul class="list-unstyled">
                                <li>
                                    a) dostępu do treści swoich danych osobowych (art. 15 RODO)
                                </li>
                                <li>
                                    b) uzyskania kopii swoich danych osobowych (art. 15 RODO)
                                </li>
                                <li>
                                    c) żądania sprostowania danych osobowych (art. 16 RODO)
                                </li>
                                <li>
                                    d) żądania usunięcia niektórych danych np. numeru telefonu oraz danych, których minął okres
                                    przechowywania (art. 17 RODO)
                                </li>
                                <li>
                                    e) żądania ograniczenia przetwarzania (art. 18 RODO)
                                </li>
                                <li>
                                    f) wniesienie sprzeciwu wobec przetwarzania danych osobowych (art. 21 RODO)
                                </li>
                                <li>
                                    g) przeniesienie danych (art. 20 RODO)
                                </li>
                            </ul>
                            <p>
                                2. Korzystnie ze wskazanych uprawnień może zostać ograniczone lub wyłączone jedynie na mocy powszechnie
                                obowiązujących przepisów prawa, do których stosowania jest zobowiązany Administrator.
                            </p>
                            <p>
                                3. Jeśli prawa użytkowania (klienta) zostaną naruszone nieprawidłowym przetwarzaniem danych wówczas
                                przysługuje użytkownikowi (pacjentowi) prawo do wniesienia skargi do organu nadzorczego, którym jest
                                Prezes Urzędu Ochrony Danych Osobowych, ul. Stawki 2, 00-193 Warszawa, fax. 22 531-03-01,
                                kancelaria@uodo.gov.pl
                            </p>
                            <p class="h6">2.2. Dane w korespondencji elektronicznej</p>
                            <ul class="list-unstyled">
                                <li>
                                    1. Firma przetwarza dane w celach kontaktowych zgodnie z inicjatywą klienta.
                                </li>
                                <li>
                                    2. Stronę Firmy można odwiedzać z zachowaniem anonimowości oraz bez podawania swoich danych osobowych,
                                    jednakże podczas pierwszej wizyty na stronie Firma poprosi o wyrażenie zgody na umieszczenie plików
                                    cookies na urządzeniu oraz śledzenie zachowania w witrynie.
                                </li>
                                <li>
                                    3. Działanie takie pomaga nam lepiej zrozumieć sposób korzystania z naszej strony przez użytkowników
                                    (klientów) oraz poprawić oferty i usługi na naszej stronie. Jeżeli użytkownik nie wyraża zgody na
                                    powyższe praktyki i chce pozostać całkowicie anonimowy, może wybrać opcję niewyrażania zgody lub może
                                    wycofać zgodę ze skutkiem na przyszłość, przez użycie dostępnego mechanizmu rezygnacji. W takim
                                    przypadku zbierzemy tylko niektóre informacje anonimowe, które nie dotyczą bezpośrednio danej osoby, a
                                    odnoszą się przykładowo do liczby odwiedzających naszą stronę, schematów przeglądania oraz obszarów
                                    zainteresowań. Informacje te analizujemy, aby zrozumieć, w jaki sposób nasi klienci korzystają ze
                                    strony, ocenić trendy, statystyki oraz potrzeby naszych klientów, co pomaga nam w poprawieniu naszej
                                    strony oraz w lepszej obsłudze klientów.
                                </li>
                                <li>
                                    4. W przypadku, gdy klient wyrazi zgodę na umieszczenie plików cookies na urządzeniu oraz śledzenie
                                    zachowania w witrynie, wówczas otrzymane dane osobowe możemy wykorzystywać tylko w postaci anonimowej
                                    (tzn. w formie uniemożliwiającej zidentyfikowanie osoby, która nie pozwala na ustalenie jej
                                    tożsamości),
                                    do celów statystycznych oraz do oceny wewnętrznej sposobu poprawienia naszych produktów i usług. Dane
                                    nie będą przetwarzane do celów innych lub poza zakresem niniejszej „Polityki prywatności i plików
                                    cookies”, z wyjątkiem sytuacji dozwolonych lub wymaganych przez przepisy prawa.
                                </li>
                            </ul>

                            <p class="h6">2.3. Formularz kontaktowy</p>
                            <ul class="list-unstyled">
                                <li>
                                    1. Firma zbiera dane osobowe przekazane dobrowolnie przez klienta w przypadku kontaktu z nami przez
                                    formularz kontaktowy na stronie w zakładce „Kontakt”, na przykład po wysłaniu pytania prawnego lub
                                    zgłoszenia skargi. Jeżeli nie określono inaczej w niniejszej „Polityce prywatności i Plików Cookies”,
                                    dane nie będą wykorzystywane bez zgody klienta do celów innych niż rozpatrzenie pytania
                                    prawnego/skargi
                                    oraz nie będą wykorzystywane do innych celów, jeżeli nie jest to jednoznacznie dozwolone lub wymagane
                                    przez przepisy prawa. Pytania prawne/skargi będą rozpatrywane przez Firmę.
                                </li>
                                <li>
                                    2. Przetwarzanie danych osobowych przez Firmę w celach innych niż wskazane w pkt. 1 wymaga
                                    uprzedniej
                                    zgody użytkownika (klienta). Warunkiem wyrażenia przez użytkownika (klienta) kolejnej zgody jest
                                    uzyskanie przez użytkownika (klienta) od Firmy informacji o celach, sposobach, odbiorcach oraz czasie
                                    przetwarzania danych.
                                </li>
                                <li>
                                    3. Warunek uzyskania zgody od klienta przez Firmę, w sytuacji o której mowa w ust. 2, jest konieczny
                                    pomimo, że dane osobowe, o których pracownik dowiedział się w związku z prowadzeniem sprawy w ramach
                                    współpracy (pracy), w/z Firmą, stanowią tajemnicę Firmy.
                                </li>
                                <li>
                                    4. Administrator dane uzyskane w korespondencji elektronicznej przetwarza:
                                    <ul class="list-unstyled ps-3">
                                        <li>
                                            a) na podstawie art. 6 ust. 1 lit. f) RODO - tj. prawnie uzasadnionego interesu realizowanego
                                            przez
                                            Administratora tj.: w celu umożliwienia Administratorowi udzielenia użytkownikowi (klientowi)
                                            odpowiedzi
                                            na zadane pytanie prawne, skargę, wniosek lub inne zgłoszenia oraz w celu umożliwienia
                                            Administratorowi
                                            obrony przed ewentualnymi roszczeniami lub umożliwienia Administratorowi ustalenia lub dochodzenia
                                            roszczeń;
                                        </li>
                                        <li>
                                            b) na podstawie art. 6 ust. 1 lit. b) RODO - tj. w celu w celu realizacji zawartej umowy lub
                                            podjęcia
                                            czynności na rzecz jej zawarcia;
                                        </li>
                                        <li>
                                            c) na podstawie art. 6 ust. 1 lit. a) RODO - tj. na podstawie pisemnej zgody uzyskanej od klienta.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    4. W związku z przetwarzaniem danych w celach wymienionych wcześniej dane osobowe mogą być
                                    udostępnione
                                    innym odbiorcom danych osobowych.
                                </li>
                                <li>
                                    5. Odbiorcami danych osobowych mogą być tylko podmioty uprawnione do odbioru danych i tylko na
                                    podstawie
                                    przepisów prawa.
                                </li>
                                <li>
                                    6. Dodatkowo dane osobowe mogą być udostępniane:
                                    <ul class="list-unstyled ps-3">
                                        <li>
                                            a) podmiotom, z którymi Administrator zawarł umowę w związku z realizacją usług zaopatrujących
                                            Administratora w rozwiązania techniczne (w tym dostawcy rozwiązań IT, podmioty odpowiedzialne za
                                            serwisowania sprzętu);
                                        </li>
                                        <li>
                                            b) dostawcom usług teleinformatycznych;
                                        </li>
                                        <li>
                                            c) dostawcom usług: doradczych oraz zewnętrznym audytorom.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    7. Osoby oraz firmy wymienione w pkt. 6 lit a) - c) zostały zobowiązane przez Firmę do
                                    nieprzekazywania
                                    danych oraz do ich zabezpieczenia przed dostępem jakichkolwiek innych osób. Wymienione osoby mogą
                                    przetwarzać dane wyłącznie w zakresie oraz czasie niezbędnym do wykonania łączących je z Firmą umów o
                                    realizację usług, a także obsługi formalnej i doradczej.
                                </li>
                                <li>
                                    8. Klient wyraża zgodę na udostępnienie danych zawartych w formularzu, w celach określonych w pkt. 3
                                    poprzez zaakceptowanie niniejszego dokumentu „Polityka prywatności i Plików Cookies”.
                                </li>
                                <li>
                                    9. Administrator nie zamierza przekazywać danych osobowych do państwa trzeciego lub organizacji
                                    międzynarodowej.
                                </li>
                                <li>
                                    10. Dane udostępniane w celu prowadzenia z nami korespondencji są przez nas zabezpieczone przed
                                    dostępem
                                    osób trzecich za pomocą adekwatnych środków technicznych, technologicznych i organizacyjnych. Dane te
                                    są
                                    usuwane w terminie 1 roku od zakończenia wątku, łącznie z korespondencją, chyba, że zachowanie wątku
                                    jest niezbędne dla ustalenia lub dochodzenia roszczeń administratora. W takim przypadku zapis
                                    konwersacji wraz z danymi zostaje zachowany do dnia wydania prawomocnego wyroku zasądzającego bądź
                                    oddalającego roszczenie lub do chwili przedawnienia roszczeń.
                                </li>
                                <li>
                                    11. Dane są przetwarzane w sposób zautomatyzowany, a ich przetwarzanie podlega zasadom określonym w
                                    pkt. 2.1.
                                </li>
                                <li>
                                    12. Firma wskazuje, iż użytkownik (klient) powinien mieć na uwadze zewnętrzne domeny do których
                                    prowadzi
                                    ta strona. Domeny te stosują własne rozwiązania w zakresie polityki prywatności standardów
                                    bezpieczeństwa oraz stosują pliki cookies. Domeny zewnętrzne względem strony Firmy to aktualnie:
                                    www.facebook.com, www.youtube.com
                                </li>
                            </ul>
                            <p class="h5 pt-4">3. Pliki Cookies</p>
                            <ul class="list-unstyled">
                                <li>
                                    1. Pliki cookies to niewielkie pliki tekstowe, które stanowią dane informatyczne. Pliki te nasza
                                    witryna chce umieszczać na komputerze użytkownika lub innych urządzeniach podłączonych do Internetu,
                                    np. tabletach lub smartfonach. Jeżeli w przeglądarce ustawiono akceptację plików cookies, to
                                    przeglądarka dodaje tekst w małym pliku. Pliki cookies są wówczas przechowywane w urządzeniu końcowym
                                    użytkownika serwisu i przeznaczone są do korzystania ze stron internetowych serwisu. Pliki cookies
                                    zazwyczaj zawierają nazwę strony internetowej, z której pochodzą oraz czas przechowywania ich na
                                    urządzeniu końcowym, a także unikalny numer. Podmiotem zamieszczającym na urządzeniu końcowym
                                    użytkownika serwisu pliki cookies są operator tj. firma hostingowa (jako dostawca serwisu
                                    internetowego) i jego partnerzy oraz dostawca serwisu, którzy jednocześnie uzyskują dostęp do tych
                                    plików.
                                </li>
                                <li>
                                    2. Wykorzystywane przez Firmę na stronie internetowej pliki cookies mają kluczowe znaczenie dla
                                    funkcjonowania i wydajności strony internetowej, gdyż pliki cookies umożliwiają: (1) dostosowanie
                                    zawartości stron internetowych serwisu do preferencji użytkownika, (2) zapewnienie optymalizacji
                                    korzystania ze stron internetowych, gdyż pliki pozwalają rozpoznać urządzenie użytkownika serwisu i
                                    wyświetlić stronę internetową, dostosowaną do jego indywidualnych potrzeb, (3) tworzenie statystyk,
                                    które pomagają zrozumieć Firmie, w jaki sposób użytkownicy serwisu korzystają ze stron internetowych,
                                    co umożliwia ulepszanie ich struktury i zawartości, (4) utrzymanie, po zalogowaniu, sesji użytkownika
                                    serwisu, dzięki której użytkownik nie musi na każdej podstronie serwisu ponownie wpisywać loginu i
                                    hasła (5) działanie serwisom social media jak np. Facebook pozwalające na dzielenie się i polubienie
                                    zawartości serwisu.
                                </li>
                                <li>
                                    3. W ramach serwisu Firma stosuje dwa zasadnicze rodzaje plików cookies: „sesyjne” (session cookies)
                                    oraz „stałe” (persistent cookies). Cookies „sesyjne” są plikami tymczasowymi, które przechowywane są w
                                    urządzeniu końcowym użytkownika, do czasu wylogowania, opuszczenia strony internetowej lub wyłączenia
                                    oprogramowania w przeglądarce internetowej. „Stałe” pliki cookies przechowywane są w urządzeniu
                                    końcowym użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia
                                    przez użytkownika.
                                </li>
                                <li>
                                    4. Jeżeli użytkownik nie zaakceptuje plików cookies, czyli nie wyrazi zgody na umieszczenie plików
                                    cookies na urządzeniu oraz śledzenie zachowania w witrynie, w sposób o którym mowa w pkt. 2.2.,
                                    wówczas może to pogorszyć sposób użytkowania i funkcjonowania serwisu, w tym uniemożliwić korzystanie,
                                    z niektórych oferowanych funkcji i usług.
                                </li>
                                <li>
                                    5. Użytkownicy serwisu mogą dokonać w każdym czasie zmiany ustawień dotyczących plików cookies.
                                    Ustawienia te mogą zostać zmienione, w szczególności w taki sposób, aby blokować automatyczną obsługę
                                    plików cookies w ustawieniach przeglądarki internetowej, bądź informować o ich każdorazowym
                                    zamieszczeniu w urządzeniu użytkownika serwisu. Szczegółowe informacje o możliwości i sposobach
                                    obsługi plików cookies dostępne są w ustawieniach oprogramowania przeglądarki internetowej. W
                                    przypadku braku zmian w ustawieniach i dalszego korzystania z tej strony internetowej przyjmuje się,
                                    że użytkownik wyraża zgodę na wykorzystywanie plików cookies wymaganych dla zapewnienia prawidłowego
                                    funkcjonowania strony internetowej Firmy.
                                </li>
                                <li>
                                    6. Jeżeli użytkownik korzysta z różnych urządzeń do dostępu do strony np. ze smartfona, tabletu,
                                    komputera itd., musi zapewnić, aby każda przeglądarka na każdym urządzeniu była dostosowana w sposób
                                    odzwierciedlający własne preferencje.
                                </li>
                            </ul>
                            <p class="h6">3.1. Narzędzie analityczne - korzystanie z Google Universal Analytics</p>
                            <ul class="list-unstyled">
                                <li>1. Strona Firmy korzysta z Google Universal Analytics („Google Analytics”), usługi internetowej
                                    dostarczanej przez Google, Ireland Limited Gordon House, Barrow Street, Dublin 4, Ir. Usługa Google
                                    Analytics wykorzystuje pliki cookies do analizowania działań, preferencji i wyborów użytkownika
                                    (klienta) na stronie Firmy. Zasadniczo wszystkie informacje utworzone przez pliki cookies dotyczące
                                    korzystania z naszej strony są przekazywane i przechowywane przez firmę Google na serwerach w Stanach
                                    Zjednoczonych. Należy pamiętać, że Poradnia nie kontroluje zbierania, przechowywania i wykorzystywania
                                    takich informacji przez Google oraz nie ma dostępu do zebranych informacji. Firma Google wykorzystuje
                                    te informacje jako wskazany podmiot przetwarzający dane, aby pomóc Firmie w ocenie korzystania ze
                                    strony, tworzeniu raportów na temat korzystania ze strony oraz zapewnienia innych usług statystycznych
                                    i analitycznych związanych z korzystaniem ze strony. Adres IP przekazywany przez przeglądarkę w ramach
                                    usługi Google Analytics nie jest powiązany z żadnymi innymi danymi przechowywanymi przez firmę Google.
                                </li>
                                <li>2. Można zapobiec zbieraniu danych tworzonych przez pliki cookies na temat korzystania z tej strony
                                    (w tym adresu IP) oraz zrezygnować ze śledzenia przez Google Analytics na wszystkich stronach poprzez
                                    pobranie i zainstalowanie wtyczki do przeglądarki, która jest dostępna pod linkiem:
                                    https://tools.google.com/dlpage/gaoptout?hl=de
                                </li>
                                <li>3. Alternatywnie do instalowania wtyczki przeglądarki lub w przypadku korzystania z witryny na
                                    urządzeniach mobilnych można również zrezygnować ze śledzenia przez Google Analytics przez kliknięcie
                                    łącza dostępnego w ramach usługi Google Analytics. W takim przypadku w przeglądarce umieszczony
                                    zostanie plik cookies zapobiegający dalszemu śledzeniu korzystania z Witryny przez Google Analytics.
                                    Rezygnację należy wprowadzić dla każdego urządzenia używanego do odwiedzania naszej strony.</li>
                                <li>
                                    4. Administrator informacje o użytkowniku (pacjencie) z narzędzia analitycznego Google Analytics
                                    przetwarza na podstawie art. 6 ust. 1 lit. f) RODO - tj. prawnie uzasadnionego interesu realizowanego
                                    przez Administratora.
                                </li>
                            </ul>
                            <p class="h6">3.2. Narzędzie analityczne – korzystanie z Google Ads</p>
                            <ul class="list-unstyled">
                                <li>1. Strona Firmy korzysta z Google Ads, usługi internetowej dostarczanej przez Google, Ireland
                                    Limited Gordon House, Barrow Street, Dublin 4, Ir. Usługa Google Ads wykorzystuje pliki cookies do
                                    analizowania działań, preferencji i wyborów użytkownika (klienta) na stronie Firmy, w tym z
                                    uwzględnieniem zmiennych populacyjnych: płeć, wiek i region. Zasadniczo wszystkie informacje utworzone
                                    przez pliki cookies dotyczące korzystania z naszej strony są przekazywane i przechowywane przez firmę
                                    Google na serwerach w Stanach Zjednoczonych. Należy pamiętać, że Firma nie kontroluje zbierania,
                                    przechowywania i wykorzystywania takich informacji przez Google oraz nie ma dostępu do zebranych
                                    informacji.
                                </li>
                                <li>
                                    2. Można zapobiec zbieraniu danych tworzonych przez pliki cookies na temat korzystania z tej strony (w
                                    tym adresu IP) oraz zrezygnować ze śledzenia przez Google Ads na wszystkich stronach poprzez pobranie
                                    i zainstalowanie wtyczki do przeglądarki, która jest dostępna pod linkiem:
                                    https://adssettings.google.com/authenticated?hl=pl
                                </li>
                                <li>
                                    3. Alternatywnie do instalowania wtyczki przeglądarki lub w przypadku korzystania z witryny na
                                    urządzeniach mobilnych można również zrezygnować ze śledzenia przez Google Ads przez kliknięcie łącza
                                    dostępnego w ramach usługi Google Ads. W takim przypadku w przeglądarce umieszczony zostanie plik
                                    cookies zapobiegający dalszemu śledzeniu korzystania z witryny przez Google Ads. Rezygnację należy
                                    wprowadzić dla każdego urządzenia używanego do odwiedzania naszej strony.
                                    4. Administrator informacje o użytkowniku (kliencie) z narzędzia analitycznego Google Ads przetwarza
                                    na podstawie art. 6 ust. 1 lit. f) RODO – tj. prawnie uzasadnionego interesu realizowanego przez
                                    Administratora.
                                </li>
                            </ul>
                            <p class="h6">3.3. Korzystanie z Google Maps</p>
                            <ul class="list-unstyled">
                                <li>1. Strona korzysta z Map Google, usługi internetowej dostarczanej przez Google, Ireland Limited
                                    Gordon House, Barrow Street, Dublin 4, Ir. Usługa Google Maps wykorzystuje pliki cookies w celu
                                    wyświetlania mapy interaktywnej, która dodatkowo jest umieszczona na stronie w zakładce „Kontakt”.
                                </li>
                                <li>2. Aby wyświetlić żądaną mapę, Google pobiera adres IP, który może być przekazywany i przechowywany
                                    przez firmę Google na serwerach w Stanach Zjednoczonych. Ponadto firma Google może zbierać informacje
                                    na temat korzystania z Map Google. Należy pamiętać, że Firma nie kontroluje zbierania, przechowywania
                                    i wykorzystywania takich informacji przez Google oraz nie ma dostępu do zebranych informacji. Przed
                                    użyciem funkcji Mapy Google należy przeczytać dokładnie politykę prywatności Google. Polityka
                                    prywatności Google znajduje się pod adresem https://policies.google.com/privacy?hl=pl
                                </li>
                                <li>3. W przypadku korzystania z Map Google na naszej stronie użytkownik wyraża zgodę na przestrzeganie
                                    regulaminu firmy Google, który podany jest pod adresem https://policies.google.com/privacy?hl=pl
                                </li>
                                <li>4. Jeżeli użytkownik nie chce, aby firma Google zbierała informacje o korzystaniu z Map Google, może
                                    uniemożliwić zbieranie takich informacji przez całkowite wyłączenie usługi Mapy Google. Aby to zrobić,
                                    należy wyłączyć JavaScript w ustawieniach przeglądarki. Należy pamiętać, że w takiej sytuacji nie
                                    będzie w ogóle możliwości korzystania z Map Google.
                                </li>
                                <li>5. Administrator informacje o użytkowniku (kliencie) z narzędzia analitycznego Google Ads przetwarza
                                    na podstawie art. 6 ust. 1 lit. f) RODO - tj. prawnie uzasadnionego interesu realizowanego przez
                                    Administratora.</li>
                            </ul>
                            <p class="h5 pt-4">4. Logi serwera</p>
                            <ul class="list-unstyled">
                                <li>
                                    1. Informacje o niektórych zachowaniach użytkowników podlegają logowaniu w warstwie serwerowej. Dane
                                    te są wykorzystywane wyłącznie w celu administrowania serwisem oraz w celu zapewnienia jak najbardziej
                                    sprawnej obsługi świadczonych usług hostingowych.
                                </li>
                                <li>
                                    2. Przeglądane zasoby identyfikowane są poprzez adresy URL. Ponadto zapisowi mogą podlegać:
                                    <ul class="list-unstyled ps-2">
                                        <li>
                                            a) czas nadejścia zapytania,
                                        </li>
                                        <li>
                                            b) czas wysłania odpowiedzi,
                                        </li>
                                        <li>
                                            c) nazwę stacji klienta – identyfikacja realizowana przez protokół HTTP,
                                        </li>
                                        <li>
                                            d) informacje o błędach jakie nastąpiły przy realizacji transakcji HTTP,
                                        </li>
                                        <li>
                                            e) adres URL strony poprzednio odwiedzanej przez użytkownika (referer link) – w przypadku, gdy
                                            przejście do Serwisu nastąpiło przez odnośnik,
                                        </li>
                                        <li>
                                            f) informacje o przeglądarce użytkownika,
                                        </li>
                                        <li>
                                            g) informacje o adresie IP.
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    3. Dane powyższe nie są przetwarzane w sposób mający na celu łączenie tych danych z konkretnymi
                                    osobami przeglądającymi strony i nie skutkuje taką operacją.
                                </li>
                                <li>4. Dane powyższe są wykorzystywane jedynie dla celów administrowania serwerem przez firmę hostingowi
                                    jako dostawcę usług dla Firmy.
                                </li>
                            </ul>
                            <p class="h5 pt-4">5. Ujawnianie danych osobowych</p>
                            <ul class="list-unstyled">
                                <li>1. Firma zarządza stroną jako administrator. Ponadto Firma korzysta z narzędzi zewnętrznych
                                    dostawców usług technicznych, którzy są upoważnieni do świadczenia usług w imieniu Firmy. Podmioty te
                                    mogą mieć dostęp do danych osobowych, ale tylko w zakresie niezbędnym do umożliwienia użytkownikom
                                    korzystania ze strony, na zasadach określonych w odrębnych umowach zawartych z Firmą, w których są
                                    zawarte zasady przetwarzania danych osobowych pozyskanych w ramach dostawy usług technicznych.</li>
                            </ul>
                            <p class="h5 pt-4">6. Przechowywanie danych osobowych i bezpieczeństwo danych</p>
                            <ul class="list-unstyled">
                                <li>1. Dane użytkowników są przechowywane na serwerach dostawcy świadczącego usługi hostingowe dla
                                    Firmy. Dane osobowe użytkowników traktujemy poufnie. Dostawca usług hostingowych wdrożył odpowiednie
                                    środki: techniczne, organizacyjne i bezpieczeństwa dla ochrony danych osobowych, przed ich
                                    nieupoważnionym: ujawnieniem, dostępem, modyfikacją, nadużyciem, przypadkowym lub niezgodnym z prawem
                                    zniszczeniem lub utratą.
                                </li>
                            </ul>
                            <p class="h5 pt-4">7. Osoby małoletnie</p>
                            <ul class="list-unstyled">
                                <li>
                                    1. Witryna zawiera wyłącznie bezpieczne i przyjazne treści, nie jest jednak ukierunkowana na
                                    odbiorcę małoletniego, poniżej lat 16. Firma nie przewiduje celowego gromadzenia danych, dotyczących
                                    tej kategorii użytkowników. Jeśli Firma uzyska rzeczywistą wiedzę, że zostały zebrane dane osobowe od
                                    osoby, która nie ukończyła 16 lat, niezwłocznie takie dane usunie, o ile nie będzie prawnie
                                    zobowiązana do zatrzymania takich danych. Jeśli użytkownik (klient) uważa, że Firma omyłkowo lub
                                    nieumyślnie zebrała informacje od osoby, która nie ukończyła 16 lat, powinien niezwłocznie
                                    skontaktować się w tej sprawie z Firmą.
                                </li>
                            </ul>
                            <p class="h5 pt-4">8. Zmiany „Polityki prywatności i Plików Cookies” na stronie</p>
                            <ul class="list-unstyled">
                                <li>
                                    Firma zastrzega sobie prawo do wprowadzania w przyszłości zmian w dokumencie „Polityka prywatności i
                                    Plików Cookies”. Zmiany te zostaną ujawnione na stronie. Zmieniona wersja „Polityki prywatności i
                                    plików cookies” zostanie udostępniona na stronie niezwłocznie po dokonaniu zmian. Firma nie zamierza
                                    zbyt często wprowadzać zmian w tej polityce, stąd dobrze aby użytkownik (klient) każdorazowo zapoznał
                                    się z widniejącym na stronie tekstem „Polityki prywatności i Plików Cookies”, aby przeczytać i wyrazić
                                    zgodę na zbierane przez nas informacje, sposób ich wykorzystywania oraz warunki ich ujawniania.
                                </li>
                            </ul>





















                        </article>
                    </div>
                </div>
            </div>
        </section>


    </main>
@endsection
