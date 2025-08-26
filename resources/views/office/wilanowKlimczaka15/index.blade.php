@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'purple', 'title' => _getOfficeTitle($mainMenu)])

    <section class="wrapper bg-light">

        <div class="container py-5">
            <div class="row mt-6">
                <div class="col-xl-12 mx-auto">
                    <div class="projects-tiles">
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-purple mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 purple">Wilanów Klimczaka 15</h2>
                                            <p class="text-muted">
                                                @switch($mainMenu)
                                                    @case('virtualOffices')
                                                        Wirtualne biuro w sercu Miasteczka Wilanów.
                                                        @break

                                                    @case('offices')
                                                        Elastyczna przestrzeń do pracy w sercu Miasteczka Wilanów.
                                                        @break
                                                @endswitch
                                            </p>
                                            <div class="mb-3">
                                                @if ($mainMenu !== 'virtualOffices')
                                                    <h3 class="text-purple">od 2 000 PLN</h3>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                @if ($mainMenu === 'virtualOffices')
                                                    Zarejestruj swoją firmę w jednej z najbardziej prestiżowych lokalizacji w Miasteczku
                                                    Wilanów, u zbiegu alei Rzeczypospolitej i Klimczaka. Klimczaka 15 to także <b>elastyczna przestrzeń <a href="{{route('coworking.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">coworking</a> oraz gotowe do natychmiastowego
                                                    rozpoczęcia pracy gabinety – <a href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">biura.</a></b>
                                                @else
                                                    Przestrzeń biurowa zlokalizowana u zbiegu alei Rzeczypospolitej i ulicy Klimczaka to
                                                    <b>elastyczne i atrakcyjne cenowo</b> miejsca do pracy blisko miejsca zamieszkania.
                                                    <b>Gabinety i coworking</b> to przestrzenie dopasowane do potrzeb zarówno freelancerów, jak i
                                                    mniejszych zespołów.
                                                    <b>Bliskość miejsca zamieszkania</b> to idealne rozwiązanie dla osób i firm z okolicy
                                                    ceniących czas i wygodę.
                                                <br><br>
                                                    Elastyczne opcje: usługa <a href="{{route('coworking.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}" class="text-purple"><b>Coworking</b></a> oraz <a href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}" class="text-purple"><b>Wirtualne Biuro</b></a>.
                                                @endif
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-purple rounded-pill me-2 nobel-contact-button"
                                                       data-office="KLIMCZAKA 15 WILANÓW"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#modal-offices"
                                                    >
                                                        Zapytaj o dostępność
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.projects-tiles -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>

        @if ($mainMenu === 'offices')
            <hr class="bg-violet border-2 border-top border-purple"/>

            <div class="row text-center gy-6 gx-lg-8 justify-content-center">

                <!-- O lokalizacji -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-map-marker icon-svg-md text-purple mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">O lokalizacji</h4>
                        <ul class="icon-list bullet-bg bullet-soft-purple text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Powierzchnia – 4 gabinety + coworking (kilkanaście stanowisk)</li>
                            <li><i class="uil uil-check"></i>Układ pomieszczeń – elastyczny: gabinetowe i coworking</li>
                            <li><i class="uil uil-check"></i>Wykończenie – nowoczesne, biurowe</li>
                        </ul>
                    </div>
                </div>

                <!-- Dodatkowe udogodnienia -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-wrench icon-svg-md text-purple mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Dodatkowe udogodnienia</h4>
                        <ul class="icon-list bullet-bg bullet-soft-purple text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Elastyczność – możliwość powiększenia biura</li>
                            <li><i class="uil uil-check"></i>Parking – garaż podziemny</li>
                            <li><i class="uil uil-check"></i>Bezpieczeństwo – monitoring, ochrona 24/7</li>
                        </ul>
                    </div>
                </div>

                <!-- Korzyści dla najemcy -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-briefcase icon-svg-md text-purple mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Korzyści dla najemcy</h4>
                        <ul class="icon-list bullet-bg bullet-soft-purple text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Lokalizacja – 100 m do tramwaju, w budynku kawiarnie i restauracje</li>
                            <li><i class="uil uil-check"></i>Komunikacja – autobus, tramwaj, rower, hulajnoga, pieszo</li>
                            <li><i class="uil uil-check"></i>Komfort pracy – klimatyzacja, szybki internet symetryczny, strefa kuchenna dla najemców, serwis sprzątający</li>
                        </ul>
                    </div>
                </div>

            </div>

            <hr class="bg-violet border-2 border-top border-purple"/>
        @endif


    @if ($mainMenu === 'virtualOffices')
                @include('Services.components.virtualOfficePricing')
            @endif

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.6083799687517!2d21.071689844278474!3d52.15963136611365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d5d3500fdcb%3A0xe24d39a432c49fd3!2sKlimczaka%2015%2C%2002-797%20Warszawa!5e0!3m2!1spl!2spl!4v1740766816197!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    @include('Services.modal._officesModal')
@endsection
