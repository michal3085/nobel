@extends('_layout')

@section('content')
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
                                            <div class="post-category text-blue mb-3">Lokalizacja</div>
                                            <h2 class="underline-3 style-2 bluew">WOLA PAŃSKA 96</h2>
                                            <div class="mb-3">
                                                <h3 class="text-blue">2500 PLN</h3>
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
                                                Niedalekie sąsiedztwo dwóch linii metra, linii tramwajowych oraz bliskość przystanków autobusowych ułatwią dojazd do pracy, bez konieczności szukania miejsca parkingowego w centrum miasta.</p>
                                            @endif
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
