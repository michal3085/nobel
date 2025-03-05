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
                <!--/.row -->
                <hr class="my-14 my-md-17" />
                <div class="row gy-10 gy-sm-13 gx-lg-8 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-4 offset-md-2 align-self-end">
                                <figure class="rounded"><img src="./assets/img/photos/g1.jpg" srcset="./assets/img/photos/g1@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <figure class="rounded"><img src="./assets/img/photos/g2.jpg" srcset="./assets/img/photos/g2@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-6 offset-md-1">
                                <figure class="rounded"><img src="./assets/img/photos/g3.jpg" srcset="./assets/img/photos/g3@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-4 align-self-start">
                                <figure class="rounded"><img src="./assets/img/photos/g4.jpg" srcset="./assets/img/photos/g4@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-7">A few reasons why our valued customers choose us.</h3>
                        <div class="accordion accordion-wrapper" id="accordionExample">
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingTwo">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingThree">
                                    <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                        </div>
                        <!--/.accordion -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>



    {{--    OLDY GOLDY --}}
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
