@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'sky', 'title' => _getOfficeTitle($mainMenu)])

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
                                            <div class="post-category text-sky mb-3">Lokalizacja</div>
                                            <h2 class="underline-3 style-2 sky">Wilanów Herbu Janina 5</h2>
                                            <p class="text-muted">
                                                Spokojna przestrzeń do pracy w Wilanowie.
                                            </p>
                                            <div class="mb-3">
                                                <h3 class="text-sky">od 1 500 PLN</h3>
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Biura serwisowane w niskiej zabudowie <b>Miasteczka Wilanów</b>, blisko <b>Południowej Obwodnicy Warszawy</b>, oferują designerski styl z betonu architektonicznego w ponad 20 gabinetach.
                                                <br><br>
                                                <b>Komfortowe otoczenie biznesowe</b> oraz bliskość licznych kawiarni, restauracji i usług stanowią idealne miejsca na lunch, spotkania biznesowe lub chwilę relaksu po pracy.
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-sky rounded-pill me-2 nobel-contact-button"
                                                       data-office="HERBU JANINA 5 WILANÓW"
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/hj1.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/hj1.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/hj6.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/hj6.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/hj8.jpg')}}" data-glightbox="title:" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/hj8.jpg')}}" alt="" /></a>
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

        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('/assets/img/offices/HJ5/HJ5-U05-nobel-1.jpg')}}">
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

        <div class="modal fade" id="virtualTourModal" tabindex="-1" aria-labelledby="virtualTourModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Zamknij"></button>
                    </div>
                    <div class="modal-body">
                        <iframe src="https://vision360.pl/spacery/HJ5/start.html#pano5818/135.7/-0.2/90.0" class="w-100" style="height: 600px; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        @if ($mainMenu === 'offices')
            <hr class="bg-violet border-2 border-top border-sky"/>

            <div class="row gx-md-8 gx-xl-12 gy-10">
                <h2>Charakterystyka lokalizacji</h2>

                <!-- Powierzchnia -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-sky pe-none me-5">
                    <i class="uil uil-map-marker text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Powierzchnia</h4>
                            <p class="mb-0">350 m², ponad 20 gabinetów</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Układ pomieszczeń -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-sky pe-none me-5">
                    <i class="uil uil-wrench text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Układ pomieszczeń</h4>
                            <p class="mb-0">elastyczny: gabinetowe, jednoosobowe lub zespołowe</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Wykończenie -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-sky pe-none me-5">
                    <i class="uil uil-briefcase text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Wykończenie</h4>
                            <p class="mb-0">nowoczesne, beton architektoniczny</p>
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
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Elastyczność</h4>
                            <p class="mb-0">Możliwość powiększenia przestrzeni</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Parking</h4>
                            <p class="mb-0">Garaż podziemny i miejsca zewnętrzne</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Bezpieczeństwo</h4>
                            <p class="mb-0">Monitoring, ochrona 24/7</p>
                        </div>
                    </div>
                </div>

                <!-- Korzyści dla najemcy -->
                <div class="col-lg-6 border-start">
                    <h3 class="display-4 mb-7">Korzyści dla najemcy</h3>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Lokalizacja</h4>
                            <p class="mb-0">Na uboczu, blisko usług i kawiarni</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komunikacja</h4>
                            <p class="mb-0">Blisko tramwaju Miasteczko Wilanów, autobusy, obwodnica</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-sky pe-none me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komfort pracy</h4>
                            <p class="mb-0">Klimatyzacja, szybki internet symetryczny, sala konferencyjna, strefa kuchenna dla najemców, serwis sprzątający</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bg-violet border-2 border-top border-sky"/>
        @endif


        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.936618435617!2d21.076013177008395!3d52.153662363287005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d3f9ca2f069%3A0x3e483bd0ea005faf!2sNobel!5e0!3m2!1spl!2spl!4v1756229426337!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    @include('Services.modal._officesModal')
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.35) !important; /* Lekkie przyciemnienie tła */
        }
    </style>
@endsection

