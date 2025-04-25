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
                                            <div class="post-category text-yellow mb-3">Lokalizacja</div>
                                            <h2 class="underline-3 style-2 yellow">Śródmieście Piękna 15</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Przestronny i <b>nowoczesny</b> lokal biurowy o powierzchni 73 m²,
                                                zlokalizowany w jednej z najbardziej <b>prestiżowych lokalizacji Warszawy – przy ulicy Pięknej
                                                15</b>. To idealne miejsce dla firm, które cenią sobie elegancję, wygodę i dostęp do serca stolicy.
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-yellow rounded-pill me-2 nobel-contact-button"
                                                       data-office="ŚRÓDMIEŚCIE PIĘKNA 15"
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/piekna/9.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/piekna/9.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/piekna/lobby.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/piekna/lobby.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/piekna/1.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/piekna/1.jpg')}}" alt="" /></a>
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

        <div class="card bg-light">
        <div class="col-lg-12">
        </div>

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.0966308810794!2d21.01407949289197!3d52.22346218591455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccef88bab3c5%3A0x5df81d0d8966d459!2sPi%C4%99kna%2015%2C%2000-549%20Warszawa!5e0!3m2!1spl!2spl!4v1738706157911!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
        </div>

        <hr>

        <div class="row gx-md-8 gx-xl-12 gy-10 mt-2 mb-3">
            <h2>Charakterystyka lokalizacji</h2>
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Powierzchnia</h4>
                        <p class="mb-0">73 m² – optymalna przestrzeń dla małego lub średniego zespołu.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Układ pomieszczeń</h4>
                        <p class="mb-0">funkcjonalny i elastyczny – możliwość aranżacji według potrzeb
                            najemcy (np. open space, biura indywidualne, sala konferencyjna).</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Wykończenie</h4>
                        <p class="mb-0">wysoki standard – lokal jest świeżo odnowiony.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Wyposażenie</h4>
                        <p class="mb-0">system klimatyzacji, szybki Internet, oświetlenie biurowe.</p>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
<hr>
        <!-- Dodaj margines do sekcji, aby oddzielić ją od kolejnych bloków -->
        <div class="row mt-7 mb-5">
            <!-- Pierwszy blok po lewej stronie -->
            <div class="col-lg-6">
                <h3 class="display-4 mb-7">Dodatkowe udogodnienia</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Reprezentacyjny budynek</h4>
                        <p class="mb-0">kamienica biurowa o wyjątkowym charakterze, z
                            eleganckim wejściem i recepcją.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Dostępność miejsc parkingowych</h4>
                        <p class="mb-0">możliwość wynajęcia miejsca na parkingu
                            podziemnym lub pobliskim.</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Bezpieczeństwo:</h4>
                        <p class="mb-0">monitoring, ochrona budynku 24/7.</p>
                    </div>
                </div>
            </div>

            <!-- Drugi blok po prawej stronie z pionową linią -->
            <div class="col-lg-6 border-start">
                <h3 class="display-4 mb-7">Korzyści dla najemcy</h3>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">1</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Prestiżowa lokalizacja</h4>
                        <p class="mb-0">podkreślająca profesjonalizm Twojej firmy.</p>
                    </div>
                </div>
                <div class="d-flex flex-row mb-6">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">2</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Bliskość kluczowych instytucji biznesowych</h4>
                        <p class="mb-0">urzędów i miejsc spotkań w centrum
                            Warszawy.</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">3</span></span>
                    </div>
                    <div>
                        <h4 class="mb-1">Komfortowe warunki do pracy</h4>
                        <p class="mb-0">w przestrzeni biurowej o wysokim standardzie.</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <p class="mb-6 mt-4">
                Lokal biurowy przy ul. Pięknej 15 to doskonały wybór dla firm z branży prawniczej,
                konsultingowej, kreatywnej czy technologicznej, które chcą zyskać nie tylko funkcjonalne
                miejsce pracy, ale także wizerunkowe atuty wynikające z lokalizacji w prestiżowym miejscu.
                <br><br>
                Zapraszamy do kontaktu w celu uzyskania szczegółowych informacji lub umówienia się na
                prezentację lokalu!
            </p>
        </div>

    </section>
    @include('Services.modal._officesModal')
@endsection

