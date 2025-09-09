@extends('_layout')

@section('content')
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
                                            <div class="post-category text-green mb-1">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 green">Śródmieście Chałubińskiego 8</h2>
                                            <p class="text-muted">
                                                22 piętro z widokiem na sukces.
                                            </p>
                                        </div>
                                        <!-- Dodanie ceny 2500 PLN -->
                                        <div class="mb-n2">
                                            @if ($mainMenu !== 'virtualOffices')
                                                <h3 class="text-green">od 1 500 PLN</h3>
                                            @endif
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                                @if ($mainMenu === 'virtualOffices')
                                                <p style="text-align: justify">
                                                    Przenieś firmę na 22. piętro Oxford Tower – jednego z pierwszych warszawskich drapaczy chmur.
                                                    Prestiżowa lokalizacja obok Pałacu Kultury i Nauki oraz Dworca Centralnego.
                                                </p>

                                            <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
                                                <li><i class="uil uil-check"></i><b>Prestiżowy adres w centrum Warszawy</b> – idealny dla budowania wizerunku Twojej firmy.</li>
                                                <li><i class="uil uil-check"></i><b>Elastyczne możliwości pracy</b> – skorzystaj z coworkingu lub w pełni umeblowanych gabinetów gotowych do pracy od zaraz.</li>
                                                <li><i class="uil uil-check"></i><b>Bliskość kluczowych punktów Warszawy</b> – łatwy dostęp do komunikacji miejskiej, restauracji i usług.</li>
                                            </ul>

                                                Elastyczne opcje: usługa <a href="{{route('coworking.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Coworking</b></a> oraz <a href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Biuro</b></a>.
                                                    <br><br>
                                                @else
                                                <p style="text-align: justify">
                                                    Biuro zlokalizowane na <b>22 piętrze w wieżowcu Oxford Tower</b> to idealna przestrzeń dla
                                                    nowoczesnych firm.
                                                    <b>Panoramiczny widok, wysoki standard</b> – wszystko w jednym
                                                    miejscu.

                                                    <br><br>
                                                    Elastyczne opcje: usługa <a href="{{route('coworking.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Coworking</b></a> oraz <a href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Wirtualne Biuro</b></a>.
                                                </p>
                                                @endif
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-green rounded-pill me-2 nobel-contact-button"
                                                       data-office="ŚRÓDMIEŚCIE CHAŁBIŃSKIEGO 8"
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
                                        <a href="{{ asset('assets/img/offices/oxf/6.jpg') }}"
                                           data-glightbox="title: Śródmieście Chałubińskiego 8"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/oxf/6_600.jpg') }}"
                                                srcset="
                                                  {{ asset('assets/img/offices/oxf/6_600.jpg') }} 600w,
                                                  {{ asset('assets/img/offices/oxf/6_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Biuro Oxford Tower"
                                                loading="lazy" />
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    @if ($mainMenu === 'virtualOffices')
                                        <figure class="itooltip itooltip-light hover-scale rounded">
                                            <a href="{{asset('assets/img/offices/oxf/wb/new2.jpg')}}"
                                               data-glightbox="title: Śródmieście Chałubińskiego 8"
                                               data-gallery="project-2">
                                                <img
                                                    src="{{ asset('assets/img/offices/oxf/wb/new2_600.jpg') }}"
                                                    srcset="
                                                      {{ asset('assets/img/offices/oxf/wb/new2_600.jpg') }} 600w,
                                                      {{ asset('assets/img/offices/oxf/wb/new2_1200.jpg') }} 1200w
                                                    "
                                                    sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                    alt="Biuro Oxford Tower"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                    @else
                                        <figure class="itooltip itooltip-light hover-scale rounded">
                                            <a href="{{asset('assets/img/offices/oxf/oxf5.jpg')}}"
                                               data-glightbox="title: Śródmieście Chałubińskiego 8"
                                               data-gallery="project-2">
                                                <img
                                                    src="{{ asset('assets/img/offices/oxf/oxf5_600.jpg') }}"
                                                    srcset="
                                                  {{ asset('assets/img/offices/oxf/oxf5_600.jpg') }} 600w,
                                                  {{ asset('assets/img/offices/oxf/oxf5_1200.jpg') }} 1200w
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
                                    @if ($mainMenu === 'virtualOffices')
                                        <figure class="itooltip itooltip-light hover-scale rounded">
                                            <a href="{{asset('assets/img/offices/oxf/wb/new1.jpg')}}"
                                               data-glightbox="title: Śródmieście Chałubińskiego 8"
                                               data-gallery="project-2">
                                                <img
                                                    src="{{ asset('assets/img/offices/oxf/wb/new1_600.jpg') }}"
                                                    srcset="
                                                  {{ asset('assets/img/offices/oxf/wb/new1_600.jpg') }} 600w,
                                                  {{ asset('assets/img/offices/oxf/wb/new1_1200.jpg') }} 1200w
                                                "
                                                    sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                    alt="Biuro Oxford Tower"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                    @else
                                        <figure class="itooltip itooltip-light hover-scale rounded">
                                            <a href="{{asset('assets/img/offices/oxf/new/2.jpg')}}"
                                               data-glightbox="title: Śródmieście Chałubińskiego 8"
                                               data-gallery="project-2">
                                                <img
                                                    src="{{asset('assets/img/offices/oxf/new/2_600.jpg')}}"
                                                    srcset="
                                                  {{asset('assets/img/offices/oxf/new/2_600.jpg')}} 600w,
                                                  {{asset('assets/img/offices/oxf/new/2_1200.jpg')}} 1200w
                                                "
                                                    sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                    alt="Biuro Oxford Tower"
                                                    loading="lazy" />
                                            </a>
                                        </figure>
                                    @endif
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

        <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('assets/img/offices/oxf/new/virtualy-spacer.jpg')}}">
            <div class="container-fluid py-16 py-md-18"> <!-- Zmiana z container na container-fluid -->
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
                        <iframe src="https://vision360.pl/spacery/ch8_nobel/start.html" class="w-100" style="height: 600px; border: none;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        @if ($mainMenu === 'offices')
            <hr class="bg-violet border-2 border-top border-green"/>

            <div class="row gx-md-8 gx-xl-12 gy-10">
                <h2>O lokalizacji</h2>

                <!-- Powierzchnia -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-green pe-none me-5">
                    <i class="uil uil-map-marker text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Powierzchnia</h4>
                            <p class="mb-0">dla małego lub średniego zespołu</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Układ pomieszczeń -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-green pe-none me-5">
                    <i class="uil uil-wrench text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Układ pomieszczeń</h4>
                            <p class="mb-0">biura indywidualne, sala konferencyjna</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Wykończenie -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-green pe-none me-5">
                    <i class="uil uil-briefcase text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Wykończenie</h4>
                            <p class="mb-0">funkcjonalne, biurowe</p>
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
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Obsługa administracyjna</h4>
                            <p class="mb-0">Odbiór korespondencji, wsparcie sali konferencyjnej</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Miejsca parkingowe</h4>
                            <p class="mb-0">Dostępne w garażu podziemnym</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">3</span></span>
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
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Lokalizacja</h4>
                            <p class="mb-0">Centrum biznesowe między Rondem ONZ a Rondem Daszyńskiego, przy Fabryce Norblina</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komunikacja</h4>
                            <p class="mb-0">II linia metra, tramwaje, autobusy</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-green pe-none me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komfort pracy</h4>
                            <p class="mb-0">Klimatyzacja, szybki internet symetryczny, sala konferencyjna, strefa kuchenna, serwis sprzątający</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="bg-violet border-2 border-top border-green"/>
        @endif


        @if ($mainMenu === 'virtualOffices')
            @include('Services.components.virtualOfficePricing')
        @endif

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.9349373632017!2d21.00099307701171!3d52.226399857924875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc92b7e0c023%3A0xc0d63c10567d85c8!2sNobel!5e0!3m2!1spl!2spl!4v1756229185539!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    @include('Services.modal._officesModal')
@endsection
