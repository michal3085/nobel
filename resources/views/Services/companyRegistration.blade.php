@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 orange">Rejestracja spółki</span>
                </h3>
            </div>
            <br>
            <br>
            <section class="wrapper bg-light">
                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-3">
                    <div class="col-12">
                        <h3 class="display-6 mb-4">Wykorzystaj naszą wiedzę a Twoja firma powstanie w kilku krokach.</h3>
{{--                        <p class="mb-4">Twoja firma powstanie w kilku prostych krokach:</p>--}}
                    </div>

                    <div class="col-lg-6">
                        <ul class="icon-list bullet-bg bullet-soft-orange">
                            <li><span><i class="uil uil-check"></i></span><span><b>Analiza Twoich potrzeb</b> – wstępna konsultacja</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Przygotowanie dokumentów</b> – sporządzamy wszystkie niezbędne dokumenty, w tym umowę spółki, wniosek do Krajowego Rejestru Sądowego (KRS).</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Rejestracja spółki w KRS</b> – pełen proces rejestracji.</span></li>
                            <li><span><i class="uil uil-check"></i></span><span><b>Obsługa notarialna</b> – współpracujemy z zaufanymi notariuszami.</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Wsparcie po rejestracji</b> – zgłoszenie do US, VAT, PCC3, CRBR, księgowość.</span></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
                    </div>
                </div>


                <!--/.row -->

                {{--    PRICE    --}}


                <div class="container pt-5 pb-5">
                    <div class="pricing-wrapper position-relative mt-5 mt-md-6 mb-12 mb-md-15">
                        <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                        <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>

                        <div class="row gy-6 mt-3 mt-md-5 justify-content-center">
                            <!-- REJESTRACJA W KRS 690 zł -->
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <h4 class="card-title text-orange">REJESTRACJA W KRS</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">690</span></div>
                                        </div>
                                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span>Przygotowanie dokumentów rejestrowych</span></li>
                                            <li><i class="uil uil-check"></i><span>Rejestracja spółki w KRS</span></li>
                                            <li><i class="uil uil-check bullet-soft-red"></i><span>Zgłoszenie spółki w Urzędzie Skarbowym (NIP, VAT, PCC)</span></li>
                                            <li><i class="uil uil-check bullet-soft-red"></i><span>Wpis w rejestrze CRBR</span></li>
                                            <li><i class="uil uil-check bullet-soft-red"></i><span>Wirtualne biuro (możliwość podpisania umowy)</span></li>
                                            <li><i class="uil uil-check"></i><span>e-Doręczenia</span></li>
                                            <li><i class="uil uil-check"></i><span>Konsultacja z księgowością</span></li>
                                            <li><i class="uil uil-check"></i><span>Kontakt z doradcą bankowym</span></li>
                                        </ul>
                                        <div class="mt-auto w-100">
                                            <a href="#" class="btn btn-orange rounded-pill w-100 nobel-contact-button" data-bs-toggle="modal" data-bs-target="#modal-company-registration" data-office="REJESTRACJA W KRS">ZAREJESTRUJ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- REJESTRACJA W KRS 1000 zł -->
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <h4 class="card-title text-orange">REJESTRACJA W KRS +</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1000</span></div>
                                        </div>
                                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span>Przygotowanie dokumentów rejestrowych</span></li>
                                            <li><i class="uil uil-check"></i><span>Rejestracja spółki w KRS</span></li>
                                            <li><i class="uil uil-check bullet-soft-red"></i><span>Zgłoszenie spółki w Urzędzie Skarbowym (NIP, VAT, PCC)</span></li>
                                            <li><i class="uil uil-check"></i><span>Wpis w rejestrze CRBR</span></li>
                                            <li><i class="uil uil-check"></i><span>Wirtualne biuro na <b>3</b> miesiące (nieobowiązkowe)</span></li>
                                            <li><i class="uil uil-check"></i><span>e-Doręczenia</span></li>
                                            <li><i class="uil uil-check"></i><span>Konsultacja z księgowością</span></li>
                                            <li><i class="uil uil-check"></i><span>Kontakt z doradcą bankowym</span></li>
{{--                                            <li><i class="uil uil-times bullet-soft-red"></i><span>Kontakt z doradcą bankowym</span></li>--}}
                                        </ul>
                                        <div class="mt-auto w-100">
                                            <a href="#" class="btn btn-orange rounded-pill w-100 nobel-contact-button" data-bs-toggle="modal" data-bs-target="#modal-company-registration" data-office="REJESTRACJA W KRS +">ZAREJESTRUJ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PEŁNA REJESTRACJA SPÓŁKI 2000 zł -->
                            <div class="col-md-6 col-lg-4 popular">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <h4 class="card-title text-orange">PEŁNA REJESTRACJA SPÓŁKI</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2000</span></div>
                                        </div>
                                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span>Przygotowanie dokumentów rejestrowych</span></li>
                                            <li><i class="uil uil-check"></i><span>Rejestracja spółki w KRS</span></li>
                                            <li><i class="uil uil-check"></i><span>Zgłoszenie spółki w Urzędzie Skarbowym (NIP, VAT, PCC)</span></li>
                                            <li><i class="uil uil-check"></i><span>Wpis w rejestrze CRBR</span></li>
                                            <li><i class="uil uil-check"></i><span>Wirtualne biuro na <b>6</b> miesięcy (nieobowiązkowe)</span></li>
                                            <li><i class="uil uil-check"></i><span>e-Doręczenia</span></li>
                                            <li><i class="uil uil-check"></i><span>Konsultacja z księgowością</span></li>
                                            <li><i class="uil uil-check"></i><span>Kontakt z doradcą bankowym</span></li>
                                        </ul>
                                        <div class="mt-auto w-100">
                                            <a href="#" class="btn btn-orange rounded-pill w-100 nobel-contact-button" data-bs-toggle="modal" data-bs-target="#modal-company-registration" data-office="PEŁNA REJESTRACJA SPÓŁKI">ZAREJESTRUJ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-start" style="margin-left: 170px;">
                            <small class="text-start d-inline-block">
                                Cena nie zawiera<br>
                                - opłata sądowa KRS 350 zł<br>
                                - podatek PCC3 (0,5% wartości kapitału) tj. 23 zł przy kapitale 5000 zł
                            </small>
                        </div>
                    </div>
                </div>

                {{--    /PRICE    --}}


                <div class="col-12">
                    <h3 class="display-6 mb-4 text-orange">Może Ci się przydać</h3>
                </div>

                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-18">
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4"> <span class="number fs-18">1</span> </div>
                            </div>
                            <div>
                                <h4>Księgowość</h4>
                                <p class="mb-2">od 550 PLN</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4"> <span class="number fs-18">2</span> </div>
                            </div>
                            <div>
                                <h4>Założenie profilu zaufanego ePUAP</h4>
                                <p class="mb-2">250 PLN</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4"> <span class="number fs-18">3</span> </div>
                            </div>
                            <div>
                                <h4>Uzyskanie numeru PESEL</h4>
                                <p class="mb-2">750 PLN</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>

            </section>
        </div>


        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-12 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2" data-cue="fadeIn" data-delay="300">
                                <figure class="rounded"><img src="./assets/img/photos/ab1.jpg" srcset="./assets/img/photos/ab1@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-12" data-cue="fadeIn" data-delay="900">
                                <figure class="rounded"><img src="./assets/img/photos/ab2.jpg" srcset="./assets/img/photos/ab2@2x.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6" data-cue="fadeIn" data-delay="600">
                        <figure class="rounded"><img src="./assets/img/photos/ab3.jpg" srcset="./assets/img/photos/ab3@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-3 text-orange">Zapewniamy pełne wsparcie w zależności od Twoich potrzeb i planów biznesowych.</h2>
                <p class="lead fs-lg">Specjalizujemy się w rejestracji</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Spółki z ograniczoną odpowiedzialnością</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Spółki akcyjnej</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Spółki jawnej</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                    <div class="col-xl-6">
                        <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Spółki komandytowej</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Spółki komandytowo-akcyjnej</span></li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
{{--                <div class="text-center mt-4">--}}
{{--                    <a href="#" class="btn btn-orange rounded">Jestem zainteresowany</a>--}}
{{--                </div>--}}
                <!--/.row -->
            </div>
            <!--/column -->
        </div>

        <div class="row gy-6 align-items-center mb-14 mb-md-18">
            <div class="col-lg-4">
                <h3 class="display-4 mb-5 text-orange">Nasze działania opierają się na dwóch systemach sądowych S24 i PRS</h3>

            </div>
            <!--/column -->
            <div class="col-lg-7 offset-lg-1 pricing-wrapper">
                <div class="row gy-6 mt-5">
                    <div class="col-md-6">
                        <div class="pricing card shadow-lg">
                            <div class="card-body pb-12">
                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-start"><span class="price-currency"></span><span class="price-value">S24</span></div>
                                    <div class="price price-hide price-hidden justify-content-start"><span class="price-currency"></span><span class="price-value">S24</span></div>
                                </div>
                                <!--/.prices -->
                                <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>Szybkość rejestracji spółki</strong> - już w ciągu 1-3 dni otrzymujesz
