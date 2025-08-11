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
                                            <div class="post-category text-purple mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 purple">Wilanów Klimczaka 15</h2>
                                            <div class="mb-3">
                                                @if ($mainMenu !== 'virtualOffices')
                                                    <h3 class="text-purple">od 2000 PLN</h3>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                @if ($mainMenu === 'virtualOffices')
                                                    Lokalizacja w samym sercu Miasteczka Wilanów u zbiegu alei Rzeczypospolitej i Klimczaka.
                                                    W budynku poza usługą wirtualnego adresu i wynajmu sali konferencyjnej dodatkowo możesz wynająć stanowisko pracy <b>Coworking w Wilanowie</b>\ lub gotowy do pracy, w pełni umeblowany i z dostępem do internetu gabinet tzw. gotowe biuro
                                                @else
                                                Lokalizacja w samym sercu Miasteczka Wilanów u zbiegu alei Rzeczypospolitej i Klimczaka. W przestrzeni oprócz <b>gotowych do pracy gabinetów</b> znajdziesz także <b>przestrzeń coworkingową</b>, którą możesz dzielić ze znajomymi sąsiadami z osiedla.
                                                Wynajem dedykowanego biurka w większej przestrzeni jest idealnym rozwiązaniem dla osób i firm poszukujących niedrogiego, ale elastycznego i inspirującego miejsca do pracy w pobliżu miejsca zamieszkania. Ponadto, <b>coworking w Wilanowie</b> to również świetna okazja do nawiązywania wartościowych kontaktów biznesowych i współpracy z innymi profesjonalistami.
                                                <br>
                                                W tej lokalizacji gwarantujemy również <a href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}" class="text-purple"><b>Wirtualne Biuro</b></a>.
                                                @endif
                                            </p>
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-purple rounded-pill me-2 nobel-contact-button"
                                                       data-office="KLIMCZAKA 15 WILANÓW"
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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-6.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-8.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/klimczaka/klimczaka-15-nobel-7.jpg')}}" alt="" /></a>
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

        <hr class="bg-violet border-2 border-top border-purple"/>

        <div class="tab-pane fade show active mt-15" id="tab2-1">

            <div class="project-details d-flex justify-content-center flex-column">
                <div class="post-header">
                    <div class="post-category text-purple">Coworking</div>
                    <h2 class="">Wilanów Klimczaka 15</h2>
                    <div class="mb-3">
                        @if ($mainMenu !== 'virtualOffices')
                            <h3 class="text-purple">od 500 PLN</h3>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                                <div class="col-lg-6">
                                    <figure class="rounded shadow-lg"><img src="{{asset('assets/img/offices/klimczaka/cowo/klimczaka-15-nobel-4.jpg')}}" srcset="{{asset('assets/img/offices/klimczaka/cowo/klimczaka-15-nobel-4.jpg')}}" alt=""></figure>
                                </div>
{{--                <!--/column -->--}}
                                <div class="col-lg-6">
                <div class="col-lg-12">
                    <p style="font-size: 18px; text-align: justify;">
                        Stanowiska pracy są dedykowane i wybierane przez Klienta.
                        <br>
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
                <!--/column -->
            </div>
            <!--/.row -->
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

        <hr class="bg-violet border-2 border-top border-purple"/>

            @if ($mainMenu === 'virtualOffices')
                @include('Services.components.virtualOfficePricing')
            @endif

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2447.6083799687517!2d21.071689844278474!3d52.15963136611365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d5d3500fdcb%3A0xe24d39a432c49fd3!2sKlimczaka%2015%2C%2002-797%20Warszawa!5e0!3m2!1spl!2spl!4v1740766816197!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

    </section>

    @include('Services.modal._officesModal')
@endsection
