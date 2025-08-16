@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7">

            {{-- Tytuł --}}
            <div class="row">
                <div class="col-12 text-center text-lg-start mb-3">
                    <h3 class="display-3 pe-xl-10 pe-xxl-15 mb-0">
                        <span class="underline-3 style-2 yellow">Coworking</span>
                    </h3>
                </div>
            </div>

            {{-- Opis pod tytułem --}}
            <div class="row">
                <div class="col-12 text-center text-lg-start mb-5">
                    <p class="lead mb-0">
                        Unikaj kosztów wynajmu biura, płacąc tylko za to, czego faktycznie potrzebujesz.
                    </p>
                </div>
            </div>

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
                                    Chałubińskiego 8 — Śródmieście
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
                                    Klimczaka 15 — Wilanów
                                </a>
                            </h2>
                        </header>
                    </article>
                </div>
            </div>

            <hr class="bg-violet border-2 border-top border-violet my-5" />

            <div class="mt-4">
                @include('qa.display', ['section' => 'coworkingOffice', 'title' => 'Q&A'])
            </div>

        </div>
    </section>
@endsection
