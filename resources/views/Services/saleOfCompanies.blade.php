@extends('_layout')

@section('content')

    <!-- Sekcja tytułowa -->
{{--    <section class="wrapper p-5 bg-light" style="border-radius: 10px;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h1 class="display-3 fw-bold mb-4">--}}
{{--                        <span class="underline-3 style-2 pink" style="font-size: 40px;">--}}
{{--                            Sprzedaż spółek – Bezpieczny Start Twojego Biznesu--}}
{{--                        </span>--}}
{{--                    </h1>--}}
{{--                    <p class="lead fs-lg mx-auto" style="max-width: 900px;">--}}
{{--                        Najlepsze rozwiązanie, jeśli chcesz szybko rozpocząć prowadzenie swojej działalności.--}}
{{--                        Z nami zyskujesz solidne fundamenty dla swojego przedsiębiorstwa.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="wrapper bg-light mt-3">
        <div class="container pt-4 pb-4 text-center">
            <div class="row">
                <div class="col-lg-10 col-xl-7 col-xxl-10 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 fs-50 mb-4 px-md-15 px-lg-0">
                        Sprzedaż spółek Bezpieczny <br>Start<span class="underline-3 style-3 pink"> Twojego Biznesu</span>
                    </h1>
                    <p class="lead fs-22 lh-sm mb-3 mx-md-13 mx-lg-12 justify-content-center" style="font-size: 20px;">
                        Oferujemy gotowe spółki, które możesz uruchomić już pierwszego dnia.
                        <br>
                        Nasze <strong>25-letnie doświadczenie</strong> to gwarancja bezpieczeństwa
                        i profesjonalizmu na każdym etapie transakcji.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sekcja główna -->
    <section class="wrapper bg-light">
        <div class="container py-10 py-md-11">
            <!-- Treść + zdjęcie -->
            <div class="row gx-lg-8 gx-xl-12 gy-6 align-items-center">
                <!-- Listy benefitów -->
                <div class="col-lg-4">

                    <p class="mb-3" style="text-align: justify;">
                        Spółki rejestrowane są w systemie S24, zbycia udziałów oraz wszelkich zmian w KRS możemy
                        dokonać w tym systemie lub notarialnie. Nasze wieloletnie doświadczenie pomaga nam pewnie działać w
                        obu systemach sądowych i z sukcesem realizować wnioski nieco łatwiejsze jak i te trudne i skomplikowane.
                    </p>
                    <div class="mb-4">
                        <h4 class="mb-2" style="font-size: 15px;">Dlaczego warto wybrać spółki od <span class="text-primary">Nobel</span>?</h4>
                        <ul class="icon-list bullet-bg bullet-soft-pink mb-0">
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Nigdy nie prowadziły działalności gospodarczej.</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Nie posiadają żadnych aktywów i zobowiązań.</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Nie zatrudniają osób.</li>
                        </ul>
                    </div>
                    <div class="mb-4">
                        <h4 class="mb-2" style="font-size: 15px;">Każda spółka jest przygotowana do startu i posiada:</h4>
                        <ul class="icon-list bullet-bg bullet-soft-pink mb-0">
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Adres siedziby w Warszawie</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Kapitał zakładowy 5000 zł</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Numery KRS, REGON, NIP / VAT</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Wpis w CRBR</li>
                            <li style="font-size: 15px; margin-bottom: 0.25rem;"><i class="uil uil-check"></i> Rachunek bankowy (na życzenie)</li>
                        </ul>
                    </div>
                </div>

                <!-- Obrazek -->
                <div class="col-lg-8 d-flex align-items-stretch">
                    <figure class="rounded shadow-lg mb-0 w-100">
                        <img src="{{ asset('assets/img/services/soc_1.jpg') }}" alt="Gotowe spółki – Nobel" class="img-fluid rounded w-100 h-100 object-fit-cover">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <div class="pricing-wrapper position-relative mt-5 mb-12 mb-md-15">
        <div class="row gy-6 mt-3 mt-md-5">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-pink mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka bez VAT</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1800</span></div>
                        </div>
                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Spółka z o.o. bez rejestracji VAT</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Sprzedaż udziałów + możliwość zmian (nazwa, siedziba, PKD) w systemie S24 lub notarialnie</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Aktualizacja danych w KRS i CRBR</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres rejestrowy (wirtualne biuro) – 1 miesiąc gratis</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Możliwość dalszego korzystania z adresu po okresie promocyjnym</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Komplet dokumentów (umowa, uchwały, zgłoszenia, PCC)</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Księgowość od 550 zł</span></li>
                        </ul>
                        <p class="text-start"><strong>➡ Dla kogo:</strong> dla firm rozpoczynających działalność bez konieczności rejestracji VAT</p>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100 nobel-contact-button"
                               data-bs-toggle="modal" data-bs-target="#modal-ready-company"
                               data-office="Gotowa spółka bez VAT">KUP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-pink mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka z VAT / VAT-UE</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2500</span></div>
                        </div>
                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Spółka z o.o. z aktywnym numerem VAT i VAT-UE (VIES)</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Sprzedaż udziałów + możliwość zmian (nazwa, siedziba, PKD) w systemie S24 lub notarialnie</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Aktualizacja danych w KRS i CRBR</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres rejestrowy (wirtualne biuro) – 1 miesiąc gratis</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Możliwość dalszego korzystania z adresu po okresie promocyjnym</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Komplet dokumentów (umowa, uchwały, zgłoszenia, PCC)</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Czysta historia – bez zaległości, bez pracowników</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Księgowość od 550 zł</span></li>
                        </ul>
                        <p class="text-start"><strong>➡ Dla kogo:</strong> dla firm gotowych do natychmiastowego działania na rynku krajowym i europejskim</p>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100 nobel-contact-button"
                               data-bs-toggle="modal" data-bs-target="#modal-ready-company"
                               data-office="Gotowa spółka z VAT/VAT UE">KUP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-pink mb-3" alt="" />
                        <h4 class="card-title">Gotowa Spółka sprzedaż w kancelarii notarialnej</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">3900</span></div>
                        </div>
                        <ul class="icon-list bullet-bg bullet-soft-green mt-7 mb-8 text-start">
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Spółka z o.o. z aktywnym numerem VAT i VAT-UE (VIES)</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Sprzedaż udziałów + możliwość zmian (nazwa, siedziba, PKD) już podczas wizyty u notariusza</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Kompleksowa aktualizacja w KRS i CRBR</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Adres rejestrowy (wirtualne biuro) – 3 miesiące gratis</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Możliwość dalszego korzystania z adresu po okresie promocyjnym</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Komplet dokumentów (umowa, uchwały, zgłoszenia, PCC)</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Czysta historia – bez zaległości, bez pracowników</span></li>
                            <li><i class="uil uil-check"></i><span style="font-size: 15px;">Księgowość od 550 zł</span></li>
                        </ul>
                        <p class="text-start"><strong>➡ Dla kogo:</strong> dla wymagających klientów, oczekujących formalnej i prestiżowej transakcji, gotowości operacyjnej i dłuższego okresu rejestracji</p>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100 nobel-contact-button"
                               data-bs-toggle="modal" data-bs-target="#modal-ready-company"
                               data-office="Gotowa Spółka z adresem">KUP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-start" style="margin-left: 170px;">
                <small class="text-start d-inline-block">
                    Cena nie zawiera<br>
                    - opłata sądowa KRS 300 / 350 zł<br>
                    - Opłata notarialna<br>
                    - podatek PCC3 (0,5% wartości kapitału) tj. 23 zł przy kapitale 5000 zł
                </small>
            </div>
        </div>

    </div>

    <div class="tab-content mt-6 mt-lg-8">
        <div class="tab-pane fade show active" id="tab2-1">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6">
                    <figure class="rounded shadow-lg"><img src="{{ asset('assets/img/services/soc_2.jpg') }}" srcset="{{ asset('assets/img/services/soc_2.jpg') }}" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-4 mb-4">
                        Chcesz rozpocząć działalność bez zbędnych formalności i opóźnień?
                    </h2>
                    <p class="justify-content-center" style="text-align: justify;">
                        Sprzedaż spółek oraz przeniesienie udziałów realizujemy zarówno w systemie S24, jak i w formie notarialnej. Dzięki naszemu doświadczeniu w obrocie gotowymi spółkami, przeprowadzamy cały proces sprawnie i bezpiecznie, zapewniając wsparcie przy formalnościach, niezależnie czy sprawa jest prosta, czy wymaga bardziej skomplikowanych działań.
                    </p>
                    <div>
                        <h4 class="mb-3" style="font-size: 15px;">Jakie korzyści zyskujesz?</h4>
                        <ul class="icon-list bullet-bg bullet-soft-pink">
                            <li style="font-size: 15px;"><i class="uil uil-check"></i> <strong>Szybki start</strong> – działasz już pierwszego dnia.</li>
                            <li style="font-size: 15px;"><i class="uil uil-check"></i> <strong>Bezpieczeństwo</strong> – sprawna transakcja bez ryzyka.</li>
                            <li style="font-size: 15px;"><i class="uil uil-check"></i> <strong>Wygoda i oszczędność czasu</strong> – formalności po naszej stronie.</li>
                        </ul>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <div class="row mt-10">
            <div class="col-lg-8 mx-auto text-center">
                <p class="lead fw-bold mb-5" style="font-size: 20px; !important;">
                    Z nami zyskujesz solidne fundamenty dla swojego przedsiębiorstwa. Skontaktuj się z
                    nami i rozpocznij działalność już dziś!
                </p>
                {{--                    <a href="#kontakt" class="btn btn-primary btn-lg rounded-pill">Skontaktuj się z nami</a>--}}
            </div>
        </div>

        <!--/.tab-pane -->
        <div class="tab-pane fade" id="tab2-2">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <figure class="rounded shadow-lg"><img src="./assets/img/photos/se6.jpg" srcset="./assets/img/photos/se6@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="mb-3">Data Analysis</h2>
                    <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                    <ul class="icon-list bullet-bg bullet-soft-violet">
                        <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                        <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                        <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                    </ul>
                    <a href="#" class="btn btn-violet mt-2">Learn More</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!--/.tab-pane -->
        <div class="tab-pane fade" id="tab2-3">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6">
                    <figure class="rounded shadow-lg"><img src="./assets/img/photos/se7.jpg" srcset="./assets/img/photos/se7@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="mb-3">Finalize Product</h2>
                    <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                    <ul class="icon-list bullet-bg bullet-soft-green">
                        <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                        <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                        <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                    </ul>
                    <a href="#" class="btn btn-green mt-2">Learn More</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!--/.tab-pane -->
    </div>

    <hr class="bg-grape border-2 border-top border-pink"/>

    <div class="mt-4">
        @include('qa.display', ['section' => 'readyCompany', 'title' => 'Q&A'])
    </div>

    @include('Services.modal._readyCompanyModal')
@endsection
