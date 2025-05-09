@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'green'])

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
                                            <h2 class="underline-3 style-2 green">Chałubińskiego 8 Śródmieście</h2>
                                        </div>
                                        <!-- Dodanie ceny 2500 PLN -->
                                        <div class="mb-3">
                                            @if ($mainMenu !== 'virtualOffices')
                                                <h3 class="text-green">od 1500 PLN</h3>
                                            @endif
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                @if ($mainMenu === 'virtualOffices')
                                                    Wirtualne biuro w ścisłym centrum Warszawy na <b>22 piętrze</b> jednego z pierwszych warszawskich drapaczy chmur - słynnego z wielu produkcji filmowych biurowca <b>Oxford Tower</b> (Elektrim i Intraco II to nazwy biurowca z lat 90 tych).
                                                    Bezpośrednie sąsiedztwo dworca PKP Warszawa Centralna, Warsaw Presidential Hotel (kiedyś Marriott) i Pałacu Kultury i Nauki. W budynku poza usługą wirtualnego adresu i wynajmu sali konferencyjnej dodatkowo możesz wynająć stanowisko pracy lub gotowy do pracy, w pełni umeblowany i z dostępem do internetu gabinet tzw. gotowe biuro.
                                                @else
                                                    W pełni wyposażone <b>biura w samym sercu Warszawy</b>. Doskonała lokalizacja – <b>kultowy biurowiec przy ulicy Chałubińskiego 8</b>. Doskonały dojazd z i do każdej części miasta, liczne lokale usługowe, gastronomiczne w bliskim sąsiedztwie oraz sala konferencyjna gwarancja idealnego miejsca do prowadzenia Twojej działalności.
                                                    <br>
                                                    W tej lokalizacji gwarantujemy również <a href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Wirtualne Biuro</b></a>.
                                                @endif
                                            </p>
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
                                            <img src="{{asset('assets/img/offices/oxf/new/3.jpg')}}" alt="" />
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="/assets/img/photos/cs6-full.jpg" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2">
                                            <img src="{{asset('assets/img/offices/oxf/new/2.jpg')}}" alt="" />
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
