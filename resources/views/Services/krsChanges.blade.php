@extends('_layout')

@section('content')
    <section class="wrapper bg-light">

        <style>
            .image-wrapper {
                width: 100vw;
                margin-left: calc(-50vw + 50%);
                margin-right: calc(-50vw + 50%);
            }
        </style>

        <section class="wrapper bg-light mt-3">
            <div class="container pt-4 pb-4 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 col-xxl-10 mx-auto" data-cues="slideInDown" data-group="page-title">
                        <h1 class="display-1 fs-60 mb-4 px-md-15 px-lg-0">
                            Profesjonalne Zmiany Danych w KRS Twoja Firma w <span class="underline-3 style-3 yellow">Dobrych Rękach</span>
                        </h1>
                        <p class="lead fs-22 lh-sm mb-4 mx-md-13 mx-lg-12 justify-content-center" style="font-size: 20px;">
                            Potrzebujesz wprowadzić zmiany w Krajowym Rejestrze Sądowym? <br> Oddaj to w ręce ekspertów, którzy zadbają o każdy szczegół, oszczędzając Twój czas i energię. Z nami proces aktualizacji danych w KRS jest prosty, szybki i w pełni profesjonalny.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrapper bg-light mb-3">
            <div class="container pt-3 pb-3">
                <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
                    <!-- Kolumna ze zdjęciami -->
                    <div class="col-lg-6 position-relative">
                        <div class="row gx-md-5 gy-5 align-items-center">
                            <div class="col-md-6 position-relative">
                                <div class="row gx-md-5 gy-5">
                                    <div class="col-md-10 offset-md-2">
                                        <figure class="rounded">
                                            <img src="{{asset('assets/img/services/divided/ab1.jpg')}}" srcset="{{asset('assets/img/services/divided/ab1.jpg')}}" alt="" class="img-fluid w-100 object-fit-cover">
                                        </figure>
                                    </div>
                                    <div class="col-md-12">
                                        <figure class="rounded">
                                            <img src="{{asset('assets/img/services/divided/ab2.jpg')}}" srcset="{{asset('assets/img/services/divided/ab2.jpg')}}" alt="" class="img-fluid w-100 object-fit-cover">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure class="rounded">
                                    <img src="{{asset('assets/img/services/divided/ab3.jpg')}}" srcset="{{asset('assets/img/services/divided/ab3.jpg')}}" alt="" class="img-fluid w-100 object-fit-cover">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <!-- Kolumna z listą zmian -->
                    <div class="col-lg-6">
                        <!-- Nowy opis, taki sam styl jak poprzedni tytuł -->
                        <p class="mb-n3 mt-n8" style="text-align: justify;">
                            <b>Obsługujemy pełen zakres zmian dla spółek, fundacji, stowarzyszeń i innych podmiotów wpisanych do KRS, w tym:</b>
                        </p>

                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Rejestracje i sprzedaż spółek</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Aktualizacje danych (np. zmiana adresu, zarządu, PKD)</span></li>
                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Zawieszenia działalności</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">Likwidacje i wykreślenia</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Oryginalna lista -->
                        <p class="mb-n3 mt-3" style="text-align: justify;">
                            <b>Najczęstsze aktualizacje dotyczą:</b>
                        </p>

                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">adresu siedziby</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">nazwy firmy</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">wspólników</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">podwyższenia kapitału</span></li>
                                </ul>
                            </div>
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-yellow mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">członków zarządu</span></li>
                                    <li><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">sposobu reprezentacji</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">przedmiotu działalności (PKD)</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span style="font-size: 13px;">umowy spółki</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
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

        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-12 pb-4 pb-md-10">
                <div class="row gy-10 gy-sm-13 gx-lg-3 mb-12 mb-md-14 align-items-center">
                    <div class="col-md-6 col-lg-5 position-relative">
                        <div class="shape bg-dot yellow rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                        <div class="shape rounded bg-soft-yellow rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%;"></div>
                        <figure class="rounded"><img src="{{asset('assets/img/services/krs_changes.jpg')}}" srcset="{{asset('assets/img/services/krs_changes.jpg')}}" alt="" /></figure>
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
                                <p class="mb-0 dot-item">danych i sposobu przeprowadzenia zmiany,</p>
                                <p class="mb-0 dot-item">wszelkich dokumentów wewnętrznych spółki,</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row mb-5">
                            <div>
                                <span class="icon btn btn-block btn-soft-yellow pe-none me-4"><span class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">2. Przygotowanie</h4>
                                <p class="mb-0 dot-item">niezbędnych dokumentów oraz przedłożenie ich do podpisu,</p>
                                <p class="mb-0 dot-item">wniosku sądowego, opłacenie* i wysłanie do właściwego wydziału KRS,</p>
                            </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-block btn-soft-yellow pe-none me-4"><span class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">3. Kontrola KRS</h4>
                                <p class="mb-0 dot-item">przebieg postępowania sądowego wraz ze złożeniem wniosków ponaglających postępowanie,</p>
                                <p class="mb-0 dot-item">przesłanie nowego odpisu z KRS z wprowadzonymi zmianami po zakończeniu postępowania,</p>
                                <p class="mb-0 dot-item">przekazanie informacji o następnych obowiązkowych etapach po wprowadzeniu zmiany w KRS takich jak: aktualizacja w rejestrze CRBR, Urzędzie Skarbowym, ZUS, banku.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>
                <!--/.row-->
            </div>
            <!-- /.container -->
        </section>

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

        <hr class="bg-grape border-2 border-top border-yellow"/>

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
