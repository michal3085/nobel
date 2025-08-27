@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'green', 'title' => 'Coworking'])

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
                                            <div class="post-category text-green mb-3">Coworking</div>
                                            <h2 class="underline-3 style-2 green">Śródmieście Chałubińskiego 8</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Coworking w Oxford Tower to idealne rozwiązanie dla osób i firm, które chcą
                                                zoptymalizować koszty, jednocześnie korzystając z DODATKOWYCH
                                                profesjonalnych usług.
                                            </p>
                                            <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
                                                <li><i class="uil uil-check"></i><b>Prestiżowy adres w centrum Warszawy</b> – zarejestruj firmę pod adresem
                                                    Twojego biura i buduj wiarygodność w oczach klientów.</li>
                                                <li><i class="uil uil-check"></i><b>Obsługa korespondencji</b> – podczas Twojej nieobecności odbierzemy
                                                    przesyłki i poinformujemy Cię o każdej z nich.</li>
                                                <li><i class="uil uil-check"></i><b>Elastyczne możliwości</b> – oprócz coworkingu, możesz skorzystać z Biura
                                                    Serwisowanego lub usługi Biuro Wirtualne.</li>
                                            </ul>

                                            Elastyczne opcje: usługa <a href="{{route('coworking.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Coworking</b></a> oraz <a href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}" class="text-green"><b>Wirtualne Biuro</b></a>.

                                            <div class="d-flex justify-content-center fs-9 mt-7" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
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
                                            <img src="{{asset('assets/img/offices/oxf/coworking/cow7.jpg')}}" alt="" />
                                        </a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="/assets/img/photos/cs5-full.jpg" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2">
                                            <img src="{{asset('assets/img/offices/oxf/coworking/cow14.jpg')}}" alt="" />
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

        <div class="pricing-wrapper position-relative mt-8">
            <h3 class="display-3 pe-xl-10 pe-xxl-15">
                <span class="underline-3 style-2 violet">Cennik</span>
            </h3>
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>

            <div class="row gy-6 mt-3 mt-md-5 justify-content-center">

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="pricing card text-center w-100 h-100">
                        <div class="ribbon-rounded">
                            Zawiera cały pakiet WB
                            <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center h-100">
                            <div>
                                <img src="{{asset('assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                <h4 class="card-title">Coworking</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">750</span> <span class="price-duration">mc</span></div>
                                </div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start flex-grow-1">
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Stanowisko pracy w biurze wieloosobowym</span></li>
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Dostępne 24/7</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="pricing card text-center w-100 h-100">
                        <div class="ribbon-rounded">
                            Zawiera cały pakiet WB
                            <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center h-100">
                            <div>
                                <img src="{{asset('assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-green mb-3" alt="" />
                                <h4 class="card-title">Co-office</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">750</span> <span class="price-duration">mc</span></div>
                                </div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start flex-grow-1">
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Biuro 1-os przez 1 dzień w tygodniu</span></li>
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Dostępne w dni powszednie w godz. 9-16</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex">
                    <div class="pricing card text-center w-100 h-100">
                        <div class="ribbon-rounded">
                            Zawiera cały pakiet WB
                            <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center h-100">
                            <div>
                                <img src="{{asset('assets/img/icons/lineal/briefcase-2.svg')}}" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">Co-office Plus</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">1250</span> <span class="price-duration">mc</span></div>
                                </div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start flex-grow-1">
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Biuro 1-os przez 2 dni w tygodniu</span></li>
                                <li><i class="uil uil-check"></i><span style="font-size: 15px;">Dostępne w dni powszednie w godz. 9-20</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <hr class="bg-violet border-2 border-top border-green"/>

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

