@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 green">Znajdz swoje miejsce u nas</span>
                </h3>
            </div>
{{--            @include('Services.components._offices')--}}

            <section class="wrapper bg-light angled upper-end mb-3">
                <div class="container py-14 py-md-16">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}"> <img src="./assets/img/offices/oxf/budynek_wejscie.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">Oxford Tower
                                            Śródmieście</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>cena od 1500 PLN</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="#"> <img src="./assets/img/offices/piekna/lobby.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="./blog-post.html">Piękna 15
                                            Śródmieście</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
{{--                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2022</span></li>--}}
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}"> <img src="./assets/img/offices/panska/Budynek_Pańska_96.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}">Pańska 96
                                            Wola</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>Cena od 2500 PLN</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}"> <img src="./assets/img/offices/carolina/BUDYNEK_PORY78.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Carolina Medical Center Pory 78
                                            Mokotów</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>cena od 2500</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="row g-4 mt-2 justify-content-center">
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}"> <img src="./assets/img/offices/HJ5/HJ5-above-nobel-2.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}">Herbu Janina 5
                                            Wilanów</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>cena od 1800</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}"> <img src="./assets/img/offices/klimczaka/klimczaka-15-nobel-19.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">Klimczaka 15 + coworking
                                            Wilanów</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>cena od 2000</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}"> <img src="./assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-32.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Read More</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}">Sokolska 30
                                            Katowice</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><span>cena od 2000</span></li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <h1 class="mb-4 underline-3 style-2 green">Dostarczamy rozwiązania, które ułatwiają życie naszym klientom.</h1>
                <div class="tab-pane fade show active" id="tab2-1">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <p style="font-size: 15px;">Biuro serwisowane to w pełni wyposażona przestrzeń do pracy, która łączy komfort,
                                elastyczność i dogodną lokalizację. Jeśli jesteś samotnym wilkiem, mamy dla Ciebie
                                idealne biuro jednoosobowe – przestrzeń, w której możesz pracować w ciszy i spokoju. Jeśli
                                natomiast pracujesz w zespole, oferujemy większe biura 2-3 lub nawet 6 osobowe
                                zapewniając przestrzeń do efektywnej pracy w grupie.</p>
                            <ul class="icon-list bullet-bg bullet-soft-fuchsia" style="font-size: 15px;">
                                <li><i class="uil uil-check"></i><b>Elastyczność</b> – możliwość wynajmu na krótkie okresy, dopasowanie do potrzeb.</li>
                                <li><i class="uil uil-check"></i><b>Wyposażenie</b> – w pełni umeblowane przestrzenie gotowe do pracy.</li>
                                <li><i class="uil uil-check"></i><b>Koszty</b> – opłaty zawarte w jednej miesięcznej fakturze (czynsz, media,
                                    sprzątanie).</li>
                                <li><i class="uil uil-check"></i><b>Lokalizacja</b></li>
                                <li><i class="uil uil-check"></i><b>Usługi dodatkowe</b> – recepcja, obsługa poczty, sala konferencyjna.</li>
                                <li><i class="uil uil-check"></i><b>Współpraca</b> – otoczenie innych firm, sprzyjające networkingowi.</li>
                                <li><i class="uil uil-check"></i><b>Skalowalność</b> – możliwość zwiększania lub zmniejszania przestrzeni wraz z
                                    rozwojem firmy.</li>
                            </ul>
                            <a href="#" class="btn btn-fuchsia mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
            </section>

        </div>
    </section>

    <section class="section-frame overflow-hidden">
        <div class="wrapper bg-gray">
            <div class="container py-13 py-md-17 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-1">Check out some of our awesome projects with creative ideas.</h1>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mt-6">
                <div class="col-xl-10 mx-auto">
                    <div class="projects-tiles">
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-red mb-3">Ideas</div>
                                            <h2 class="post-title mb-3">Cras Fermentum Sem</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <a href="#" class="more hover link-red">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Cursus Inceptos Sit</h5>'><a href="./assets/img/photos/cs1-full.jpg" data-glightbox="title: Cursus Inceptos Sit" data-gallery="project-1"> <img src="./assets/img/photos/cs1.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Ipsum Egestas Porta</h5>'><a href="./assets/img/photos/cs2-full.jpg" data-glightbox="title: Ipsum Egestas Porta" data-gallery="project-1"> <img src="./assets/img/photos/cs2.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Ultricies Cras Tortor</h5>'><a href="./assets/img/photos/cs3-full.jpg" data-glightbox="title: Ultricies Cras Tortor" data-gallery="project-1"> <img src="./assets/img/photos/cs3.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-yellow mb-3">Concept</div>
                                            <h2 class="post-title mb-3">Vulputate Sollicitudin</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <a href="#" class="more hover link-yellow">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Purus Tellus Magna</h5>'><a href="./assets/img/photos/cs4-full.jpg" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="./assets/img/photos/cs4.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Ipsum Vestibulum</h5>'><a href="./assets/img/photos/cs5-full.jpg" data-glightbox="title: Fusce Ipsum Vestibulum" data-gallery="project-2"> <img src="./assets/img/photos/cs5.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Condimentum Parturient Ligula</h5>'><a href="./assets/img/photos/cs6-full.jpg" data-glightbox="title: Condimentum Parturient Ligula" data-gallery="project-2"> <img src="./assets/img/photos/cs6.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-green mb-3">Still Life</div>
                                            <h2 class="post-title mb-3">Vulputate Sollicitudin</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <a href="#" class="more hover link-green">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Venenatis Amet Ipsum</h5>'><a href="./assets/img/photos/cs7-full.jpg" data-glightbox="title: Venenatis Amet Ipsum" data-gallery="project-3"> <img src="./assets/img/photos/cs7.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Quam Vehicula Condimentum</h5>'><a href="./assets/img/photos/cs8-full.jpg" data-glightbox="title: Quam Vehicula Condimentum" data-gallery="project-3"> <img src="./assets/img/photos/cs8.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Commodo Fusce Dapibus</h5>'><a href="./assets/img/photos/cs9-full.jpg" data-glightbox="title: Commodo Fusce Dapibus" data-gallery="project-3"> <img src="./assets/img/photos/cs9.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-leaf mb-3">Workshop</div>
                                            <h2 class="post-title mb-3">Ornare Commodo Mollis</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <a href="#" class="more hover link-leaf">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Cras Ullamcorper Tellus</h5>'><a href="./assets/img/photos/cs10-full.jpg" data-glightbox="title: Cras Ullamcorper Tellus" data-gallery="project-4"> <img src="./assets/img/photos/cs10.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Quam Bibendum Ornare</h5>'><a href="./assets/img/photos/cs11-full.jpg" data-glightbox="title: Quam Bibendum Ornare" data-gallery="project-4"> <img src="./assets/img/photos/cs11.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Ullamcorper Etiam Malesuada</h5>'><a href="./assets/img/photos/cs12-full.jpg" data-glightbox="title: Ullamcorper Etiam Malesuada" data-gallery="project-4"> <img src="./assets/img/photos/cs12.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.project -->
                        <div class="project grid grid-view">
                            <div class="row g-6 isotope">
                                <div class="item col-md-6">
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="post-header">
                                            <div class="post-category text-orange mb-3">Tools & Toys</div>
                                            <h2 class="post-title mb-3">Porta Tortor Vulputate</h2>
                                        </div>
                                        <!-- /.post-header -->
                                        <div class="post-content">
                                            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                                            <a href="#" class="more hover link-orange">See Project</a>
                                        </div>
                                        <!-- /.post-content -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Aenean Dolor Tristique</h5>'><a href="./assets/img/photos/cs13-full.jpg" data-glightbox="title: Aenean Dolor Tristique" data-gallery="project-5"> <img src="./assets/img/photos/cs13.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Magna Ipsum Euismod</h5>'><a href="./assets/img/photos/cs14-full.jpg" data-glightbox="title: Magna Ipsum Euismod" data-gallery="project-5"> <img src="./assets/img/photos/cs14.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                                <div class="item col-md-6">
                                    <figure class="itooltip itooltip-light hover-scale rounded" title='<h5 class="mb-0">Fusce Mollis</h5>'><a href="./assets/img/photos/cs15-full.jpg" data-glightbox="title: Fusce Mollis" data-gallery="project-5"> <img src="./assets/img/photos/cs15.jpg" alt="" /></a>
                                    </figure>
                                </div>
                                <!-- /.item -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.project -->
                    </div>
                    <!-- /.projects-tiles -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    </div>
@endsection
