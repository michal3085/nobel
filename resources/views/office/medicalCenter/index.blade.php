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
                                            <div class="post-category text-yellow mb-3">@if ($mainMenu === 'virtualOffices') Wirtualne biuro @else Lokalizacja @endif</div>
                                            <h2 class="underline-3 style-2 yellow">Mokotów Pory 78</h2>
                                            <p class="text-muted">
                                                @if ($mainMenu === 'offices')
                                                    12. piętro z widokiem i wygodą
                                                @else
                                                    Carolina – Prestiżowy adres na zielonym Mokotowie
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
                                                    Biura na 12. piętrze Multis Plaza, w pobliżu ul. Sobieskiego i Sikorskiego.
                                                    Doskonałe miejsce dla zespołów, z obsługą biura, salą konferencyjną i widokiem na
                                                    Warszawę.
                                                    Elastyczne opcje: możliwość skorzystania z usługi <a href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}" class="text-yellow"><b>Wirtualne Biuro</b></a>, dopasowanej do Twoich
                                                    potrzeb.

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
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/carolina/WIDOK.jpg')}}" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="{{asset('assets/img/offices/carolina/WIDOK.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/oxf/1.jpg')}}" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="{{asset('assets/img/offices/oxf/1.jpg')}}" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded"><a href="{{asset('assets/img/offices/oxf/2.jpg')}}" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="{{asset('assets/img/offices/oxf/2.jpg')}}" alt="" /></a>
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

            <div class="row text-center gy-6 gx-lg-8 justify-content-center">

                <!-- O lokalizacji -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-map-marker icon-svg-md text-yellow mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">O lokalizacji</h4>
                        <ul class="icon-list bullet-bg bullet-soft-yellow text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Powierzchnia – ponad 200 m² nowoczesnej przestrzeni z dużą liczbą gabinetów</li>
                            <li><i class="uil uil-check"></i>Układ pomieszczeń – biura indywidualne, sala konferencyjna</li>
                            <li><i class="uil uil-check"></i>Wykończenie – funkcjonalne, biurowe</li>
                        </ul>
                    </div>
                </div>

                <!-- Dodatkowe udogodnienia -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-wrench icon-svg-md text-yellow mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Dodatkowe udogodnienia</h4>
                        <ul class="icon-list bullet-bg bullet-soft-yellow text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Obsługa – korespondencja, sala konferencyjna</li>
                            <li><i class="uil uil-check"></i>Parking – garaż podziemny, parking zewnętrzny</li>
                            <li><i class="uil uil-check"></i>Bezpieczeństwo – recepcja, monitoring, ochrona 24/7</li>
                        </ul>
                    </div>
                </div>

                <!-- Korzyści dla najemcy -->
                <div class="col-lg-4">
                    <div class="px-3">
                        <i class="uil uil-briefcase icon-svg-md text-yellow mb-3" style="font-size: 42px;"></i>
                        <h4 class="fw-bold mb-4">Korzyści dla najemcy</h4>
                        <ul class="icon-list bullet-bg bullet-soft-yellow text-start d-inline-block" style="font-size: 15px; line-height:1.6; max-width: 320px;">
                            <li><i class="uil uil-check"></i>Lokalizacja – dogodny dojazd z Wilanowa, Mokotowa, Ursynowa</li>
                            <li><i class="uil uil-check"></i>Komunikacja – tramwaje, autobusy</li>
                            <li><i class="uil uil-check"></i>Komfort – klimatyzacja, szybki internet symetryczny, sala konferencyjna, aneks kuchenny z dostępem do kawy i herbaty, serwis sprzątający</li>
                        </ul>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.7483393312214!2d21.041544959024954!3d52.189671559957986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecd358459b459%3A0x19339477da44c6b9!2sSzpitale%20Carolina%20i%20Optimum!5e0!3m2!1spl!2spl!4v1740779867223!5m2!1spl!2spl" >
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
