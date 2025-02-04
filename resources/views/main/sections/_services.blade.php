<section class="wrapper bg-light mt-1">
    <div class="container py-14 py-md-16">
        <div class="pricing-wrapper position-relative mt-n22 mt-md-n25">
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <div class="row gx-3 gy-6 mt-3 mt-md-5 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                    <div class="pricing card shadow-xl text-center h-100 w-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
{{--                            mozna by zrobic te z demo11 --}}
                            <div class="mb-auto">
                                <img src="{{asset('/assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">GOTOWE SPÓŁKI</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">OD</span><span class="price-value">1000</span> <span class="price-duration">PLN</span></div>
                                </div>
                                <p class="mt-4">pozwala na natychmiastowe rozpoczęcie działalności gospodarczej bez zbędnych formalności</p>
                            </div>
                            <a href="{{route('service.route.dispatch', ['service' => 'gotowe-spolki'])}}" class="btn btn-primary rounded mt-4">Poznaj ofertę</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                    <div class="pricing card shadow-xl text-center h-100 w-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-auto">
                                <img src="{{asset('/assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">WIRTUALNE BIURO</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">OD</span><span class="price-value">100</span> <span class="price-duration">PLN</span></div>
                                </div>
                                <p class="mt-4">Adres osobisty lub dla Twojej firmy z profesjonalnym wsparciem administracyjnym.</p>
                            </div>
                            <a href="{{route('service.route.dispatch', ['service' => 'wirtualne-biuro'])}}" class="btn btn-primary rounded mt-4">Poznaj ofertę</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                    <div class="pricing card shadow-xl text-center h-100 w-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-auto">
                                <img src="{{asset('/assets/img/icons/lineal/handshake.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">REJESTRACJA SPÓŁKI</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">OD</span><span class="price-value">690</span> <span class="price-duration">PLN</span></div>
                                </div>
                                <p class="mt-4">profesjonalne wsparcie, aby proces był szybki i bezproblemowy.</p>
                            </div>
                            <a href="{{route('service.route.dispatch', ['service' => 'rejestracja-spolki'])}}" class="btn btn-primary rounded mt-4">Poznaj ofertę</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                    <div class="pricing card shadow-xl text-center h-100 w-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-auto">
                                <img src="{{asset('/assets/img/icons/lineal/calculator.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">GOTOWE BIURO</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">OD</span><span class="price-value">750</span> <span class="price-duration">PLN</span></div>
                                </div>
                                <p class="mt-4">w pełni wyposażona, elastyczna przestrzeń, oferująca komfort i kompleksowe wsparcie.</p>
                            </div>
                            <a href="{{route('service.route.dispatch', ['service' => 'gotowe-biura'])}}" class="btn btn-primary rounded mt-4">Poznaj ofertę</a>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-4 d-flex mb-4 mb-lg-0">
                    <div class="pricing card shadow-xl text-center h-100 w-100 d-flex flex-column">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-auto">
                                <img src="{{asset('/assets/img/icons/lineal/calculator.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">ZMIANY W KRS</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">OD OK</span><span class="price-value">500</span> <span class="price-duration">PLN</span></div>
                                </div>
                                <p class="mt-4">wieloletnie doświadczenie z zakresu dokonywania wpisów w KRS</p>
                            </div>
                            <a href="{{route('service.route.dispatch', ['service' => 'zmiany-krs'])}}" class="btn btn-primary rounded mt-4">Poznaj ofertę</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
