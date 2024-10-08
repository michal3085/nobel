@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">REJESTRACJA SPÓŁKI</span>
                </h3>
            </div>
            <br>
            <br>
            <section class="wrapper bg-light">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mb-3">
                    <div class="col-lg-6 order-lg-2 position-relative">
                        <div class="shape rounded-circle bg-soft-primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: -2.5rem; right: -1.5rem;"></div>
                        <figure class="rounded mb-0"><img src="./assets/img/services/rejestracja_1.jpg" srcset="./assets/img/services/rejestracja_1.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <h3 class="display-6 mb-4">Skorzystania z usługi rejestracji spółki, obejmuje:</h3>
                        <div class="row gy-3">
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span><b>Analizę Twoich potrzeb</b> – wstępna konsultacja</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Przygotowanie dokumentów</b> – sporządzamy wszystkie niezbędne dokumenty, w tym umowę spółki, wniosek do Krajowego Rejestru Sądowego (KRS).</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Rejestracja spółki w KRS</b> –pełen proces rejestracji, uzyskaniem numeru REGON, NIP.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                            <div class="col-xl-6">
                                <ul class="icon-list bullet-bg bullet-soft-leaf mb-0">
                                    <li><span><i class="uil uil-check"></i></span><span><b>Obsługa notarialna</b> – współpracujemy z zaufanymi notariuszami.</span></li>
                                    <li class="mt-3"><span><i class="uil uil-check"></i></span><span><b>Wsparcie po rejestracji</b> – zgłoszenie do US, VAT, PCC3, CRBR, księgowość.</span></li>
                                </ul>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

                {{--    PRICE    --}}
                <h3 class="display-3 mb-2 pe-xl-10 pe-xxl-15 my-2 mt-5"> <!-- Dodano klasę mt-5 -->
                    <span class="underline-3 style-2 yellow">CENNIK</span>
                </h3>

                <div class="container pt-5 pb-5">
                    <div class="pricing-wrapper position-relative mt-5 mt-md-6 mb-12 mb-md-15">
                        <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                        <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>

                        <div class="row gy-6 mt-3 mt-md-5 justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">REJESTRACJA W KRS </h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1000</span></div>
                                        </div>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span> Przygotowanie dokumentów rejestrowych </span></li>
                                            <li><i class="uil uil-check"></i><span>Rejestracja spółki w KRS </span></li>
                                            <li><i class="uil uil-check"></i><span>Zgłoszenie spółki w Urzędzie Skarbowym (NIP, VAT, PCC) </span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> Wpis w rejestrze CRBR</span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> Wirtualne biuro na 3 miesiące* (nieobowiązkowe)</span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> Kontakt z doradcą bankowym</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 popular">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">PEŁNA REJESTRACJA</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2000</span></div>
                                           </div>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span> Przygotowanie dokumentów rejestrowych </span></li>
                                            <li><i class="uil uil-check"></i><span>Rejestracja spółki w KRS </span></li>
                                            <li><i class="uil uil-check"></i><span>Zgłoszenie spółki w Urzędzie Skarbowym (NIP, VAT, PCC) </span></li>
                                            <li><i class="uil uil-check"></i><span> Wpis w rejestrze CRBR</span></li>
                                            <li><i class="uil uil-check"></i><span> Wirtualne biuro na 3 miesiące* (nieobowiązkowe)</span></li>
                                            <li><i class="uil uil-check"></i><span> Kontakt z doradcą bankowym</span></li>
                                        </ul>
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

            </section>
        </div>
    </section>

    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-10 mb-md-10 align-items-center">
        <div class="col-lg-6 position-relative">
            <div class="shape bg-dot leaf rellax w-17 h-18" data-rellax-speed="1" style="bottom: -2rem; left: -0.7rem;"></div>
            <figure class="rounded"><img src="./assets/img/services/registration_2.jpg" srcset="./assets/img/services/registration_2.jpg 2x" alt="" /></figure>
        </div>
        <!--/column -->
        <div class="col-lg-6 col-xxl-5">
            <h3 class="display-6 mb-7">Może Ci się przydać:</h3>
            <div class="d-flex flex-row mb-5">
                <div>
                    <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
                </div>
                <div>
                    <h4 class="mb-1">Księgowość od 550 zł</h4>
                </div>
            </div>
            <div class="d-flex flex-row mb-5">
                <div>
                    <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">2</span></span>
                </div>
                <div>
                    <h4 class="mb-1">Założenie profilu zaufanego ePUAP – 250 zł</h4>
                </div>
            </div>
            <div class="d-flex flex-row">
                <div>
                    <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">3</span></span>
                </div>
                <div>
                    <h4 class="mb-1">Uzyskanie numeru PESEL – 750 zł</h4>
                </div>
            </div>
        </div>
        <!--/column -->
    </div>


    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <h2 class="display-4 mb-1 text-center">Rodzaje spółek które rejestrujemy</h2>
        <p class="lead text-center mb-10 px-md-16 px-lg-0">Pełne wsparcie w zależności od indywidualnych potrzeb i planów biznesowych.
            Specjalizujemy się w rejestracji:</p>
        <div class="row">
            <div class="col-lg-6 mb-0">
                <div id="accordion-1" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-1" aria-expanded="false" aria-controls="accordion-collapse-1-1">Spółki z ograniczoną odpowiedzialnością (Sp. z o.o.)</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-1" class="collapse" aria-labelledby="accordion-heading-1-1" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Najpopularniejsza forma działalności gospodarczej w Polsce, łącząca
                                    ograniczoną odpowiedzialność wspólników z elastycznością zarządzania.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-2" aria-expanded="false" aria-controls="accordion-collapse-1-2">Spółki akcyjnej (S.A.)</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-2" class="collapse" aria-labelledby="accordion-heading-1-2" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Forma prawna dedykowana większym przedsięwzięciom, umożliwiająca
                                    emisję akcji i pozyskiwanie kapitału na szeroką skalę.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-1-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-1-3" aria-expanded="false" aria-controls="accordion-collapse-1-3">Spółki jawnej</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-1-3" class="collapse" aria-labelledby="accordion-heading-1-3" data-bs-target="#accordion-1">
                            <div class="card-body">
                                <p>Prosta forma spółki osobowej, gdzie wspólnicy odpowiadają całym swoim
                                    majątkiem za zobowiązania spółki.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <div id="accordion-2" class="accordion-wrapper">
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-1" aria-expanded="false" aria-controls="accordion-collapse-2-1">Spółki komandytowej</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-2-1" class="collapse" aria-labelledby="accordion-heading-2-1" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Spółka osobowa, w której co najmniej jeden wspólnik (komandytariusz)
                                    odpowiada za zobowiązania tylko do wysokości wniesionych wkładów, a
                                    drugi (komplementariusz) całym swoim majątkiem.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                    <div class="card accordion-item">
                        <div class="card-header" id="accordion-heading-2-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-2-2" aria-expanded="false" aria-controls="accordion-collapse-2-2">Spółki komandytowo-akcyjnej (S.K.A.)</button>
                        </div>
                        <!-- /.card-header -->
                        <div id="accordion-collapse-2-2" class="collapse" aria-labelledby="accordion-heading-2-2" data-bs-target="#accordion-2">
                            <div class="card-body">
                                <p>Połączenie cech spółki komandytowej i akcyjnej, umożliwiające łączenie zalet
                                    obu tych form.</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.collapse -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.accordion-wrapper -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>

    <div class="col-lg-12 mb-2 mt-2">
        <img src="{{asset('./assets/img/icons/lineal/megaphone.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3">Formy Rejestracji Spółki</h2>
        <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Rejestracja online S24:</b></span>
                        <br>
                        <span class="justify-content-center">
                            <p class="text-success mb-1">ZALETY:</p>
                            Zamiast ponosić koszty związane z wynajmem tradycyjnego biura, korzystaj z wirtualnego biura, co
                            jest znacznie tańsze.
                        </span>
                        <span class="justify-content-center">
                            <p class="text-danger mb-1">WADY:</p>
                            Ograniczenia w dostosowywaniu umowy spółki w systemie S24.
                        </span>
                    </li>
                </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Rejestracja Aktem Notarialnym:</b></span>
                        <br>
                        <span class="justify-content-center">
                            <p class="text-success mb-1">ZALETY:</p>
                            możliwość dostosowania umowy spółki oraz zapisów do potrzeb przedsiębiorstwa.
                        </span>
                        <span class="justify-content-center">
                            <p class="text-danger mb-1">WADY:</p>
                            Dłuższy czas rejestracji 7-30 dni, wyższe koszty: opłata notarialna 600 - 2000 zł, 600 zł opłata sądowa
                        </span>
                    </li>

                </ul>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
@endsection
