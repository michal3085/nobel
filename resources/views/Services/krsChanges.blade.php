@extends('_layout')

@section('content')
    <section class="wrapper bg-light">

        <style>
            .image-wrapper {
                width: 100vw; /* Pełna szerokość widoku */
                margin-left: calc(-49vw + 50%); /* Centrowanie sekcji */
                margin-right: calc(-49vw + 50%); /* Centrowanie sekcji */
            }
        </style>

        <section class="wrapper image-wrapper bg-soft-orange shadow-sm" style="border-radius: 7%;">
            <div class="container-fluid py-13 py-md-15"> <!-- Zmiana z container na container-fluid -->
                <div class="row gx-0 gy-4 align-items-end w-100 m-0">
                    <div class="col-lg-4">
                        <h2 class="fs-16 text-uppercase text-line text-orange mb-2">ZMIANY W KRS</h2>
                        <h3 class="display-4 mb-0">Jesteśmy dumni z naszych działań</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="row align-items-center counter-wrapper gy-3 text-center">
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-orange">8000</h3>
                                <p>Przeprowadzonych zmian</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-orange">4000</h3>
                                <p>Zarejestrowanych spółek</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-orange">2000</h3>
                                <p>Sprzedanych spółek</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center mb-10 mb-md-13">
                    <div class="col-lg-6 position-relative">
                        <div class="btn btn-circle btn-orange pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                            <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg">25</span></h3>
                            <p>Lat doświadczenia</p>
                        </div>
                        <div class="row gx-md-5 gy-5 align-items-center">
                            <div class="col-md-6">
                                <div class="row gx-md-5 gy-5">
                                    <div class="col-md-10 offset-md-2">
                                        <figure class="rounded"><img src="./assets/img/photos/ab1.jpg" srcset="./assets/img/photos/ab1@2x.jpg 2x" alt=""></figure>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-12">
                                        <figure class="rounded"><img src="./assets/img/photos/ab2.jpg" srcset="./assets/img/photos/ab2@2x.jpg 2x" alt=""></figure>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6">
                                <figure class="rounded"><img src="./assets/img/photos/ab3.jpg" srcset="./assets/img/photos/ab3@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h3 class="display-4 mb-5">W przeprowadzaniu kompleksowych zmian w KRS.</h3>
                        <p class="mb-7">
                            Specjalizujemy się w procesach począwszy od rejestracji i sprzedaży spółek, poprzez
                            aktualizacje, zawieszenia kończąc na likwidacjach i wykreśleniach z KRS. Obsługujemy także
                            fundacje i stowarzyszenia oraz wszelkie inne podmioty wpisane do rejestru KRS.
                            <br><br>
                            <b>Najczęstsze aktualizacje dotyczą:</b>
                        </p>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-orange mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Zmiany adresu siedziby lub nazwy firmy</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Zmiany wspólników lub podwyższenia kapitału</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-orange mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span>Zmiany członków zarządu lub sposobu reprezentacji</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Zmiany przedmiotu działalności (PKD) lub umowy spółki</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>

        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="./assets/img/photos/bg10.jpg">
            <div class="container py-18">
                <div class="row text-center">
                    <div class="col-lg-11 col-xl-10 col-xxl-8 mx-auto">
                        <h2 class="fs-16 text-uppercase text-white mb-3">Pozwól nam wycenić Twoją zmianę</h2>
                        <h3 class="display-4 mb-6 text-white px-lg-5 px-xxl-0">Zacznijmy od KRS, aby wyznaczyć plan działania</h3>
                        <a href="#" class="btn btn-white rounded-pill mb-0 text-nowrap" data-bs-toggle="modal"
                           data-bs-target="#modal-krs">Join Us</a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
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
