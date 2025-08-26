@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="col-lg-12 text-center text-lg-start">
            <h3 class="display-3 pe-xl-10 pe-xxl-15 mb-10">
                <span class="underline-3 style-2 grape">Wirtualne Biuro</span>
            </h3>
        </div>

        <div class="container pb-5 pb-md-7">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{route('virtual.office.route.dispatch', ['office' => 'wola-panska-96'])}}"> <img src="./assets/img/offices/panska/Budynek_Pańska_96.jpg" alt="" class="img-fluid" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <h2 class="post-title h3 mb-3">
                                <a class="link-dark" href="{{route('virtual.office.route.dispatch', ['office' => 'wola-panska-96'])}}" style="font-size: 20px;">Pańska 96
                                    Centrum</a>
                            </h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
                                {{--                                <li class="post-date"><span>Cena od 2500 PLN</span></li>--}}
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}"> <img src="./assets/img/offices/oxf/4_new.jpg" alt="" class="img-fluid" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <h2 class="post-title h3 mb-3">
                                <a class="link-dark" href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}" style="font-size: 20px;">Chałubińskiego 8 Śródmieście</a>
                            </h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
{{--                                <li class="post-date"><span>cena od 1500 PLN</span></li>--}}
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}"> <img src="./assets/img/offices/carolina/BUDYNEK_PORY78.jpg" alt="" class="img-fluid" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <h2 class="post-title h3 mb-3">
                                <a class="link-dark" href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}" style="font-size: 20px;">Pory 78 Mokotów</a>
                            </h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
{{--                                <li class="post-date"><span>cena od 2500</span></li>--}}
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}"> <img src="./assets/img/offices/klimczaka/klimczaka-15-nobel-19.jpg" alt="" class="img-fluid" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <h2 class="post-title h3 mb-3">
                                <a class="link-dark" href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}" style="font-size: 20px;">Klimczaka 15
                                    Wilanów</a>
                            </h2>
                        </div>
                        <div class="post-footer">
                            <ul class="post-meta">
{{--                                <li class="post-date"><span>cena od 2000</span></li>--}}
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <div class="row g-4 mt-2 justify-content-center">


            </div>
        </div>

        @include('Services.components.virtualOfficePricing', ['color' => 'grape'])

        <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                <h2 class="display-4 mb-4 px-lg-14">Zapewnij swojej firmie profesjonalny wizerunek i pełną elastyczność.</h2>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="card me-lg-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-grape pe-none me-4"><span class="number">01</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Prestiżowy adres</h4>
                                <p class="mb-0">Buduje wiarygodność w oczach klientów i partnerów.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-grape pe-none me-4"><span class="number">02</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Kompleksowa obsługa korespondencji</h4>
                                <p class="mb-0"> Odbieramy, przechowujemy, skanujemy i przekazujemy Twoją korespondencję.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card mx-lg-6 mt-6">
                    <div class="card-body p-6">
                        <div class="d-flex flex-row">
                            <div>
                                <span class="icon btn btn-circle btn-lg btn-soft-grape pe-none me-4"><span class="number">03</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">Sale konferencyjne i biura serwisowane</h4>
                                <p class="mb-0">Gdy potrzebujesz fizycznej przestrzeni do pracy lub spotkań biznesowych,</p>
                            </div>
                        </div>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-6 mb-3">Wirtualne Biuro?</h2>
                <p>Rozwiązanie, które daje Ci swobodę działania i oszczędność, oferując wszystko, czego potrzebujesz, by rozwijać biznes na własnych zasadach.</p>
                <p>Wirtualne Biuro to więcej niż tylko adres. To elastyczność, wygoda i wsparcie, które pozwolą Ci skupić się na rozwoju Twojej firmy. Zacznij działać bez ograniczeń już dziś!</p>
{{--                <a href="#" class="btn btn-primary rounded-pill mb-0">Learn More</a>--}}
            </div>
            <!--/column -->
        </div>
        <!--/.row -->

        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-17">
            <div class="col-lg-6">
                <div class="row gx-md-5 gy-5">
                    <div class="col-12">
                        <figure class="rounded mx-md-5"><img src="./assets/img/photos/g8.jpg" srcset="./assets/img/photos/g8@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="./assets/img/photos/g9.jpg" srcset="./assets/img/photos/g9@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="./assets/img/photos/g10.jpg" srcset="./assets/img/photos/g10@2x.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h3 class="display-3 mb-8">Myśl wyjątkowo <span class="underline-3 style-2 yellow">i bądź kreatywny,</span> zyskaj:</h3>
                <div class="row gy-6">
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Oszczędność kosztów</h4>
                                <p class="mb-0">brak konieczności wynajmu tradycyjnej przestrzeni
                                    biurowej to znaczące obniżenie kosztów prowadzenia działalności.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-grape me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Profesjonalny wizerunek</h4>
                                <p class="mb-0">prestiżowy adres w centrum miasta zwiększa
                                    wiarygodność Twojej firmy w oczach klientów i kontrahentów.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/puzzle.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-orange me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Elastyczność</h4>
                                <p class="mb-0">nasza oferta dostosowana jest do Twoich indywidualnych
                                    potrzeb, możesz wybierać spośród różnych pakietów usług.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <div class="d-flex flex-row">
                            <div>
                                <img src="./assets/img/icons/solid/headphone.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-green me-4" alt="" />
                            </div>
                            <div>
                                <h4 class="mb-1">Skoncentruj się na tym, co ważne</h4>
                                <p class="mb-0">my zajmiemy się obsługą biurową, a
                                    Ty możesz w pełni skupić się na rozwijaniu swojego biznesu.</p>
                            </div>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-7 order-lg-2">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-5 offset-md-1 align-self-end">
                                <div class="card bg-pale-yellow">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/telephone-3.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
                                        <p class="mb-0">Przedstawicielstwo w podatku VAT dla podmiotów spoza Unii Europejskiej i wiele innych usług.</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-end">
                                <div class="card bg-pale-red">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/shield.svg" class="svg-inject icon-svg icon-svg-md text-red mb-3" alt="" />

                                        <p class="mb-0">Rejestrację podmiotów gospodarczych w KRS i US</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-5">
                                <div class="card bg-pale-leaf">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/cloud-computing-3.svg" class="svg-inject icon-svg icon-svg-md text-leaf mb-3" alt="" />

                                        <p class="mb-0">Pomoc w założeniu rachunku firmowego</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 align-self-start">
                                <div class="card bg-pale-primary">
                                    <div class="card-body">
                                        <img src="./assets/img/icons/lineal/analytics.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />

                                        <p class="mb-0">Wynajem gotowego biura lub coworkingu</p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.card -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-5">
                        <h3 class="display-4 mb-5">CO OFERUJEMY POZA ADRESEM REJESTROWYM:</h3>
                        <ul>
                            <li>Księgowość</li>
                            <li><b>Obsługę prawną</b></li>
                            <li><b>Doradztwo podatkowe</b></li>
                            <li>Obsługę audytów i kontroli podatkowych</li>
                        </ul>
{{--                        <p><b>obsługę prawną, księgową i doradztwo podatkowe</b> Poprowadzimy księgowość dla każdej firmy, oferujemy--}}
{{--                            obsługę audytów i kontroli podatkowych a doradca podatkowy udzieli wszelkiego wsparcia.</p>--}}
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>

        <hr class="bg-grape border-2 border-top border-grape"/>

        <div class="mt-4">
            @include('qa.display', ['section' => 'virtualOffice', 'title' => 'Q&A'])
        </div>
        <!-- /section -->
        <!-- /section -->

@endsection
