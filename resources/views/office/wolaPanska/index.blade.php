@extends('_layout')

@section('content')
    @include('Services.modal._officesModal')

    @include('office._returnButton', ['color' => 'blue', 'title' => _getOfficeTitle($mainMenu)])
    <style>
        .image-wrapper {
            width: 100vw; /* Pełna szerokość widoku */
            margin-left: calc(-50vw + 50%); /* Centrowanie sekcji */
            margin-right: calc(-50vw + 50%); /* Centrowanie sekcji */
        }
    </style>

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
                                                Centrum Pańska 96
                                            </h2>
                                            <p class="text-muted">
                                                rozwijaj swój biznes w najlepszym otoczeniu.
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

                                                Elastyczne opcje: usługa <a href="{{route('coworking.office.route.dispatch', ['office' => 'wola-panska-96'])}}" class="text-blue"><b>Coworking</b></a> oraz <a href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}" class="text-blue"><b>Biuro</b></a>.
                                                <br><br>
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
                                        @if ($mainMenu === 'virtualOffices')
                                            <figure class="itooltip itooltip-light hover-scale rounded">
                                                <a href="{{asset('assets/img/offices/panska/p_new_1.jpg')}}}"
                                                   data-glightbox="title: Centrum Pańska 96"
                                                   data-gallery="project-2">
                                                    <img
                                                        src="{{ asset('assets/img/offices/panska/p_new_1_600.jpg') }}"
                                                        srcset="
                                                  {{ asset('assets/img/offices/panska/p_new_1_600.jpg') }} 600w,
                                                  {{ asset('assets/img/offices/panska/p_new_1_1200.jpg') }} 1200w
                                                "
                                                        sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                        alt="Biuro Oxford Tower"
                                                        loading="lazy" />
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="itooltip itooltip-light hover-scale rounded">
                                                <a href="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}}"
                                                   data-glightbox="title: Centrum Pańska 96"
                                                   data-gallery="project-2">
                                                    <img
                                                        src="{{ asset('assets/img/offices/panska/biuro_85.4_600.jpg') }}"
                                                        srcset=
                                                            "
                                                              {{ asset('assets/img/offices/panska/biuro_85.4_600.jpg') }} 600w,
                                                              {{ asset('assets/img/offices/panska/biuro_85.4_1200.jpg') }} 1200w
                                                            "
                                                        sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                        alt="Biuro Oxford Tower"
                                                        loading="lazy" />
                                                </a>
                                            </figure>
                                        @endif
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        @if ($mainMenu === 'virtualOffices')
                                            <figure class="itooltip itooltip-light hover-scale rounded">
                                                <a href="{{asset('assets/img/offices/panska/WB/p_new_2.jpg')}}}"
                                                   data-glightbox="title: Centrum Pańska 96"
                                                   data-gallery="project-2">
                                                    <img
                                                        src="{{ asset('assets/img/offices/panska/WB/p_new_2_600.jpg') }}"
                                                        srcset=
                                                            "
                                                              {{ asset('assets/img/offices/panska/WB/p_new_2_600.jpg') }} 600w,
                                                              {{ asset('assets/img/offices/panska/WB/p_new_2_1200.jpg') }} 1200w
                                                            "
                                                        sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                        alt="Biuro Oxford Tower"
                                                        loading="lazy" />
                                                </a>
                                            </figure>
                                        @else
                                            <figure class="itooltip itooltip-light hover-scale rounded">
                                                <a href="{{asset('assets/img/offices/panska/panska1.jpg')}}}"
                                                   data-glightbox="title: Centrum Pańska 96"
                                                   data-gallery="project-2">
                                                    <img
                                                        src="{{ asset('assets/img/offices/panska/panska1_600.jpg') }}"
                                                        srcset=
                                                            "
                                                              {{ asset('assets/img/offices/panska/panska1_600.jpg') }} 600w,
                                                              {{ asset('assets/img/offices/panska/panska1_1200.jpg') }} 1200w
                                                            "
                                                        sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                        alt="Biuro Oxford Tower"
                                                        loading="lazy" />
                                                </a>
                                            </figure>
                                        @endif
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        @if ($mainMenu === 'virtualOffices')
                                            <a href="{{asset('assets/img/offices/panska/WB/p_new_3.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/WB/p_new_3.jpg')}}" alt="" /></a>
                                        @else
                                            <a href="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" alt="" /></a>
                                        @endif
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

                <div class="row gx-md-8 gx-xl-12 gy-10">
                    <h2>O lokalizacji</h2>

                    <!-- Powierzchnia -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5"><i class="uil uil-map-marker"></i></span>
                            </div>
                            <div>
                                <h4>Powierzchnia</h4>
                                <p class="mb-0">600 m² – ponad 25 niezależnych gabinetów</p>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->

                    <!-- Układ pomieszczeń -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5"><i class="uil uil-wrench"></i></span>
                            </div>
                            <div>
                                <h4>Układ pomieszczeń</h4>
                                <p class="mb-0">Elastyczny – gabinety dla 1–5 osób, open space, sala konferencyjna</p>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->

                    <!-- Wykończenie -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5"><i class="uil uil-briefcase"></i></span>
                            </div>
                            <div>
                                <h4>Wykończenie</h4>
                                <p class="mb-0">Wysoki standard, biurowe</p>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->

                    <!-- Wyposażenie -->
                    <div class="col-lg-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5"><i class="uil uil-cog"></i></span>
                            </div>
                            <div>
                                <h4>Wyposażenie</h4>
                                <p class="mb-0">Klimatyzacja, szybki internet symetryczny, sala konferencyjna, strefa kuchenna, serwis sprzątający</p>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>

                <hr>

                <div class="row mt-7 mb-5">
                    <!-- Dodatkowe udogodnienia -->
                    <div class="col-lg-6">
                        <h3 class="display-4 mb-7">Dodatkowe udogodnienia</h3>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-primary pe-none me-5"><span class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Obsługa administracyjna</h4>
                                <p class="mb-0">Odbiór korespondencji, wsparcie sali konferencyjnej</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-purple pe-none me-5"><span class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Miejsca parkingowe</h4>
                                <p class="mb-0">Dostępne w garażu podziemnym</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-soft-purple pe-none me-5"><span class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Bezpieczeństwo</h4>
                                <p class="mb-0">Recepcja, monitoring, ochrona 24/7</p>
                            </div>
                        </div>
                    </div>

                    <!-- Korzyści dla najemcy -->
                    <div class="col-lg-6 border-start">
                        <h3 class="display-4 mb-7">Korzyści dla najemcy</h3>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-purple pe-none me-5"><span class="number fs-18">1</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Lokalizacja</h4>
                                <p class="mb-0">Centrum biznesowe między Rondem ONZ a Rondem Daszyńskiego, przy Fabryce Norblina</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-circle btn-soft-purple pe-none me-5"><span class="number fs-18">2</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Komunikacja</h4>
                                <p class="mb-0">II linia metra, tramwaje, autobusy</p>
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-soft-purple pe-none me-5"><span class="number fs-18">3</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Komfort pracy</h4>
                                <p class="mb-0">Klimatyzacja, szybki internet symetryczny, sala konferencyjna, strefa kuchenna, serwis sprzątający</p>
                            </div>
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
