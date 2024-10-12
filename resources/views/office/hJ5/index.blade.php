@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">Wilanów Herbu Janina 5 HJ5</span>
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
                                <img src="{{asset('assets/img/offices/hj1.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj2.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj3.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
                            </figure>
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded overflow-hidden" style="aspect-ratio: 1/1;">
                                <img src="{{asset('assets/img/offices/hj4.jpg')}}" alt="" class="img-fluid w-100 h-100 object-fit-cover" />
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
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">Gotowe biuro</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="javascript:void(0);" tabindex="-1" aria-disabled="true">Wirtualne biuro</a>
            </li>
        </ul>

        <!-- /.nav-tabs -->
        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab3-1">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro</h3>
                    <p class="mb-6">
                        Lokalizacja położona na Błoniach Wilanowskich w Miasteczku Wilanów. Zapomnisz tutaj o zgiełku rozpędzonego miasta, a czas w biurze upłynie w spokojnej atmosferze.
                        Czeka na Ciebie  25 klimatyzowanych biur, które urzekają oryginalnym charakterem.
                        W okolicy znajdziesz wiele kawiarni i restauracji, które w przerwie od pracy serwują pyszny lunch.
                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
                <div class="col-lg-12">
                    <h3 class="display-4 mb-5 text-end">Gotowe biuro i Coworking</h3>
                    <p class="mb-6">
                    </p>
                    <!--/.row -->
                </div>
            </div>
            <!--/.tab-pane -->
        </div>
    </section>

@endsection