KRS, REGON, NIP </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Opłata sądowa</strong> 350 PLN </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Brak opłaty notarialnej</strong> (oszczędność 500-1000 PLN ) </span></li>
                                    <li><i class="uil uil-check"></i><span> <strong>Możliwość przeprowadzania późniejszych zmian</strong> tj. zbycie
udziałów, zmiana umowy spółki, zarządu, adresu i inne, w
spółce również przez internet (S24),</span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Umowa spółki jest krótka i praktyczna.</strong></span></li>
                                </ul>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 popular">
                        <div class="pricing card shadow-lg">
                            <div class="card-body pb-12">
                                <div class="prices text-dark">
                                    <div class="price price-show justify-content-start"><span class="price-currency"></span><span class="price-value">PRS</span></div>
                                    <div class="price price-hide price-hidden justify-content-start"><span class="price-currency"></span><span class="price-value">PRS</span></div>
                                </div>
                                <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8">
                                    <li><i class="uil uil-check"></i><span><strong>2-4 tygodni w trybie tradycyjnym tj. z udziałem notariusza</strong></span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Opłata sądowa</strong> 600 PLN </span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Opłata notarialna</strong></span></li>
                                    <li><i class="uil uil-check"></i><span><strong> Konieczność wizyty u notariusza </strong></span></li>
                                    <li><i class="uil uil-check"></i><span><strong>Możliwość dostosowania umowy do indywidualnych potrzeb</strong></span></li>
                                </ul>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
    </section>

    <div class="mt-4">
        @include('qa.display', ['section' => 'companyRegistration', 'title' => 'Q&A'])
    </div>

    @include('Services.modal._companyRegistration')
@endsection
