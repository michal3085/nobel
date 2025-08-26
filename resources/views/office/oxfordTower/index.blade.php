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
                                            <div class="post-category text-green mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 green">Śródmieście Chałubińskiego 8</h2>
                                            <p class="text-muted">
                                                22 piętro z widokiem na sukces.
                                            </p>
                                        </div>
                                        <!-- Dodanie ceny 2500 PLN -->
                                        <div class="mb-3">
                                            @if ($mainMenu !== 'virtualOffices')
                                                <h3 class="text-green">od 1 500 PLN</h3>
                                            @endif
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                                @if ($mainMenu === 'virtualOffices')
                                                <p style="text-align: justify">
                                                    Przenieś swoją firmę na 22. piętro słynnego Oxford Tower – jednego z pierwszych
                                                    warszawskich drapaczy chmur. Prestiżowy adres w sąsiedztwie Pałacu Kultury i
                                                    Nauki, Warsaw Presidential Hotel (dawniej Marriott) oraz Dworca Centralnego
                                                    podkreśli profesjonalizm Twojej działalności.
                                                </p>

                                            <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
                                                <li><i class="uil uil-check"></i><b>Prestiżowy adres w centrum Warszawy</b> – idealny dla budowania wizerunku Twojej firmy.</li>
                                                <li><i class="uil uil-check"></i><b>Elastyczne możliwości pracy</b> – skorzystaj z coworkingu lub w pełni umeblowanych gabinetów gotowych do pracy od zaraz.</li>
                                                <li><i class="uil uil-check"></i><b>Bliskość kluczowych punktów Warszawy</b> – łatwy dostęp do komunikacji miejskiej, restauracji i usług.</li>
                                            </ul>
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
                                        <a href="{{asset('/assets/img/photos/cs4-full.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2">
                                            <img src="{{asset('assets/img/offices/oxf/6.jpg')}}" alt="" />
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="/assets/img/photos/cs5-full.jpg" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2">
                                            @if ($mainMenu === 'virtualOffices')
                                                <img src="{{asset('assets/img/offices/oxf/wb/new1.jpg')}}" alt="" />
                                            @else
                                                <img src="{{asset('assets/img/offices/oxf/oxf5.jpg')}}" alt="" />
                                            @endif
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="/assets/img/photos/cs6-full.jpg" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2">
                                            @if ($mainMenu === 'virtualOffices')
                                                <img src="{{asset('assets/img/offices/oxf/wb/new2.jpg')}}" alt="" />
                                            @else
                                                <img src="{{asset('assets/img/offices/oxf/new/2.jpg')}}" alt="" />
                                            @endif
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

            <div class="row text-center gy-6 gx-lg-8 justify-content-center">

                <!-- O lokalizacji -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-map-marker icon-svg-md text-green mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">O lokalizacji</h4>
                        <ul class="icon-list bullet-bg bullet-soft-green text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Powierzchnia – dla małego lub średniego zespołu</li>
                            <li><i class="uil uil-check"></i>Układ pomieszczeń – biura indywidualne, sala konferencyjna</li>
                            <li><i class="uil uil-check"></i>Wykończenie – funkcjonalne, biurowe</li>
                        </ul>
                    </div>
                </div>

                <!-- Dodatkowe udogodnienia -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-wrench icon-svg-md text-green mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Dodatkowe udogodnienia</h4>
                        <ul class="icon-list bullet-bg bullet-soft-green text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Obsługa – korespondencja, wsparcie sali konferencyjnej</li>
                            <li><i class="uil uil-check"></i>Parking – podziemny i zewnętrzne opcje w pobliżu</li>
                            <li><i class="uil uil-check"></i>Bezpieczeństwo – recepcja, monitoring, ochrona 24/7</li>
                        </ul>
                    </div>
                </div>

                <!-- Korzyści dla najemcy -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-briefcase icon-svg-md text-green mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Korzyści dla najemcy</h4>
                        <ul class="icon-list bullet-bg bullet-soft-green text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Centralna lokalizacja – obok Presidential (dawny Marriott), PKiN, Dworzec Centralny</li>
                            <li><i class="uil uil-check"></i>Komunikacja – 200 m do Dworca, 600 m do metra</li>
                            <li><i class="uil uil-check"></i>Komfort pracy – widok na Warszawę, klimatyzacja, szybki internet symetryczny, aneks kuchenny, serwis sprzątający</li>
                        </ul>
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
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2443.9477567338554!2d21.00104917691333!3d52.22616695794225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOXFORD%20TOWER%20CH8%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cfigure%20class%3D%22rounded%20overflow-hidden%22%20style%3D%22aspect-ratio%3A%201%2F1%3B%22%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cimg%20src%3D%22%7B%7Basset(&#39;assets%2Fimg%2Foffices%2Foxf%2F3.jpg&#39;)%7D%7D%22%20alt%3D%22%22%20class%3D%22img-fluid%20w-100%20h-100%20object-fit-cover%22%20%2F%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Ffigure%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fdiv%3E!5e0!3m2!1spl!2spl!4v1738712996309!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    @include('Services.modal._officesModal')
@endsection
