@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'blue', 'title' => $mainMenu === 'virtualOffices' ? 'Wirtualne biuro' : 'Biura'])

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
                                            <h2 class="underline-3 style-2 blue">Katowice Sokolska 30</h2>
                                            <p class="text-muted">
                                                Nowoczesna przestrzeń biznesowa w sercu Katowic.
                                            </p>
                                            <div class="mb-3">
                                                <h3 class="text-blue">od 1 200 PLN</h3>
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Prestiżowa inwestycja Sokolska 30 Towers to miejsce, które łączy nowoczesność,
                                                komfort i doskonałą lokalizację w Katowicach. <b>W pełni wyposażone biura</b> zaprojektowane z myślą o wygodzie, funkcjonalności i gotowe do pracy od zaraz.
                                                <b>Wyjątkowe udogodnienia</b>, jak przestronne lobby z recepcją oraz zielone atrium na dachu sprzyjają relaksowi i inspiracji.
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-blue rounded-pill me-2 nobel-contact-button"
                                                       data-office="SOKOLSKA 30 KATOWICE"
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
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16.jpg') }}"
                                           data-glightbox="title: Katowice Sokolska 30"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Katowice Sokolska 30"
                                                loading="lazy" />
                                        </a>
                                    </figure>

                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3.jpg') }}"
                                           data-glightbox="title: Katowice Sokolska 30"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Katowice Sokolska 30"
                                                loading="lazy" />
                                        </a>
                                    </figure>

                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6.jpg') }}"
                                           data-glightbox="title: Katowice Sokolska 30"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Katowice Sokolska 30"
                                                loading="lazy" />
                                        </a>
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

        <style>
            .image-wrapper {
                width: 100vw; /* Pełna szerokość widoku */
                margin-left: calc(-50vw + 50%); /* Centrowanie sekcji */
                margin-right: calc(-50vw + 50%); /* Centrowanie sekcji */
            }
        </style>

        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('/assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16.jpg')}}">
            <div class="container-fluid py-13 py-md-15"> <!-- Zmiana z container na container-fluid -->
                <div class="row gy-6 gy-lg-0">
                    <div class="row text-center">
                        <div class="col-lg-12 col-xl-10 col-xxl-8 mx-auto">
                            <h3 class="display-4 mb-6 text-white px-lg-5 px-xxl-0">Wirtualny spacer</h3>
                            <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#virtualTourModal">
                                Otwórz wirtualny spacer
                            </button>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        @if ($mainMenu === 'offices')
            <hr class="bg-violet border-2 border-top border-blue"/>

            <div class="row gx-md-8 gx-xl-12 gy-10">
                <h2>O lokalizacji</h2>

                <!-- Powierzchnia -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5">
                    <i class="uil uil-map-marker text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Powierzchnia</h4>
                            <p class="mb-0">4 gabinety</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Układ pomieszczeń -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5">
                    <i class="uil uil-wrench text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Układ pomieszczeń</h4>
                            <p class="mb-0">Biurowe, gotowe do pracy</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Wykończenie -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-blue pe-none me-5">
                    <i class="uil uil-briefcase text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Wykończenie</h4>
                            <p class="mb-0">Nowoczesne, wysoki standard</p>
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
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Elastyczność</h4>
                            <p class="mb-0">Możliwość wynajmu dodatkowych gabinetów</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Parking</h4>
                            <p class="mb-0">Garaż podziemny i miejsca zewnętrzne</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">3</span></span>
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
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Lokalizacja</h4>
                            <p class="mb-0">Centrum Katowic, ul. Sokolska</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komunikacja</h4>
                            <p class="mb-0">Blisko Dworzec Główny, tramwaje, autobusy</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-blue pe-none me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komfort pracy</h4>
                            <p class="mb-0">Klimatyzacja, internet, strefa kuchenna dla najemców, zielone atrium</p>
                        </div>
                    </div>
                </div>
            </div>


            <hr class="bg-violet border-2 border-top border-blue"/>
        @endif


        <div class="modal fade" id="virtualTourModal" tabindex="-1" aria-labelledby="virtualTourModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://vision360.pl/spacery/sokolska30/start.html#pano6622/-14.0/7.0/90.0" class="w-100" style="height: 600px; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.469641601857!2d19.014536876923348!3d50.26448900073553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716cf432df50d69%3A0xa49f6b8b99a1e6d3!2sNobel!5e0!3m2!1spl!2spl!4v1756229556959!5m2!1spl!2spl" >
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    @include('Services.modal._officesModal')
@endsection
