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
            <div class="swiper-container blog grid-view" data-margin="30" data-nav="true" data-dots="false" data-items-xxl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxf/1.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxf/2.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxf/3.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxf/6.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/oxf/7.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>

                        <!--/.swiper-slide -->
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
        <div class="container-fluid px-md-6 mt-4">
            <div class="row">
                <div class="col-12">
                    <iframe class="w-100 d-block" style="height: 450px; border:0;"
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2443.9477567338554!2d21.00104917691333!3d52.22616695794225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sOXFORD%20TOWER%20CH8%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cfigure%20class%3D%22rounded%20overflow-hidden%22%20style%3D%22aspect-ratio%3A%201%2F1%3B%22%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3Cimg%20src%3D%22%7B%7Basset(&#39;assets%2Fimg%2Foffices%2Foxf%2F3.jpg&#39;)%7D%7D%22%20alt%3D%22%22%20class%3D%22img-fluid%20w-100%20h-100%20object-fit-cover%22%20%2F%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Ffigure%3E%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2Fdiv%3E!5e0!3m2!1spl!2spl!4v1738712996309!5m2!1spl!2spl"
                            allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

@endsection
