<section class="wrapper bg-light">
    <div class="container pb-15 pb-md-17">
        <div class="row gx-md-5 gy-5 mt-n22 justify-content-center">
            <!-- GOTOWE BIURO -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-key fs-40 text-green"></i>
                        </div>
                        <h4>BIURA</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            W pełni wyposażona, elastyczna przestrzeń, oferująca komfort i kompleksowe wsparcie.
                        </p>
                        <a href="{{route('service.route.dispatch', ['service' => 'gotowe-biura'])}}" class="more hover link-green mt-auto">Poznaj ofertę</a>
                    </div>
                </div>
            </div>
            <!-- COWORKING -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-people fs-40 text-aqua"></i>
                        </div>
                        <h4>COWORKING</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            Komfortowa i funkcjonalna przestrzeń, wspierająca współpracę i rozwój zawodowy.
                        </p>
                        <a href="{{ route('service.route.dispatch', ['service' => 'coworking']) }}" class="more hover link-aqua mt-auto">Poznaj ofertę</a>
                    </div>
                </div>
            </div>
            <!-- WIRTUALNE BIURO -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt fs-40 text-grape"></i>
                        </div>
                        <h4>WIRTUALNE BIURO</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            Adres osobisty lub dla Twojej firmy z profesjonalnym wsparciem administracyjnym.
                        </p>
                        <a href="{{route('service.route.dispatch', ['service' => 'wirtualne-biuro'])}}" class="more hover link-grape mt-auto">Poznaj ofertę</a>
                    </div>
                </div>
            </div>
            <!-- ZMIANY W KRS -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-hourglass fs-40 text-yellow"></i>
                        </div>
                        <h4>ZMIANY W KRS</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            Wieloletnie doświadczenie z zakresu dokonywania wpisów w KRS.
                        </p>
                        <a href="{{route('service.route.dispatch', ['service' => 'zmiany-krs'])}}" class="more hover link-yellow mt-auto">Poznaj ofertę</a>
                    </div>
                </div>
            </div>
            <!-- REJESTRACJA SPÓŁKI -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-display fs-40 text-orange"></i>
                        </div>
                        <h4>REJESTRACJA SPÓŁEK</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            Profesjonalne wsparcie, aby proces był szybki i bezproblemowy.
                        </p>
                        <a href="{{route('service.route.dispatch', ['service' => 'rejestracja-spolki'])}}" class="more hover link-orange mt-auto">Poznaj ofertę</a>
                    </div>
                </div>
            </div>
            <!-- SPRZEDAŻ SPÓŁEK -->
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card shadow-lg h-100">
                    <div class="card-body text-center d-flex flex-column align-items-center">
                        <div class="mb-3">
                            <i class="bi bi-inboxes fs-40 text-pink"></i>
                        </div>
                        <h4>SPRZEDAŻ SPÓŁEK</h4>
                        <p class="mb-2 flex-grow-1 text-center">
                            Natychmiastowe rozpoczęcie działalności gospodarczej bez zbędnych formalności.
                        </p>
                        <a href="{{route('service.route.dispatch', ['service' => 'sprzedaz-spolek'])}}" class="more hover mt-auto text-pink">Poznaj ofertę</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
