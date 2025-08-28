@extends('_layout')

@section('content')
    @include('office._returnButton', ['color' => 'blue', 'title' => _getOfficeTitle($mainMenu)])
    <style>
        .image-wrapper {
            width: 100vw; /* Pełna szerokość widoku */
            margin-left: calc(-50vw + 50%); /* Centrowanie sekcji */
            margin-right: calc(-50vw + 50%); /* Centrowanie sekcji */
        }
    </style>

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
                                            <div class="post-category text-yellow mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 yellow">Mokotów Pory 78</h2>
                                            <p class="text-muted">
                                                @if ($mainMenu === 'offices')
                                                    12 piętro z widokiem i wygodą.
                                                @else
                                                    Carolina – Prestiżowy adres na zielonym Mokotowie.
                                                @endif
                                            </p>
                                            <div class="mb-3">
                                                @if ($mainMenu !== 'virtualOffices')
                                                    <h3 class="text-yellow">od 2 000 PLN</h3>
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p style="text-align: justify">
                                                @if ($mainMenu === 'virtualOffices')
                                                <p style="text-align: justify">
                                                    Umieść swoją firmę w jednej z najbardziej pożądanych lokalizacji w Warszawie.
                                                    Wirtualne biuro na Mokotowie to idealne rozwiązanie dla tych, którzy cenią doskonałą
                                                    infrastrukturę, bliskość centrum oraz otoczenie zieleni.
                                                </p>

                                                <ul class="icon-list bullet-bg bullet-soft-yellow" style="font-size: 15px;">
                                                    <li><i class="uil uil-check"></i><b>Prestiżowa lokalizacja</b> - podkreśl profesjonalizm swojej firmy dzięki
                                                        znanemu adresowi na Mokotowie.</li>
                                                    <li><i class="uil uil-check"></i><b>Idealne miejsce do pracy i rozwoju</b> – dzielnica łączy biznesowy charakter z
                                                        komfortem codziennego funkcjonowania.</li>
                                                    <li><i class="uil uil-check"></i><b>Biura serwisowane</b> – w pełni umeblowane gabinety gotowe do pracy od
                                                        zaraz, dostępne na elastycznych zasadach.</li>
                                                </ul>
                                                @else
                                                <p style="text-align: justify">
                                                    Zlokalizowane na 12 piętrze <b>Multis Plaza przy ulicy Pory 78</b> biuro serwisowane łączy <b>funkcjonalność z wyjątkową obsługą.</b>
                                                    Kilkanaście gabinetów gotowych do natychmiastowego rozpoczęcia pracy, a także sala konferencyjna to idealne warunki do rozwoju.
                                                    <br><br>
                                                    Elastyczne opcje: możliwość skorzystania z usługi <a href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}" class="text-yellow"><b>Wirtualne Biuro</b></a>.

                                                </p>
                                                @endif
                                            <div class="d-flex justify-content-center fs-9" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                                                <span>
                                                    <a href="#"
                                                       class="btn btn-sm btn-yellow rounded-pill me-2 nobel-contact-button"
                                                       data-office="MOKOTÓW PORY 78"
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
                                        @if ($mainMenu === 'virtualOffices')
                                            <a href="{{asset('assets/img/offices/carolina/wb/new3.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/wb/new3.jpg')}}" alt="" /></a>
                                        @else
                                            <a href="{{asset('assets/img/offices/carolina/pory16.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/pory16.jpg')}}" alt="" /></a>
                                        @endif
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        @if ($mainMenu === 'virtualOffices')
                                            <a href="{{asset('assets/img/offices/carolina/wb/new2.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/wb/new2.jpg')}}" alt="" /></a>
                                        @else
                                            <a href="{{asset('assets/img/offices/carolina/pory10.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/pory10.jpg')}}" alt="" /></a>
                                        @endif
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded">
                                        @if ($mainMenu === 'virtualOffices')
                                            <a href="{{asset('assets/img/offices/carolina/wb/new1.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/wb/new1.jpg')}}" alt="" /></a>
                                        @else
                                            <a href="{{asset('assets/img/offices/carolina/pory9.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/pory9.jpg')}}" alt="" /></a>
                                        @endif
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

        @if ($mainMenu === 'offices')
            <hr class="bg-violet border-2 border-top border-yellow"/>

            <div class="row gx-md-8 gx-xl-12 gy-10">
                <h2>O lokalizacji</h2>

                <!-- Powierzchnia -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5">
                    <i class="uil uil-map-marker text-white"></i>
                </span>
                        </div>
                        <div>
                            <h4>Powierzchnia</h4>
                            <p class="mb-0">ponad 200 m² nowoczesnej przestrzeni z dużą liczbą gabinetów</p>
                        </div>
                    </div>
                </div>
                <!-- /column -->

                <!-- Układ pomieszczeń -->
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5">
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
                <span class="icon btn btn-sm btn-circle btn-yellow pe-none me-5">
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
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Obsługa</h4>
                            <p class="mb-0">Korespondencja, sala konferencyjna</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Parking</h4>
                            <p class="mb-0">Garaż podziemny, parking zewnętrzny</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">3</span></span>
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
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Lokalizacja</h4>
                            <p class="mb-0">Dogodny dojazd z Wilanowa, Mokotowa, Ursynowa</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komunikacja</h4>
                            <p class="mb-0">Tramwaje, autobusy</p>
                        </div>
                    </div>

                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-circle btn-soft-yellow pe-none me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Komfort</h4>
                            <p class="mb-0">Klimatyzacja, szybki internet symetryczny, sala konferencyjna, aneks kuchenny z dostępem do kawy i herbaty, serwis sprzątający</p>
                        </div>
                    </div>
                </div>
            </div>


            <hr class="bg-violet border-2 border-top border-yellow"/>
        @endif

    @if ($mainMenu === 'virtualOffices')
            @include('Services.components.virtualOfficePricing')
        @endif

        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.925659392281!2d21.039676593547842!3d52.190223988343455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd358459b459%3A0x623876d7ca77603f!2sNobel!5e0!3m2!1spl!2spl!4v1756229319545!5m2!1spl!2spl" >
                        allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>

            <!--/.tab-pane -->
{{--            <div class="tab-pane fade" id="tab3-2">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>--}}
{{--                    <p class="mb-6">Wirtualne biuro na Mokotowie to doskonała opcja dla firm pragnących skorzystać z prestiżowego adresu w jednej z najbardziej pożądanych dzielnic Warszawy. Mokotów jest znany z doskonałej infrastruktury, bliskości do centrum miasta oraz licznych parków, co czyni go idealnym miejscem do prowadzenia działalności biznesowej.</p>--}}
{{--                    <!--/.row -->--}}
{{--                </div>--}}
{{--            </div>--}}
    </section>

    @include('Services.modal._officesModal')
@endsection
