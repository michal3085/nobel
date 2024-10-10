@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">ZMIANY W KRS</span>
                </h3>
            </div>
            <br>
            <p class="mb-4"><b>Posiadamy ponad 20-letnie doświadczenie w rejestracjach, sprzedażach i likwidacjach
                    spółek oraz w przeprowadzaniu kompleksowych zmian w KRS. Specjalizujemy się w
                    procesach począwszy od rejestracji i sprzedaży spółek, poprzez aktualizacje, zawieszenia
                    kończąc na likwidacjach i wykreśleniach z KRS. Obsługujemy także fundacje i
                    stowarzyszenia oraz wszelkie inne podmioty wpisane do rejestru KRS.</b>
            </p>
            <br>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 mb-md-10 align-items-center"> <!-- Zmniejszono marginesy -->
            <div class="col-md-8 col-lg-6 position-relative">
                <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1"
                     style="top: -2rem; left: -1.9rem;"></div>
                <figure class="rounded"><img src="./assets/img/services/krsChanges1.jpg"
                                             srcset="./assets/img/services/krsChanges1.jpg 2x" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <div class="mb-4"> <!-- Zmniejszono marginesy -->
                    <h4>Najczęstsze aktualizacje dotyczą:</h4>
                    <ul>
                        <li>komisja rewizyjna lub rada nadzorcza,</li>
                        <li>firma/nazwa,</li>
                        <li>podwyższenie kapitału,</li>
                        <li>właściciele / udziałowcy,</li>
                        <li>zarząd / prokurenci</li>
                        <li>przedmiot działalności (PKD),</li>
                        <li>adres i siedziba,</li>
                        <li>zawieszenie i/lub likwidacja / wykreślenie,</li>
                    </ul>
                </div>
            </div>
            <!--/column -->
        </div>

        <div class="wrapper image-wrapper bg-auto no-overlay bg-image text-center bg-map"
             data-image-src="./assets/img/map.png">
            <div class="container py-md-16 py-lg-18">
                <div class="row">
                    <div class="col-xl-11 col-xxl-9 mx-auto">
                        <h3 class="display-4 mb-8 px-lg-8">Pozwól nam wycenić przeprowadzenie Twojej zmiany </h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="d-flex justify-content-center">
                    <span><a class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                             data-bs-target="#modal-krs">Wyceń</a></span>
                </div>
            </div>
            <!-- /.container -->
        </div>

        <div class="col-lg-12 text-center text-lg-start">
            <h5 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                <span class="underline-3 style-2 yellow">CENNIK</span>
            </h5>
        </div>

        <div class="row gx-md-8 gx-xl-12 gy-10 mb-15">
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Cena usługi od 700+VAT, </h4>
                        <p class="mb-0">
                            opłata sądowa dotycząca wniosku o zmianę danych zwyczajowo wynosi 300 zł w systemie S24 lub 350 w systemie PRS
                        </p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Cena usługi wraz z opłata sądową (300/350)  od ok. 1000+VAT i zawiera:</h4>
                        <p class="mb-0">
                            Weryfikację:<br>
                            <ul>
                                <li>danych i sposobu przeprowadzenia zmiany,</li>
                                <li>dokumentów wewnętrznych spółki np. notarialnych, a często pośredniczenie w kontaktach z notariuszem,</li>
                            </ul>
                            Przygotowanie:<br>
                            <ul>
                                <li>niezbędnych dokumentów oraz przedłożenie ich do podpisu,</li>
                                <li>wniosku sądowego, opłacenie* i wysłanie do właściwego wydziału KRS,</li>
                            </ul>
                            Kontrolę KRS::<br>
                            <ul>
                                <li>przebieg postępowania sądowego wraz ze złożeniem wniosków ponaglających postępowanie,</li>
                                <li>przesłanie nowego odpisu z KRS z wprowadzonymi zmianami po zakończeniu postępowania,</li>
                                <li>przekazanie informacji o następnych obowiązkowych etapach po wprowadzeniu zmiany w KRS takich jak: aktualizacja w rejestrze CRBR, Urzędzie Skarbowym, ZUS, banku. </li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    @include('Services.modal._krsModal')

    <script>
        $(document).ready(function () {
            var $spinner = $('.spinner-border'); // Pobierz spinner raz, aby nie szukać go wielokrotnie

            $('#nobel-submit-button').click(function (e) {
                e.preventDefault();

                // Pokaż spinner
                $spinner.removeClass('d-none');

                $('#nobel-krs-form-id').find("input").removeClass('is-invalid');
                $('#nobel-krs-form-id').find("select").removeClass('is-invalid');
                $('#nobel-krs-form-id').find("textarea").removeClass('is-invalid');

                $.ajax({
                    url: "{{ route('service.send.krs') }}",
                    method: "POST",
                    dataType: 'json',
                    data: $('#nobel-krs-form-id').serialize(),
                    success: function (data) {
                        // Ukryj spinner po zakończeniu
                        $spinner.addClass('d-none');

                        // Schowanie modala po sukcesie
                        $('#modal-krs').modal('hide');
                        location.reload(); // Odśwież stronę
                    },
                    error: function (response) {
                        // Ukryj spinner w przypadku błędu
                        $spinner.addClass('d-none');

                        // Obsługa błędów walidacji
                        if (response.status === 422) {
                            var errors = response.responseJSON.errors;

                            // Dodanie klasy 'is-invalid' dla każdego błędnego pola
                            $.each(errors, function (key, value) {
                                var inputElement = $('[name="' + key + '"]');
                                inputElement.addClass('is-invalid');
                            });
                        }
                    }
                });
            });
        });
    </script>

@endsection
