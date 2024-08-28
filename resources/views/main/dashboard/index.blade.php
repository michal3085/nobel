@extends('main._layout')

@section('content')
    <section class="wrapper bg-light">
{{--    VIDEO AND NUMBERS    --}}
        <div class="container pb-15 pb-md-17">
            <div class="col-12 mt-n20">
                <figure class="rounded " data-cues="fadeIn" data-delay="250">
                    <a href="./assets/media/nobel_movie.mp4" class="btn btn-circle btn-white btn-play ripple mx-auto position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                    <video class="w-100 rounded caption-overlay d-block" poster="./assets/img/photos/movie3.jpg" src="./assets/media/nobel_movie.mp4" autoplay loop playsinline muted></video>
                </figure>

                <div class="row" data-cue="slideInUp">
                    <div class="col-xl-10 mx-auto">
                        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 text-white mt-n5 mt-lg-0 mt-lg-n50p mb-lg-n50p border-radius-lg-top" data-image-src="./assets/img/photos/bg2.jpg">
                            <div class="card-body p-9 p-xl-10">
                                <div class="row align-items-center counter-wrapper gy-4 text-center">
                                    <div class="col-6 col-lg-3">
                                        <h3 class="counter counter-lg text-white">7518</h3>
                                        <p>Completed Projects</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-6 col-lg-3">
                                        <h3 class="counter counter-lg text-white">3472</h3>
                                        <p>Satisfied Customers</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-6 col-lg-3">
                                        <h3 class="counter counter-lg text-white">2184</h3>
                                        <p>Expert Employees</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-6 col-lg-3">
                                        <h3 class="counter counter-lg text-white">4523</h3>
                                        <p>Awards Won</p>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /column -->
        </div>
{{--    VIDEO AND NUMBERS END    --}}
        <!-- /.container -->
    </section>
    <!-- /section -->






    <section class="wrapper bg-light mt-9">
        <div class="container py-14 py-md-16">
            <div class="pricing-wrapper position-relative mt-n22 mt-md-n24">
                <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
                <div class="row gy-6 mt-3 mt-md-5">
                    <div class="col-md-6 col-lg-6">
                        <div class="pricing card shadow-lg text-center">
                            <div class="card-body">
                                <img src="./assets/img/icons/lineal/shopping-basket.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">Sprzedaż spółki</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">2900</span> <span class="price-duration">plus opłaty</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">99</span> <span class="price-duration">yr</span></div>
                                </div>
                                <!--/.prices -->
                                <p class="mt-7 mb-8">to doskonała propozycja dla wszystkich osób, którym zależy na natychmiastowym rozpoczęciu działalności. Nasza oferta umożliwia nabycie w pełni ukształtowanej spółki, wpisanej do KRS, REGON, NIP oraz VAT-UE, w przeciągu 1-2 dni.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->

                    <div class="col-md-6 col-lg-6">
                        <div class="pricing card shadow-lg text-center">
                            <div class="card-body">
                                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                                </div>
                                <!--/.prices -->
                                <p class="mt-7 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor.</p>
                                <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="pricing card shadow-lg text-center">
                            <div class="card-body">
                                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                                </div>
                                <!--/.prices -->
                                <p class="mt-7 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor.</p>
                                <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="pricing card shadow-lg text-center">
                            <div class="card-body">
                                <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                                <h4 class="card-title">Corporate Plan</h4>
                                <div class="prices text-dark">
                                    <div class="price price-show"><span class="price-currency">$</span><span class="price-value">49</span> <span class="price-duration">mo</span></div>
                                    <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                                </div>
                                <!--/.prices -->
                                <p class="mt-7 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem egestas odio, vitae scelerisque enim ligula venenatis dolor.</p>
                                <a href="#" class="btn btn-primary rounded">Choose Plan</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/.pricing-wrapper -->
        </div>
        <!-- /.container -->
    </section>

















    <section class="wrapper bg-gray">
        <div class="container py-15 py-md-17 pb-md-19">
            <div class="row align-items-center gy-8 mb-13">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Save Time and Money</h2>
                    <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">Save your time and money by choosing our <span class="underline-3 style-2 yellow">professional</span> team.</h3>
                </div>
                <!-- /column -->
                <div class="col-lg-5">
                    <div class="row gy-6 text-center">
                        <div class="col-md-6">
                            <div class="progressbar semi-circle fuchsia" data-value="95"></div>
                            <h4 class="mb-0">Customer Satisfaction</h4>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="progressbar semi-circle orange" data-value="80"></div>
                            <h4 class="mb-0">Increased Revenue</h4>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-16 py-md-18">
            <div class="card shadow-lg mt-n21 mt-md-n23">
                <div class="row gx-0">
                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="./assets/img/photos/tm2.jpg">
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="p-10 p-md-11 px-lg-13 py-lg-14">
                            <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Coriss Ambady</h5>
                                                        <p class="mb-0">Financial Analyst</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Cory Zamora</h5>
                                                        <p class="mb-0">Marketing Specialist</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum ligula porta felis euismod semper. Cras justo odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Nikolas Brooten</h5>
                                                        <p class="mb-0">Sales Manager</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                </div>
                                <!-- /.swiper -->
                            </div>
                            <!-- /.swiper-container -->
                        </div>
                        <!--/div -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.card -->
            <div class="row mt-17">
                <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Latest Projects</h2>
                    <h3 class="display-3 mb-10">Check out some of our awesome projects with <span class="underline-3 style-2 yellow">creative</span> ideas and great design.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container grid-view" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd7.jpg" srcset="./assets/img/photos/pd7@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd7-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project.html" class="link-dark">Cras Fermentum Sem</a></h2>
                                    <div class="post-category text-ash">Stationary</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd8.jpg" srcset="./assets/img/photos/pd8@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd8-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project2.html" class="link-dark">Mollis Ipsum Mattis</a></h2>
                                    <div class="post-category text-ash">Magazine, Book</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd9.jpg" srcset="./assets/img/photos/pd9@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd9-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project3.html" class="link-dark">Ipsum Ultricies Cursus</a></h2>
                                    <div class="post-category text-ash">Packaging</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd10.jpg" srcset="./assets/img/photos/pd10@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd10-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project.html" class="link-dark">Inceptos Euismod Egestas</a></h2>
                                    <div class="post-category text-ash">Stationary, Branding</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd11.jpg" srcset="./assets/img/photos/pd11@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd11-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project2.html" class="link-dark">Ipsum Mollis Vulputate</a></h2>
                                    <div class="post-category text-ash">Packaging</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <figure class="rounded mb-6"><img src="./assets/img/photos/pd12.jpg" srcset="./assets/img/photos/pd12@2x.jpg 2x" alt="" /><a class="item-link" href="./assets/img/photos/pd12-full.jpg" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="./single-project3.html" class="link-dark">Porta Ornare Cras</a></h2>
                                    <div class="post-category text-ash">Branding</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
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
                    <h2 class="fs-16 text-uppercase text-muted mb-3">What Makes Us Different?</h2>
                    <h3 class="display-3 mb-8">We bring <span class="underline-3 style-2 yellow">solutions</span> to make life easier for our customers.</h3>
                    <div class="row gy-6">
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-fuchsia me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Creativity</h4>
                                    <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <img src="./assets/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-xs solid-mono text-violet me-4" alt="" />
                                </div>
                                <div>
                                    <h4 class="mb-1">Innovative Thinking</h4>
                                    <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
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
                                    <h4 class="mb-1">Rapid Solutions</h4>
                                    <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
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
                                    <h4 class="mb-1">Top-Notch Support</h4>
                                    <p class="mb-0">Curabitur blandit lacus porttitor ridiculus mus.</p>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
