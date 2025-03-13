@extends('_layout')

@section('content')

    <section class="wrapper bg-soft-purple p-5" style="border-radius: 10px;">
        <div class="container-fluid px-lg-5 pt-10 pt-md-14 pb-14 pb-md-0">
            <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
                <div class="col-lg-12">
                    <h1 class="display-1 fs-66 lh-xxs mb-4 fw-bold text-purple">
                        Gotowa spółka to najlepsze rozwiązanie, jeśli chcesz szybko rozpocząć prowadzenie swojej działalności.
                    </h1>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fs-30 fw-bold text-purple">Co zyskujesz?</h2>
                    <ul class="fs-20 mt-3">
                        <li><strong class="text-purple">Start biznesu w dniu zakupu</strong> – od dnia zakupu spółki z aktywnym VAT wystawiasz faktury VAT i podpisujesz umowy w imieniu spółki.</li>
                        <li><strong class="text-purple">Bezpieczeństwo</strong> – gotowa spółka bez historii nie prowadziła wcześniej działalności gospodarczej, przez co masz pewność, że nie jest zadłużona.</li>
                        <li><strong class="text-purple">Gotowe dokumenty</strong> – otrzymujesz wszystkie numery rejestrowe niezbędne do rozpoczęcia działania tj.: KRS, NIP, REGON, aktywny rachunek bankowy lub EORI, jeżeli tego wymagasz.</li>
                        <li><strong class="text-purple">Oszczędność czasu</strong> – gotową spółkę otrzymasz za pośrednictwem notariusza lub systemu S24 tj. podpisem elektronicznym, bez wychodzenia z domu.</li>
                        <li><strong class="text-purple">Gotowe konto bankowe</strong>* dla nabywanej spółki.</li>
                        <li><strong class="text-purple">Adres rejestrowy</strong> siedziby spółki w tzw. Wirtualnym Biurze.</li>
                    </ul>
                </div>

                <div class="col-lg-6">
                    <figure class="rounded mb-md-5">
                        <img src="./assets/img/photos/about18.jpg" srcset="./assets/img/photos/about18@2x.jpg 2x" alt="" class="img-fluid"/>
                    </figure>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="pricing-wrapper position-relative mt-5 mb-12 mb-md-15"> <!-- Zmieniono mt-n18 na mt-5 -->
        <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
        <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>

        <div class="row gy-6 mt-3 mt-md-5">
            <div class="col-md-6 col-lg-4">
                <div class="pricing card text-center">
                    <div class="card-body">
                        <img src="./assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka bez VAT</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1500</span> <span class="price-duration">mc</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">1500</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">KUP</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.pricing -->
            </div>
            <!--/column -->

            <!-- Zmieniony środkowy element na długi -->
            <div class="col-md-6 col-lg-4 popular">
                <div class="pricing card text-center">
                    <div class="card-body">
                        <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka z VAT/VAT UE</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2500</span> <span class="price-duration">mc</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">KUP</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.pricing -->
            </div>
            <!--/column -->

            <!-- Trzeci element, który ma być krótki -->
            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 mt-10">
                <div class="pricing card text-center">
                    <div class="card-body">
                        <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa Spółka z Wirtualnym Biurem (pół roku)</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">3900</span> <span class="price-duration">mc</span></div>
                            <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                        </div>
                        <!--/.prices -->
                        <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                        </ul>
                        <a href="#" class="btn btn-primary rounded-pill">Kup</a>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.pricing -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>

@endsection
