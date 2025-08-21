@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
                <h3 class="display-3 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 green">Biura - Znajdz swoje miejsce u nas</span>
                </h3>
            </div>
{{--            @include('Services.components._offices')--}}
<br>
            <section class="wrapper bg-light angled upper-end mb-3 mt-2">
                <div class="container pb-5 pb-md-7">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}"> <img src="./assets/img/offices/oxf/4_new.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Zobacz</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">Chałubińskiego 8 Śródmieście</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
{{--                                        <li class="post-date"><span>cena od 1500 PLN</span></li>--}}
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'piekna'])}}"> <img src="./assets/img/offices/piekna/piekna.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Zobacz</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'piekna'])}}">Piękna 15
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
                                        <h5 class="from-top mb-0">Zobacz</h5>
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
{{--                                        <li class="post-date"><span>Cena od 2500 PLN</span></li>--}}
                                    </ul>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}"> <img src="./assets/img/offices/carolina/BUDYNEK_PORY78.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Zobacz</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Pory 78 Mokotów</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
{{--                                        <li class="post-date"><span>cena od 2500</span></li>--}}
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
                                        <h5 class="from-top mb-0">Zobacz</h5>
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
{{--                                        <li class="post-date"><span>cena od 1800</span></li>--}}
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}"> <img src="./assets/img/offices/klimczaka/klimczaka-15-nobel-19.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Zobacz</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">Klimczaka 15
                                            Wilanów</a>
                                    </h2>
                                </div>
                                <div class="post-footer">
                                    <ul class="post-meta">
{{--                                        <li class="post-date"><span>cena od 2000</span></li>--}}
                                    </ul>
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}"> <img src="./assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-32.jpg" alt="" class="img-fluid" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Zobacz</h5>
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
{{--                                        <li class="post-date"><span>cena od 2000</span></li>--}}
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
                            <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
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
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
            </section>

        </div>
    </section>

    <section class="section-frame overflow-hidden" style="background: linear-gradient(45deg, #f6f7fb, #d1f5d2);">
        <div class="wrapper bg-transparent">
            <div class="container py-13 py-md-17 text-center">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8 mx-auto">
                        <h1 class="display-1 mb-4 text-green" style="font-weight: 700; line-height: 1.2;">
                            Wybierz nas, abyśmy mogli wspierać każdy etap Twojego rozwoju.
                        </h1>
                        <a href="{{ route('contact.index') }}" class="btn btn-lg btn-green">Skontaktuj się z nami</a>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.wrapper -->
    </section>

    <div class="mt-4">
        @include('qa.display', ['section' => 'readyOffice', 'title' => 'Q&A'])
    </div>

@endsection
