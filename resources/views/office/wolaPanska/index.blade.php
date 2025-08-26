@extends('_layout')

@section('content')
    @include('Services.modal._officesModal')

    @include('office._returnButton', ['color' => 'blue', 'title' => _getOfficeTitle($mainMenu)])

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
                                            <h2 class="underline-3 style-2 blue">
                                                Wola Pańska 96
                                            </h2>
                                            <p class="text-muted">
                                                rozwijaj swój biznes w najlepszym otoczeniu
                                            </p>
                                            <div class="mb-3">
                                                @if ($mainMenu === 'offices')
                                                    <h3 class="text-blue">od 2 000 PLN</h3>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                                @if ($mainMenu === 'virtualOffices')
                                                <p style="text-align: justify">
                                                    Zarejestruj swoją firmę w jednym z najbardziej dynamicznych miejsc w Warszawie.
                                                    Pańska 96 to prestiżowy adres w sąsiedztwie ulic Towarowej, Prostej, alei Jana
                                                    Pawła II oraz Alej Jerozolimskich, a także zrewitalizowanej Fabryki Norblina.
                                                </p>

                                                    <ul class="icon-list bullet-bg bullet-soft-blue" style="font-size: 15px;">
                                                        <li><i class="uil uil-check"></i><b>Prestiżowy adres w centrum Warszawy</b> – idealny dla budowania wizerunku Twojej firmy.</li>
                                                        <li><i class="uil uil-check"></i><b>Elastyczne możliwości pracy</b> – skorzystaj z coworkingu lub w pełni umeblowanych gabinetów gotowych do pracy od zaraz.</li>
                                                        <li><i class="uil uil-check"></i><b>Bliskość kluczowych punktów Warszawy</b> – łatwy dostęp do komunikacji miejskiej, restauracji i usług.</li>
                                                    </ul>
                                                @else
                                                <p style="text-align: justify">
                                                    <b>Nowoczesne biura</b> w sercu stołecznego biznesu — ponad <b>600 m²</b> gotowej do
                                                    pracy przestrzeni, złożonej z <b>25 umeblowanych gabinetów.</b>
                                                    Biuro znajduje się na <b>7. piętrze</b>, z widokiem na <b>Fabrykę Norblina.</b>
                                                    Doskonała lokalizacja, <b>blisko drugiej linii metra</b>
                                                    <br><br>
                                                    Elastyczne opcje: możliwość skorzystania z usługi <a href="{{route('virtual.office.route.dispatch', ['office' => 'wola-panska-96'])}}" class="text-blue"><b>Wirtualne Biuro</b></a>.
                                                </p>
                                            @endif
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/panska/biuro_85.5.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.5.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" alt="" /></a>
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

            @if ($mainMenu === 'offices')
                <hr class="bg-violet border-2 border-top border-blue"/>

                <div class="row text-center gy-6 gx-lg-8 justify-content-center">

                    <!-- O lokalizacji -->
                    <div class="col-lg-4">
                        <div class="px-3">
                            <i class="uil uil-map-marker icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                            <h4 class="fw-bold mb-4">O lokalizacji</h4>
                            <ul class="icon-list bullet-bg bullet-soft-primary text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                                <li><i class="uil uil-check"></i>Powierzchnia: 600 m² – ponad 25 niezależnych gabinetów</li>
                                <li><i class="uil uil-check"></i>Układ pomieszczeń: elastyczny – gabinety dla 1–5 osób, open space, sala konferencyjna</li>
                                <li><i class="uil uil-check"></i>Wykończenie: wysoki standard, biurowe</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Dodatkowe udogodnienia -->
                    <div class="col-lg-4">
                        <div class="px-3">
                            <i class="uil uil-wrench icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                            <h4 class="fw-bold mb-4">Dodatkowe udogodnienia</h4>
                            <ul class="icon-list bullet-bg bullet-soft-purple text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                                <li><i class="uil uil-check"></i>Obsługa administracyjna – odbiór korespondencji, wsparcie sali konferencyjnej</li>
                                <li><i class="uil uil-check"></i>Miejsca parkingowe – dostępne w garażu podziemnym</li>
                                <li><i class="uil uil-check"></i>Bezpieczeństwo – recepcja, monitoring, ochrona 24/7</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Korzyści dla najemcy -->
                    <div class="col-lg-4">
                        <div class="px-3">
                            <i class="uil uil-briefcase icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                            <h4 class="fw-bold mb-4">Korzyści dla najemcy</h4>
                            <ul class="icon-list bullet-bg bullet-soft-success text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                                <li><i class="uil uil-check"></i>Lokalizacja – centrum biznesowe między Rondem ONZ a Rondem Daszyńskiego, przy Fabryce Norblina</li>
                                <li><i class="uil uil-check"></i>Komunikacja – II linia metra, tramwaje, autobusy</li>
                                <li><i class="uil uil-check"></i>Komfort pracy – klimatyzacja, szybki internet symetryczny, sala konferencyjna, strefa kuchenna, serwis sprzątający</li>
                            </ul>
                        </div>
                    </div>

                </div>

                <hr class="bg-violet border-2 border-top border-blue"/>
            @endif

        @if ($mainMenu === 'virtualOffices')
                @include('Services.components.virtualOfficePricing')
            @endif

            <div class="container-fluid px-md-6 mt-5">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100 d-block" style="height: 450px; border:0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.6695469542087!2d20.987567477011957!3d52.231221257569345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd26a2eec497%3A0x3da47fbd25c82089!2sNobel!5e0!3m2!1spl!2spl!4v1756196428953!5m2!1spl!2spl"
                                allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>


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
