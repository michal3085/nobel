@extends('_layout')

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


    @include('main.sections._services')

    @include('main.sections._blog')

@endsection
