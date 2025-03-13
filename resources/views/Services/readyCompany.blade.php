@extends('_layout')

@section('content')

    <section class="wrapper bg-soft-purple p-5" style="border-radius: 10px;">
        <div class="container-fluid px-lg-5 pt-10 pt-md-14 pb-14 pb-md-0">
            <div class="row gx-md-8 gx-lg-12 gy-3 gy-lg-0 mb-13">
                <div class="col-lg-12">
                    <h3 class="display-1 fs-45 lh-xxs mb-4 fw-bold text-purple">
                        Gotowa spółka to najlepsze rozwiązanie, jeśli chcesz szybko rozpocząć prowadzenie swojej działalności.
                    </h3>
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

    <div class="pricing-wrapper position-relative mt-5 mb-12 mb-md-15">
        <div class="row gy-6 mt-3 mt-md-5">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka bez VAT</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1500</span></div>
                        </div>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100">KUP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa spółka z VAT/VAT UE</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2500</span></div>
                        </div>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100">KUP</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                <div class="pricing card text-center w-100 d-flex flex-column">
                    <div class="card-body d-flex flex-column align-items-center text-center flex-grow-1">
                        <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-purple mb-3" alt="" />
                        <h4 class="card-title">Gotowa Spółka z Wirtualnym Biurem (pół roku)</h4>
                        <div class="prices text-dark">
                            <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">3900</span></div>
                        </div>
                        <div class="mt-auto w-100">
                            <a href="#" class="btn btn-primary rounded-pill w-100">KUP</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="tab-content mt-6 mt-lg-8">
        <div class="tab-pane fade show active" id="tab2-1">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6">
                    <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="mb-3 text-purple">Nasze gotowe spółki</h2>
                    <p>Nasze spółki rejestrowane są w systemie S24, zbycia udziałów oraz wszelkich zmian w KRS
                        możemy dokonać w tym systemie lub notarialnie.
                        Nasze wieloletnie doświadczenie pomaga nam pewnie działać w obu systemach sądowych i z
                        sukcesem realizować wnioski nieco łatwiejsze jak i te trudne i skomplikowane.</p>
                    <p>
                        Jedynym założycielem i udziałowcem w gotowych spółkach jest Nobel. Zapewniamy, że
                        założone przez nas spółki nigdy nie prowadziły żadnej działalności gospodarczej, nie
                        posiadają żadnych aktywów, nie zatrudniają osób, ani nie posiadają żadnych zobowiązań.
                    </p>
                    <ul class="icon-list bullet-bg bullet-soft-fuchsia">
                        <li><i class="uil uil-check bg-purple text-white"></i>Adres siedziby w Warszawie</li>
                        <li><i class="uil uil-check bg-purple text-white"></i>Kapitał zakładowy 5000 zł</li>
                        <li><i class="uil uil-check bg-purple text-white"></i>Numer KRS</li>
                        <li><i class="uil uil-check bg-purple text-white"></i>Numer REGON</li>
                        <li><i class="uil uil-check bg-purple text-white"></i>Pełna rejestracja dla celów podatkowych (CIT, VAT/VAT EU)</li>
                        <li><i class="uil uil-check bg-purple text-white"></i>Dostosowujemy dane w KRS, tj. skład zarządu, wspólnicy, nazwa, PKD itp.</li>
                    </ul>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
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
@endsection
