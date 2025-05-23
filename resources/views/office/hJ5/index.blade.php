@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'sky'])

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
                                            <div class="mb-3">
                                                <h3 class="text-sky">od 1800 PLN</h3>
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Lokalizacja położona na Błoniach Wilanowskich w Miasteczku Wilanów. Zapomnisz tu o zgiełku rozpędzonego miasta, a czas w biurze upłynie w spokojnej atmosferze.
                                                <b>25 klimatyzowanych biur</b>, które urzekają oryginalnym charakterem. W okolicy znajdziesz wiele kawiarni i restauracji, które w przerwie od pracy serwują pyszny lunch.
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/HJ5-above-nobel-2.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/HJ5-above-nobel-2.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/HJ5-U05-nobel-1.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/HJ5-U05-nobel-1.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/HJ5/HJ5-U04-nobel-9.jpg')}}" data-glightbox="title:" data-gallery="project-2"> <img src="{{asset('assets/img/offices/HJ5/HJ5-U04-nobel-9.jpg')}}" alt="" /></a>
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

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.9398552250823!2d21.0783524!3d52.153603499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d69587dd79d%3A0x290d77a9039c1fd2!2sHerbu%20Janina%205%2C%2002-972%20Warszawa!5e0!3m2!1spl!2spl!4v1744270401405!5m2!1spl!2spl"
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

