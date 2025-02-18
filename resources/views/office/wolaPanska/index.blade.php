@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">WOLA PAŃSKA 96</span>
                </h3>
            </div>
            <br>
        </div>

        <div class="container-fluid px-md-6">
            <div class="swiper-container blog grid-view" data-margin="30" data-nav="true" data-dots="false" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/panska/biuro_85.4.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/panska/biuro_85.5.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/panska/biuro_85.7.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/panska/Recepcja_Pańska_96_3.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>

        <ul class="nav nav-tabs nav-tabs-basic mb-0 mt-2">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Gotowe biuro</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-2">Wirtualne biuro</a> </li>
        </ul>
        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro</h3>
                    <p class="mb-6">
                        Marzysz o wygodnym biurze w doskonałej lokalizacji? Cenisz sobie doskonały dojazd do miejsca pracy? Gotowe Biuro przy Pańskiej 96 spełni Twoje wszelkie oczekiwania.
                        Pańska 96 to ponad 20 w pełni umeblowanych gabinetów. Biura gotowe do wprowadzenia się ,,od zaraz” zlokalizowane w topowej lokalizacji przy ul. Pańskiej 96, naprzeciwko kultowej Fabryki Norblina.
                        Niedalekie sąsiedztwo dwóch linii metra, linii tramwajowych oraz bliskość przystanków autobusowych ułatwią dojazd do pracy, bez konieczności szukania miejsca parkingowego w centrum miasta.

                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>
                    <p class="mb-6">Wirtualne biuro na Woli to doskonałe rozwiązanie jeżeli chcesz być w samym centrum biznesowym stolicy, które obecnie znajduje się w obrębie ulic: Towarowa, Prosta, aleja Jana Pawła II i Aleje Jerozolimskie.
                        Widok na zrewitalizowaną, zabytkową Fabrykę Norblina, w której poza licznymi restauracjami i kawiarniami,znajdują się także kino, muzea i sale zabaw.
                        500 m2 powierzchni biurowej
                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
        </div>
    </section>

@endsection
