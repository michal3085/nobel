@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-6">

            <h1 class="display-1 underline-3 style-2 aqua text-white mb-4">Coworking <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Coworking"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                <br>

{{--            <section class="wrapper bg-aqua lower-start" style="border-radius: 100px 100px 100px 100px;">--}}
{{--                <div class="container pt-7 pt-md-11 pb-8 mb-20">--}}
{{--                    <div class="row gx-0 gy-10 align-items-center">--}}
{{--                        <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">--}}
{{--                            <h1 class="display-1 text-white mb-4">Coworking <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="miejsce do pracy"></span><span class="cursor text-primary" data-owner="typer"></span></h1>--}}
{{--                            <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">Unikaj kosztów wynajmu biura, płacąc tylko za to, czego faktycznie potrzebujesz.</p>--}}
{{--                            <div>--}}
{{--                                <a class="btn btn-lg btn-primary rounded">Zapytaj o dostępność</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /column -->--}}
{{--                        <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">--}}
{{--                            <div class="position-relative">--}}
{{--                                <a href="./assets/media/movie.mp4" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>--}}
{{--                                <figure class="rounded shadow-lg"><img src="./assets/img/photos/about13.jpg" srcset="./assets/img/photos/about13@2x.jpg 2x" alt=""></figure>--}}
{{--                            </div>--}}
{{--                            <!-- /div -->--}}
{{--                        </div>--}}
{{--                        <!-- /column -->--}}
{{--                    </div>--}}
{{--                    <!-- /.row -->--}}
{{--                </div>--}}
{{--                <!-- /.container -->--}}
{{--            </section>--}}

{{--            <hr class="bg-violet border-2 border-top border-aqua my-5" />--}}

            {{-- Tytuł --}}
{{--            <div class="row">--}}
{{--                <div class="col-12 text-center text-lg-start mb-3">--}}
{{--                    <h3 class="display-3 pe-xl-10 pe-xxl-15 mb-0">--}}
{{--                        <span class="underline-3 style-2 ">Coworking</span>--}}
{{--                    </h3>--}}
{{--                </div>--}}
{{--            </div>--}}

            {{-- Opis pod tytułem --}}
{{--            <div class="row">--}}
{{--                <div class="col-12 text-center text-lg-start mb-5">--}}
{{--                    <p class="lead mb-0">--}}
{{--                        Unikaj kosztów wynajmu biura, płacąc tylko za to, czego faktycznie potrzebujesz.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}

            {{-- Kafelki (wyrównane do lewej) --}}
            <div class="row g-4">
                <div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex">
                    <article class="w-100 text-center">
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{ route('coworking.office.route.dispatch', ['office' => 'oxford-tower']) }}">
                                <img src="./assets/img/offices/oxf/4_new.jpg" alt="Chałubińskiego 8 Śródmieście" class="img-fluid rounded" />
                            </a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <header class="post-header">
                            <h2 class="post-title h5 mb-0">
                                <a class="link-dark" href="{{ route('coworking.office.route.dispatch', ['office' => 'wilanow-klimczaka-15']) }}s">
                                    Chałubińskiego 8 Śródmieście
                                </a>
                            </h2>
                        </header>
                    </article>
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-3 d-flex">
                    <article class="w-100 text-center">
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{ route('coworking.office.route.dispatch', ['office' => 'wilanow-klimczaka-15']) }}">
                                <img src="./assets/img/offices/klimczaka/klimczaka-15-nobel-19.jpg" alt="Klimczaka 15 Wilanów" class="img-fluid rounded" />
                            </a>
                            <figcaption>
                                <h5 class="from-top mb-0">Dowiedz się więcej</h5>
                            </figcaption>
                        </figure>
                        <header class="post-header">
                            <h2 class="post-title h5 mb-0">
                                <a class="link-dark" href="{{ route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15']) }}">
                                    Klimczaka 15 Wilanów
                                </a>
                            </h2>
                        </header>
                    </article>
                </div>
            </div>

            <div class="container pt-10 pt-md-12 pb-10 pb-md-12">
                <div class="row">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <h2 class="fs-16 text-uppercase text-line text-aqua mb-3">Co robimy?</h2>
                        <h3 class="display-4 mb-9 text-nowrap">Tworzymy przestrzenie coworkingowe wspierające produktywność i współpracę.</h3>
                    </div>
                    <!-- /column -->
                </div>

                <div class="row gx-md-8 gy-8 mb-14 mb-md-10">
                    <div class="col-md-6 col-lg-3">
                        <div class="icon btn btn-block btn-lg btn-soft-aqua pe-none mb-6"> <i class="uil uil-check"></i> </div>
                        <h4>Elastyczność</h4>
                        <p class="mb-3">Wynajem krótkoterminowy lub długoterminowy, dopasowany do Twoich potrzeb.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon btn btn-block btn-lg btn-soft-aqua pe-none mb-6"> <i class="uil uil-shield-exclamation"></i> </div>
                        <h4>Wyposażenie</h4>
                        <p class="mb-3">W pełni umeblowane stanowiska gotowe do pracy od zaraz.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon btn btn-block btn-lg btn-soft-aqua pe-none mb-6"> <i class="uil uil-location-point"></i> </div>
                        <h4>Lokalizacja</h4>
                        <p class="mb-3">Dogodny dojazd i bliskość usług w otoczeniu biura.</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="icon btn btn-block btn-lg btn-soft-aqua pe-none mb-6"> <i class="uil uil-users-alt"></i> </div>
                        <h4>Networking</h4>
                        <p class="mb-3">Współpraca i wymiana doświadczeń z innymi firmami w coworkingu.</p>
                    </div>
                    <!--/column -->
                </div>
            </div>

            <hr class="bg-violet border-2 border-top border-aqua my-5" />

            <div class="mt-4">
                @include('qa.display', ['section' => 'coworkingOffice', 'title' => 'Q&A'])
            </div>

        </div>
    </section>
@endsection
