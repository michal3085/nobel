@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7">
            <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-3">
                <div class="col-lg-12 text-center text-lg-start">
                    <h3 class="display-3 mb-5 pe-xl-10 pe-xxl-15">
                        <span class="underline-3 style-2 yellow">Zmiany w KRS</span>
                    </h3>
                </div>
            </div>
        </div>

        <style>
            .image-wrapper {
                width: 100vw;
                margin-left: calc(-50vw + 50%);
                margin-right: calc(-50vw + 50%);
            }
        </style>

        <section class="wrapper bg-soft-yellow shadow-sm" style="border-radius: 7%;">
            <div class="container-fluid py-6 py-md-8"> <!-- Zmniejszone paddingi -->
                <div class="row gx-0 gy-4 align-items-end w-100 m-0">
                    <div class="col-lg-4">
{{--                        <h2 class="fs-16 text-uppercase text-line text-yellow mb-n12">ZMIANY W KRS</h2>--}}
                        <h3 class="display-4 mb-0">Jesteśmy dumni z naszych działań</h3>
                    </div>
                    <div class="col-lg-8">
                        <div class="row align-items-center counter-wrapper gy-3 text-center">
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-yellow">8000</h3>
                                <p>przeprowadzonych zmian</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-yellow">4000</h3>
                                <p>zarejestrowanych spółek</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="counter counter-lg text-yellow">2000</h3>
                                <p>sprzedanych spółek</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-18">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center ">
                    <div class="col-lg-6 position-relative">
                        <div class="btn btn-circle btn-yellow pe-none position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                            <h3 class="text-white mb-1 mt-n3"><span class="counter counter-lg">25</span></h3>
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
                        <h3 class="display-4 mb-5">Przeprowadzamy kompleksowe zmiany w KRS</h3>
                        <p class="mb-7"  style="text-align: justify;">
                            Specjalizujemy się w procesach począwszy od rejestracji i sprzedaży spółek, poprzez aktualizacje,
                            zawieszenia kończąc na likwidacjach i wykreśleniach z KRS. Obsługujemy także fundacje i stowarzyszenia
                            oraz wszelkie inne podmioty wpisane do rejestru KRS.
                            <br>
                            W przypadku zmian w których niezbędne jest uzyskanie dokumentów potwierdzonych przez
                            notariusza np. zbycie udziałów, zmiana umowy spółki w formie aktu notarialnego,
                            zwyczajowo kontaktujemy się z notariuszem w imieniu klienta i ustalamy cały zakres
                            <br>
                            <b>Najczęstsze aktualizacje dotyczą:</b>
                        </p>
{{--                        TODO USUNAC SLOWA ZMIANA --}}
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany adresu siedziby</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiana nazwy firmy</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany wspólników</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiana podwyższenia kapitału</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany członków zarządu</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany sposobu reprezentacji</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany przedmiotu działalności (PKD)</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zmiany umowy spółki</span></li>
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
                        <a href="#" class="btn btn-yellow rounded-pill mb-0 text-nowrap" data-bs-toggle="modal"
                           data-bs-target="#modal-krs">Wyceń zmiany</a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

{{--        TODO ZMIANIC NA CO NAS WYROZNIA--}}
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-12 pb-4 pb-md-10">
                <div class="row gy-10 gy-sm-13 gx-lg-3 mb-12 mb-md-14 align-items-center">
                    <div class="col-md-6 col-lg-5 position-relative">
                        <div class="shape bg-dot yellow rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                        <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%;"></div>
                        <figure class="rounded"><img src="./assets/img/photos/about7.jpg" srcset="./assets/img/photos/about7@2x.jpg 2x" alt="" /></figure>
                    </div>
                    <!--/column-->
                    <div class="col-lg-7 col-xl-6 offset-lg-1">
                        <h3 class="display-4 mb-5">Spójrz jak działamy:</h3>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <span class="icon btn btn-block btn-soft-yellow pe-none me-4"><span class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">1. Weryfikacja</h4>
                                <p class="mb-0">- danych i sposobu przeprowadzenia zmiany,</p>
                                <p class="mb-0">- wszelkich dokumentów wewnętrznych spółki,</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <span class="icon btn btn-block btn-soft-yellow pe-none me-4"><span class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">2. Przygotowanie</h4>
                                <p class="mb-0">- niezbędnych dokumentów oraz przedłożenie ich do podpisu,</p>
                                <p class="mb-0">- wniosku sądowego, opłacenie* i wysłanie do właściwego wydziału KRS,</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-block btn-soft-yellow pe-none me-4"><span class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">3. Kontrola KRS</h4>
                                <p class="mb-0">- przebieg postępowania sądowego wraz ze złożeniem wniosków ponaglających postępowanie,</p>
                                <p class="mb-0">- przesłanie nowego odpisu z KRS z wprowadzonymi zmianami po zakończeniu postępowania,</p>
                                <p class="mb-0">- przekazanie informacji o następnych obowiązkowych etapach po wprowadzeniu zmiany w KRS takich jak: aktualizacja w rejestrze CRBR, Urzędzie Skarbowym, ZUS, banku.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>
                <!--/.row-->
            </div>
            <!-- /.container -->
        </section>

        <div class="mt-2">
            @include('qa.display', ['section' => 'krsChanges', 'title' => 'Q&A'])
        </div>


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
