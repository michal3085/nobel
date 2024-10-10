@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">OXFORD TOWER CH8</span>
                </h3>
            </div>
            <br>
        </div>

        <div class="container-fluid px-md-6">
            <div class="swiper-container blog grid-view mb-2 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxford.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/ch8.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxford2.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
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
                                W pełni wyposażone biura w samym sercu Warszawy. Doskonała lokalizacja – kultowy biurowiec
                                przy ulicy Chałubińskiego 8. Doskonały dojazd z i do każdej części miasta, liczne lokale usługowe,
                                gastronomiczne w bliskim sąsiedztwie oraz sala konferencyjna gwarancja idealnego miejsca do
                                prowadzenia Twojej działalności.
                            </p>
                            <!--/.row -->
                        </div>
                    </div>
                    <!--/.tab-pane -->
                    <div class="tab-pane fade" id="tab3-2">
                        <div class="col-lg-12">
                            <h3 class="display-4 mb-5 text-end">Wirtualne biuro</h3>
                            <p class="mb-6">Wirtualne biuro usytuowane w ścisłym centrum Warszawy na 22 piętrze jednego z pierwszych
                                warszawskich drapaczy chmur - słynnego z wielu produkcji filmowych biurowca Oxford Tower
                                (Elektrim i Intraco II to nazwy biurowca z lat 90 tych).
                                Bezpośrednie sąsiedztwo dworca PKP Warszawa Centralna, hotelu Marriott i Pałacu Kultury i Nauki.
                                W budynku tym poza usługą wirtualnego adresu i wynajmu sali konferencyjnej dodatkowo możesz
                                wynająć stanowisko pracy lub gotowy do pracy, w pełni umeblowany i z dostępem do internetu gabinet
                                tzw. gotowe biuro.</p>
                            <!--/.row -->
                        </div>
                    </div>
                    <!--/.tab-pane -->
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
    </section>
@endsection
