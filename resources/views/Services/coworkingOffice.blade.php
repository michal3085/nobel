@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-5 pb-md-7">

            {{-- Tytuł --}}
            <div class="row">
                <div class="col-12 text-center text-lg-start mb-3">
                    <h3 class="display-3 pe-xl-10 pe-xxl-15 mb-0">
                        <span class="underline-3 style-2 ">Coworking</span>
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

            <hr class="bg-violet border-2 border-top border-violet my-5" />

            <h1 class="mb-4 underline-3 style-2 green">Tworzymy przestrzenie coworkingowe wspierające produktywność i współpracę.</h1>
            <div class="tab-pane fade show active" id="tab2-1">
                <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                    <div class="col-lg-6">
                        <figure class="rounded shadow-lg"><img src="./assets/img/photos/se5.jpg" srcset="./assets/img/photos/se5@2x.jpg 2x" alt="Coworking przestrzeń do pracy"></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <p style="font-size: 15px; text-align: justify;">
                            Coworking to nowoczesna, w pełni wyposażona przestrzeń do pracy, łącząca komfort, elastyczność i doskonałą lokalizację.
                            Niezależnie od tego, czy pracujesz indywidualnie, czy w zespole, znajdziesz idealne miejsce, które zapewnia efektywną współpracę oraz inspirującą atmosferę.
                        </p>
                        <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
                            <li><i class="uil uil-check"></i><b>Elastyczność</b> – wynajem krótkoterminowy lub długoterminowy, dopasowany do Twoich potrzeb.</li>
                            <li><i class="uil uil-check"></i><b>Wyposażenie</b> – w pełni umeblowane stanowiska gotowe do pracy od zaraz.</li>
                            <li><i class="uil uil-check"></i><b>Koszty</b> – jedna miesięczna opłata obejmująca czynsz, media i sprzątanie.</li>
                            <li><i class="uil uil-check"></i><b>Lokalizacja</b> – dogodny dojazd i bliskość usług w otoczeniu biura.</li>
                            <li><i class="uil uil-check"></i><b>Usługi dodatkowe</b> – recepcja, obsługa poczty, sale konferencyjne i strefy relaksu.</li>
                            <li><i class="uil uil-check"></i><b>Networking</b> – współpraca i wymiana doświadczeń z innymi firmami w coworkingu.</li>
                            <li><i class="uil uil-check"></i><b>Skalowalność</b> – możliwość łatwego zwiększania lub zmniejszania powierzchni wraz z rozwojem firmy.</li>
                        </ul>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>



            <hr class="bg-violet border-2 border-top border-violet my-5" />

            <div class="mt-4">
                @include('qa.display', ['section' => 'coworkingOffice', 'title' => 'Q&A'])
            </div>

        </div>
    </section>
@endsection
