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
                                            <div class="post-category text-purple mb-3">Coworking</div>
                                            <h2 class="underline-3 style-2 purple">Wilanów Klimczaka 15</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                Coworking <b>w samym sercu Miasteczka Wilanów</b> przy <b>Klimczaka 15</b> to komfortowe miejsce pracy, które nie obciąży Twojego budżetu. Idealne dla freelancerów, jak i całych zespołów.
                                            </p>
                                            <ul class="icon-list bullet-bg bullet-soft-purple" style="font-size: 15px;">
                                                <li><i class="uil uil-check"></i><b>Przystępne koszty</b> – płacisz tylko za to, czego faktycznie potrzebujesz, bez zbędnych wydatków.</li>
                                                <li><i class="uil uil-check"></i><b>Prestiżowa lokalizacja</b> – w otoczeniu zieleni i nowoczesnej infrastruktury w samym sercu Miasteczka Wilanów.</li>
                                                <li><i class="uil uil-check"></i><b>Elastyczne opcje</b> – skorzystaj z coworkingu, w pełni umeblowanych biur serwisowanych lub usługi Biuro Wirtualne.</li>
                                            </ul>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-purple rounded-pill me-2 nobel-contact-button"
                                                       data-office="KLIMCZAKA 15 WILANÓW COWORKING"
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
                                        <a href="{{ asset('assets/img/offices/klimczaka/cowo/klim4_1200.jpg') }}"
                                           data-glightbox="title: Wilanów Klimczaka 15"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/klimczaka/cowo/klim4_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim4_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim4_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Wilanów Klimczaka 15"
                                                loading="lazy" />
                                        </a>
                                    </figure>

                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="{{ asset('assets/img/offices/klimczaka/cowo/klim1_1200.jpg') }}"
                                           data-glightbox="title: Wilanów Klimczaka 15"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/klimczaka/cowo/klim1_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim1_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim1_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Wilanów Klimczaka 15"
                                                loading="lazy" />
                                        </a>
                                    </figure>

                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        <a href="{{ asset('assets/img/offices/klimczaka/cowo/klim3_1200.jpg') }}"
                                           data-glightbox="title: Wilanów Klimczaka 15"
                                           data-gallery="project-2">
                                            <img
                                                src="{{ asset('assets/img/offices/klimczaka/cowo/klim3_600.jpg') }}"
                                                srcset="
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim3_600.jpg') }} 600w,
                                                    {{ asset('assets/img/offices/klimczaka/cowo/klim3_1200.jpg') }} 1200w
                                                "
                                                sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 1200px"
                                                alt="Wilanów Klimczaka 15"
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

        <div class="row justify-content-center gy-10">
            <h3 class="display-3 pe-xl-10 pe-xxl-15">
                <span class="underline-3 style-2 purple">Pakiet</span>
            </h3>
            <div class="col-lg-10">
                <div class="row justify-content-center gx-lg-8 align-items-center">

                    <!-- cennik -->
                    <div class="col-lg-4">
                        <div class="pricing card text-center w-100 h-100 p-4">
                            <div class="ribbon-rounded">
                                Zawiera cały pakiet WB
                                <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="ikona prezentu">
                            </div>
                            <div class="card-body d-flex flex-column align-items-center h-100">
                                <div>
                                    <img src="{{asset('assets/img/icons/lineal/briefcase-2.svg')}}"
                                         class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                    <h4 class="card-title">Coworking</h4>
                                    <div class="prices text-dark">
                                        <div class="price price-show">
                                            <span class="price-currency">PLN</span>
                                            <span class="price-value">750</span>
                                            <span class="price-duration">mc</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start flex-grow-1">
                                    <li><i class="uil uil-check"></i><span style="font-size: 15px;">Stanowisko pracy w biurze wieloosobowym</span></li>
                                    <li><i class="uil uil-check"></i><span style="font-size: 15px;">Dostępne 24/7</span></li>
                                </ul>
                                <a href="#"
                                   class="btn btn-sm btn-purple rounded-pill me-2 nobel-contact-button"
                                   data-office="KLIMCZAKA 15 WILANÓW COWORKING"
                                   data-bs-toggle="modal"
                                   data-bs-target="#modal-offices">
                                    Zapytaj o dostępność
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- opis -->
                    <div class="col-lg-6">
                        <p style="font-size: 18px; text-align: justify;">
                            Stanowiska pracy są dedykowane i wybierane przez Klienta.
                        </p>

                        <p style="font-size: 15px;">
                            Oferujemy:
                        </p>

                        <ul class="icon-list bullet-bg bullet-soft-purple" style="font-size: 15px;">
                            <li><i class="uil uil-check"></i>nieograniczony dostęp do wybranego przez siebie stanowiska pracy (biurko, fotel, kontener)</li>
                            <li><i class="uil uil-check"></i>przestronny lokal z dostępem do części wspólnych (aneks kuchenny oraz toalety)</li>
                            <li><i class="uil uil-check"></i>możliwość rejestracji Państwa Firmy pod tym adresem</li>
                            <li><i class="uil uil-check"></i>dostęp do drukarki (limit wydruków na każdego użytkownika)</li>
                            <li><i class="uil uil-check"></i>Internet</li>
                            <li><i class="uil uil-check"></i>kawa/herbata bez limitu</li>
                            <li><i class="uil uil-check"></i>serwis sprzątający</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <hr class="bg-violet border-2 border-top border-purple"/>

            <div class="container-fluid px-md-6 mt-4">
                <div class="row">
                    <div class="col-12">
                        <iframe class="w-100 d-block" style="height: 450px; border:0;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.547513744705!2d21.072382777008734!3d52.16073816276565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d857f85d97f%3A0xe2ccef08aedf7049!2sNobel!5e0!3m2!1spl!2spl!4v1756229512679!5m2!1spl!2spl"
                                allowfullscreen="" aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>

    </section>

    @include('Services.modal._officesModal')
@endsection
