@extends('_layout')

@section('content')
    <section class="wrapper bg-light mt-3">
        <div class="container pt-4 pb-4 text-center">
            <div class="row">
                <div class="col-lg-10 col-xl-7 col-xxl-10 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 fs-50 mb-4 px-md-15 px-lg-0">
                        Rejestracja Spółki Prosty Proces<br> z <span class="underline-3 style-3 orange">Naszym Wspraciem</span>
                    </h1>
                    <p class="lead fs-20 lh-sm mb-3 mx-md-13 mx-lg-12 justify-content-center" style="font-size: 20px;">
                        Nasze <strong>25-letnie doświadczenie</strong> to gwarancja bezpieczeństwa
                        i profesjonalizmu na każdym etapie.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->
            <br>
            <br>
            <section class="wrapper bg-light">
                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-3 align-items-center">
                    <!-- kolumna z tekstem -->
                    <div class="col-lg-6">
                        <h3 class="display-6 mb-4">Dlaczego warto wybrać Nobel?</h3>

                        <p class="mb-4" style="text-align: justify">
                            Marzysz o założeniu własnej firmy, ale obawiasz się biurokracji i formalności?
                            Z nami proces zakładania spółki jest prosty, szybki i bezpieczny.
                            <br>Dzięki naszemu doświadczeniu przeprowadzimy Cię przez każdy etap,
                            zapewniając odpowiednie wsparcie i minimum formalności.
                            Dzięki temu Ty możesz skupić się na tym, co najważniejsze – rozwoju swojego biznesu.
                        </p>

                        <ul class="icon-list bullet-bg bullet-soft-orange">
                            <li><span><i class="uil uil-check"></i></span>
                                <span><b>Minimum formalności</b> – zajmujemy się wszystkim za Ciebie, oszczędzając Twój czas i energię.</span>
                            </li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span>
                                <span><b>Kompleksowe wsparcie</b> – od pierwszych kroków aż po rejestrację i dalsze działania, jesteśmy z Tobą na każdym etapie.</span>
                            </li>
                            <li><span><i class="uil uil-check"></i></span>
                                <span><b>Bezpieczeństwo i zgodność z przepisami</b> – dbamy o poprawność dokumentów i współpracujemy z zaufanymi notariuszami</span>
                            </li>
                        </ul>
                    </div>

                    <!-- kolumna ze zdjęciem -->
                    <div class="col-lg-6">
                        <figure class="rounded shadow-lg">
                            <img src="{{asset('assets/img/services/rch_5.jpg')}}"
                                 srcset="{{asset('assets/img/services/rch_5.jpg')}}"
                                 alt="" class="img-fluid w-100 h-100 object-fit-cover">
                        </figure>
                    </div>
                </div>

                <div class="row gy-6 gx-lg-4 mb-10 mt-6 align-items-center">
                    <!-- kolumna ze zdjęciem -->
                    <div class="col-md-6 col-lg-6 position-relative">
                        <div class="shape bg-dot orange rellax w-10 h-12"
                             data-rellax-speed="1" style="top: -1rem; left: -1rem;"></div>
                        <div class="shape rounded rellax d-md-block"
                             data-rellax-speed="0" style="bottom: -1rem; right: -1rem; width: 60%; height: 65%;"></div>
                        <figure class="rounded shadow-lg">
                            <img src="{{asset('assets/img/services/rch_1.jpg')}}"
                                 srcset="{{asset('assets/img/services/rch_1.jpg')}}"
                                 alt="" class="img-fluid w-100 h-100 object-fit-cover">
                        </figure>
                    </div>

                    <!-- kolumna z tekstem -->
                    <div class="col-md-6 col-lg-6">
                        <h2 class="fs-16 text-uppercase text-line text-orange mb-4">Jak to działa?</h2>

                        <div class="d-flex flex-row mb-4">
                            <div>
                                <span class="icon btn btn-block btn-soft-orange pe-none me-4"><span class="number">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-2" style="font-size:16px;">Analiza Twoich potrzeb:</h4>
                                <p class="mb-0" style="font-size:14px;">Zaczynamy od wstępnej konsultacji, podczas której dokładnie poznamy Twoje cele i dobierzemy najlepsze rozwiązanie dla Twojej firmy.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-4">
                            <div>
                                <span class="icon btn btn-block btn-soft-orange pe-none me-4"><span class="number">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-2" style="font-size:16px;">Przygotowanie dokumentów:</h4>
                                <p class="mb-0" style="font-size:14px;">Sporządzamy wszystkie niezbędne dokumenty, w tym umowę spółki oraz wniosek do KRS, dbając o ich poprawność i zgodność z przepisami.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-4">
                            <div>
                                <span class="icon btn btn-block btn-soft-orange pe-none me-4"><span class="number">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-2" style="font-size:16px;">Rejestracja spółki w KRS:</h4>
                                <p class="mb-0" style="font-size:14px;">Zajmujemy się całym procesem rejestracji w KRS, monitorując jego przebieg i informując Cię na bieżąco o postępach.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-4">
                            <div>
                                <span class="icon btn btn-block btn-soft-orange pe-none me-4"><span class="number">4</span></span>
                            </div>
                            <div>
                                <h4 class="mb-2" style="font-size:16px;">Obsługa notarialna:</h4>
                                <p class="mb-0" style="font-size:14px;">Współpracujemy z zaufanymi notariuszami, co gwarantuje sprawną i bezpieczną obsługę wszelkich czynności notarialnych.</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-block btn-soft-orange pe-none me-4"><span class="number">5</span></span>
                            </div>
                            <div>
                                <h4 class="mb-2" style="font-size:16px;">Wsparcie po rejestracji:</h4>
                                <p class="mb-0" style="font-size:14px;">Po zarejestrowaniu spółki nie zostawiamy Cię samego! Pomożemy w zgłoszeniach do US (VAT, PCC-3), do CRBR, a także zapewnimy profesjonalne wsparcie księgowe.</p>
                            </div>
                        </div>
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
                    <h3 class="display-6 mb-4 text-orange">Dodatkowe usługi, które mogą Ci się przydać</h3>
                    <p class="lead fs-lg">Aby jeszcze bardziej ułatwić Ci prowadzenie biznesu, oferujemy szereg powiązanych usług.
                        Poniżej przedstawiamy wybrane z nich, które mogą okazać się niezwykle pomocne na różnych etapach rozwoju Twojej firmy:</p>
                </div>

                <div class="row gx-lg-8 gx-xl-12 gy-6 mb-14 mb-md-18">
                    <!-- Księgowość -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4">
                                    <span class="number fs-18">1</span>
                                </div>
                            </div>
                            <div>
                                <h4>Księgowość</h4>
                                <p class="mb-2"><strong>od 550 PLN / miesiąc</strong></p>
                                <p class="mb-0">Zapewnij swojej firmie profesjonalne wsparcie księgowe.
                                    Nasi partnerzy zadbają o wszystkie formalności, pozwalając Ci skupić się na swojej działalności.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->

                    <!-- ePUAP -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4">
                                    <span class="number fs-18">2</span>
                                </div>
                            </div>
                            <div>
                                <h4>Założenie profilu zaufanego ePUAP</h4>
                                <p class="mb-2"><strong>250 PLN</strong></p>
                                <p class="mb-0">Ułatw sobie kontakt z urzędami i załatwiaj sprawy online dzięki
                                    szybkiemu założeniu profilu zaufanego ePUAP.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->

                    <!-- PESEL -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <div>
                                <div class="icon btn btn-circle pe-none btn-soft-orange me-4">
                                    <span class="number fs-18">3</span>
                                </div>
                            </div>
                            <div>
                                <h4>Uzyskanie numeru PESEL</h4>
                                <p class="mb-2"><strong>750 PLN</strong></p>
                                <p class="mb-0">Jeśli potrzebujesz numeru PESEL do prowadzenia działalności w Polsce,
                                    pomożemy Ci go uzyskać sprawnie i bez zbędnych formalności.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>


            </section>
        </div>

        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-12 align-items-center">
            <div class="col-lg-7 order-lg-2">
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2" data-cue="fadeIn" data-delay="300">
                                <figure class="rounded"><img src="{{asset('assets/img/services/divided/ab1_v2.jpg')}}" srcset="{{asset('assets/img/services/divided/ab1_v2.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-12" data-cue="fadeIn" data-delay="900">
                                <figure class="rounded"><img src="{{asset('assets/img/services/divided/ab2_v2.jpg')}}" srcset="{{asset('assets/img/services/divided/ab2_v2.jpg')}}" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6" data-cue="fadeIn" data-delay="600">
                        <figure class="rounded"><img src="{{asset('assets/img/services/divided/ab3_v2.jpg')}}" srcset="{{asset('assets/img/services/divided/ab3_v2.jpg')}}" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-5">
                <h2 class="display-4 mb-3 fs-28 text-orange">Zapewniamy pełne wsparcie w zależności od Twoich potrzeb i planów biznesowych.</h2>
                <p class="lead fs-lg">Specjalizujemy się w rejestracji</p>
                <div class="row gy-3 gx-xl-8">
                    <div class="col-xl-12">
                        <ul class="icon-list bullet-bg bullet-soft-orange mb-0">
                            <li><span><i class="uil uil-check"></i></span><span>Spółki z ograniczoną odpowiedzialnością</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Spółki akcyjnej</span></li>
                            <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Spółki jawnej</span></li>
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
                                <ul class="icon-list bullet-bg bullet-soft-orange mt-7 mb-8">
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
                                <ul class="icon-list bullet-bg bullet-soft-orange mt-7 mb-8">
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

    <hr class="bg-grape border-2 border-top border-orange"/>

    <div class="mt-4">
        @include('qa.display', ['section' => 'companyRegistration', 'title' => 'Q&A'])
    </div>

    @include('Services.modal._companyRegistration')
@endsection
