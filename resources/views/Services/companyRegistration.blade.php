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
                        <div class="pricing-switcher-wrapper switcher">
                            <p class="mb-0 pe-3">Monthly</p>
                            <div class="pricing-switchers">
                                <div class="pricing-switcher pricing-switcher-active"></div>
                                <div class="pricing-switcher"></div>
                                <div class="switcher-button bg-primary"></div>
                            </div>
                            <p class="mb-0 ps-3">Yearly</p>
                        </div>
                        <div class="row gy-6 mt-3 mt-md-5">
                            <div class="col-md-6 col-lg-4">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Basic Plan</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">9</span> <span class="price-duration">mo</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span><strong>1</strong> Project </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>100MB</strong> Storage </span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> Weekly <strong>Reports</strong> </span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 col-lg-4 popular">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Premium Plan</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">19</span> <span class="price-duration">mo</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span><strong>5</strong> Projects </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>100K</strong> API Access </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>200MB</strong> Storage </span></li>
                                            <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                            <li><i class="uil uil-times bullet-soft-red"></i><span> 7/24 <strong>Support</strong></span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
                                <div class="pricing card text-center">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                        <h4 class="card-title">Corporate Plan</h4>
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                            <li><i class="uil uil-check"></i><span><strong>20</strong> Projects </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>300K</strong> API Access </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>500MB</strong> Storage </span></li>
                                            <li><i class="uil uil-check"></i><span> Weekly <strong>Reports</strong></span></li>
                                            <li><i class="uil uil-check"></i><span> 7/24 <strong>Support</strong></span></li>
                                        </ul>
                                        <a href="#" class="btn btn-primary rounded-pill">Choose Plan</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                {{--    /PRICE    --}}
            </section>
        </div>
    </section>

    {{--  OFFICES CARDS  --}}
    @include('Services.components.localsCards')
    {{--  /OFFICES CARDS  --}}

    <div class="col-lg-12 mb-2 mt-2">
        <img src="{{asset('./assets/img/icons/lineal/megaphone.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
        <h2 class="display-4 mb-3">Usługa biuro wirtualne to:</h2>
        <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Obniżenie kosztów:</b></span>
                        <br>
                        <span class="justify-content-center">
                            Zamiast ponosić koszty związane z wynajmem tradycyjnego biura, korzystaj z wirtualnego biura, co
                            jest znacznie tańsze.
                        </span>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Elastyczność:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Ty i Twoi współpracownicy możecie pracować z dowolnego miejsca w świecie, co ułatwia zarządzanie
                            czasem i pozwala na dostosowanie się do zmieniających potrzeb biznesowych.
                        </div>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Bezpieczeństwo:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Wykorzystaj adres rejestrowy dla siedziby swojej firmy, który będzie wykorzystywany na fakturach i
                            wszelkich innych dokumentach firmowych, zamiast rejestracji firmy pod adresem domowym.
                        </div>
                    </li>
                </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Profesjonalny wizerunek:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Korzystanie z usług wirtualnego biura pozwala firmie zachować profesjonalny wizerunek, nawet jeśli
                            nie ma ona fizycznej siedziby. Biznesowy adres rejestrowy siedziby Twojej firmy znajdujący się w
                            największym mieście w Polsce, obsługa korespondencji, możliwość posiadania numeru telefonu
                            firmowego stacjonarnego oraz korzystanie z sal konferencyjnych wzmocnią zaufanie Twoich
                            klientów.
                        </div>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Skupienie się na działalności biznesowej:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Outsorsuj wykonywanie codziennych zadań biurowych i skup się na istotnych aspektach prowadzenia
                            firmy.
                        </div>
                    </li>
                </ul>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
@endsection
