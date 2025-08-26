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
                                                komfort i doskonałą lokalizację w Katowicach. <b>W pełni wyposażone biura</b> zaprojektowane z myślą o wygodzie i funkcjonalności,
                                                gotowe do pracy od zaraz. <b>Wyjątkowe udogodnienia</b>, jak przestronne lobby z recepcją oraz zielone atrium na
                                                dachu sprzyja relaksowi i inspiracji.
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-16.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-3.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-6.jpg')}}" alt="" /></a>
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

            <div class="row text-center gy-6 gx-lg-8 justify-content-center">

                <!-- O lokalizacji -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-map-marker icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">O lokalizacji</h4>
                        <ul class="icon-list bullet-bg bullet-soft-blue text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Powierzchnia – 4 gabinety</li>
                            <li><i class="uil uil-check"></i>Układ pomieszczeń – biurowe, gotowe do pracy</li>
                            <li><i class="uil uil-check"></i>Wykończenie – nowoczesne, wysoki standard</li>
                        </ul>
                    </div>
                </div>

                <!-- Dodatkowe udogodnienia -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-wrench icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Dodatkowe udogodnienia</h4>
                        <ul class="icon-list bullet-bg bullet-soft-blue text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Elastyczność – możliwość wynajmu dodatkowych gabinetów</li>
                            <li><i class="uil uil-check"></i>Parking – garaż podziemny i miejsca zewnętrzne</li>
                            <li><i class="uil uil-check"></i>Bezpieczeństwo – recepcja, monitoring, ochrona 24/7</li>
                        </ul>
                    </div>
                </div>

                <!-- Korzyści dla najemcy -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-briefcase icon-svg-md text-blue mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Korzyści dla najemcy</h4>
                        <ul class="icon-list bullet-bg bullet-soft-blue text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Lokalizacja – centrum Katowic, ul. Sokolska</li>
                            <li><i class="uil uil-check"></i>Komunikacja – blisko Dworzec Główny, tramwaje, autobusy</li>
                            <li><i class="uil uil-check"></i>Komfort pracy – klimatyzacja, internet, strefa kuchenna dla najemców, zielone atrium</li>
                        </ul>
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
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2550.4551450736203!2d19.013645212092147!3d50.26475971076346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce3c028bc8b5%3A0xbdb20112242c5b59!2sSokolska%2030%2C%2040-086%20Katowice!5e0!3m2!1spl!2spl!4v1740772345567!5m2!1spl!2spl" >
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    @include('Services.modal._officesModal')
@endsection
