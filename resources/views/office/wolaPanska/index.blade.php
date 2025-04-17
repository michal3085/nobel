@extends('_layout')

@section('content')
    @include('Services.modal._officesModal')
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
                                            <div class="post-category text-blue mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 blue">WOLA PAŃSKA 96</h2>
                                            <div class="mb-3">
                                                <h3 class="text-blue">od 2500 PLN</h3>
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                @if ($mainMenu === 'virtualOffices')
                                                    Wirtualne biuro na Woli to doskonałe rozwiązanie jeżeli chcesz być w samym centrum biznesowym stolicy, które obecnie znajduje się w obrębie ulic: Towarowa, Prosta, aleja Jana Pawła II i Aleje Jerozolimskie.
                                                    Widok na zrewitalizowaną, zabytkową Fabrykę Norblina, w której poza licznymi restauracjami i kawiarniami,znajdują się także kino, muzea i sale zabaw.
                                                    500 m2 powierzchni biurowej
                                                @else
                                                Marzysz o wygodnym biurze w doskonałej lokalizacji? Cenisz sobie doskonały dojazd do miejsca pracy? Gotowe Biuro przy Pańskiej 96 spełni Twoje wszelkie oczekiwania.
                                                Pańska 96 to ponad 20 w pełni umeblowanych gabinetów. Biura gotowe do wprowadzenia się ,,od zaraz” zlokalizowane w topowej lokalizacji przy ul. Pańskiej 96, naprzeciwko kultowej Fabryki Norblina.
                                                Niedalekie sąsiedztwo dwóch linii metra, linii tramwajowych oraz bliskość przystanków autobusowych ułatwią dojazd do pracy, bez konieczności szukania miejsca parkingowego w centrum miasta.
                                            @endif
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-blue rounded-pill me-2 nobel-contact-button"
                                                       data-office="PAŃSKA 96 WOLA"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#modal-offices">
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
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Purus Tellus Magna</h5>'><a href="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Ipsum Vestibulum</h5>'><a href="{{asset('assets/img/offices/panska/biuro_85.5.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.5.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Condimentum Parturient Ligula</h5>'><a href="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" alt="" /></a>
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
            <br>
            <div class="container-fluid px-md-6 mt-5">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100 d-block" style="height: 450px; border:0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.6570268370738!2d20.986935881143296!3d52.23144870522943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8545107441%3A0x511d6b9251ccf73!2sPa%C5%84ska%2096%2C%2000-837%20Warszawa!5e0!3m2!1spl!2spl!4v1742920503337!5m2!1spl!2spl"
                                allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>

        @if ($mainMenu === 'virtualOffices')
            @include('Services.components.virtualOfficePricing')
        @endif


            <!--/.tab-pane -->
{{--            <div class="tab-pane fade" id="tab3-2">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>--}}
{{--                    <p class="mb-6">Wirtualne biuro na Woli to doskonałe rozwiązanie jeżeli chcesz być w samym centrum biznesowym stolicy, które obecnie znajduje się w obrębie ulic: Towarowa, Prosta, aleja Jana Pawła II i Aleje Jerozolimskie.--}}
{{--                        Widok na zrewitalizowaną, zabytkową Fabrykę Norblina, w której poza licznymi restauracjami i kawiarniami,znajdują się także kino, muzea i sale zabaw.--}}
{{--                        500 m2 powierzchni biurowej--}}
{{--                    </p>--}}
{{--                    <!--/.row -->--}}
{{--                </div>--}}
{{--            </div>--}}
            <!--/.tab-pane -->
    </section>
@endsection
