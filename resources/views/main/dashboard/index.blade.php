@extends('main._layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17">
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/edit.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-fuchsia mb-3" alt="" />
                            <h4>Content Marketing</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                            <a href="#" class="more hover link-fuchsia">Learn More</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/team.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-violet mb-3" alt="" />
                            <h4>Social Engagement</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                            <a href="#" class="more hover link-violet">Learn More</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/lamp.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-orange mb-3" alt="" />
                            <h4>Identity & Branding</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                            <a href="#" class="more hover link-orange">Learn More</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-md-6 col-xl-3">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <img src="./assets/img/icons/solid/delivery-box.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green mb-3" alt="" />
                            <h4>Product Design</h4>
                            <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
                            <a href="#" class="more hover link-green">Learn More</a>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Why Choose Sandbox?</h2>
                    <h3 class="display-3 mb-10 px-xl-10 px-xxl-15">Here are a few <span class="underline-3 style-2 yellow">reasons</span> why our customers choose Sandbox.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <ul class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
                        <div><img src="./assets/img/icons/solid/bulb.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-fuchsia me-4" alt="" /></div>
                        <div>
                            <h4>Collect Ideas</h4>
                            <p>Duis mollis commodo luctus cursus commodo tortor mauris.</p>
                        </div>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                        <div><img src="./assets/img/icons/solid/compare.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-violet me-4" alt="" /></div>
                        <div>
                            <h4>Data Analysis</h4>
                            <p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p>
                        </div>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
                        <div><img src="./assets/img/icons/solid/delivery-box.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-green me-4" alt="" /></div>
                        <div>
                            <h4>Finalize Product</h4>
                            <p>Vestibulum ligula porta felis maecenas faucibus mollis.</p>
                        </div>
                    </a> </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-content mt-6 mt-lg-8">
                <div class="tab-pane fade show active" id="tab2-1">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Collect Ideas</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-fuchsia">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-fuchsia mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab2-2">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <figure class="rounded shadow-lg"><img src="./assets/img/photos/se6.jpg" srcset="./assets/img/photos/se6@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Data Analysis</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-violet">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-violet mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab2-3">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg"><img src="./assets/img/photos/se7.jpg" srcset="./assets/img/photos/se7@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Finalize Product</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-green">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-green mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
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
