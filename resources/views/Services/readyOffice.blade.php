@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="container pb-3 pb-md-7">
            <div class="col-lg-12 text-center text-lg-start">
{{--                <h3 class="display-3 pe-xl-10 pe-xxl-15">--}}
{{--                    <span class="underline-3 style-2 green">Biura</span>--}}
{{--                </h3>--}}
                <h1 class="display-1 underline-3 style-2 green text-white mb-4">Biura <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Biura"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
            </div>
{{--            @include('Services.components._offices')--}}
<br>
            <section class="wrapper bg-light angled upper-end mb-3 mt-2">
                <div class="container pb-5 pb-md-7">
                    <div class="row g-4">
                        <!-- 1. Pańska 96 -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}" style="font-size: 20px;">
                                        <img src="./assets/img/offices/panska/Budynek_Pańska_96.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}" style="font-size: 20px;">Pańska 96 Centrum</a>
                                    </h2>
                                </div>
                            </article>
                        </div>

                        <!-- 2. Chałubińskiego -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">
                                        <img src="./assets/img/offices/oxf/4_new.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" style="font-size: 20px;" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">Chałubińskiego 8 Śródmieście</a>
                                    </h2>
                                </div>
                            </article>
                        </div>

                        <!-- 3. Piękna -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'piekna'])}}" style="font-size: 20px;">
                                        <img src="./assets/img/offices/piekna/piekna.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'piekna'])}}" style="font-size: 20px;">Piękna 15 Śródmieście</a>
                                    </h2>
                                </div>
                            </article>
                        </div>

                        <!-- 4. Pory -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">
                                        <img src="./assets/img/offices/carolina/BUDYNEK_PORY78.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}" style="font-size: 20px;">Pory 78 Mokotów</a>
                                    </h2>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="row g-4 mt-2 justify-content-center">
                        <!-- 5. Herbu Janina -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}">
                                        <img src="./assets/img/offices/HJ5/HJ5-above-nobel-2.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}" style="font-size: 20px;">Herbu Janina 5 Wilanów</a>
                                    </h2>
                                </div>
                            </article>
                        </div>

                        <!-- 6. Klimczaka -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">
                                        <img src="./assets/img/offices/klimczaka/klimczaka-15-nobel-19.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}" style="font-size: 20px;">Klimczaka 15 Wilanów</a>
                                    </h2>
                                </div>
                            </article>
                        </div>

                        <!-- 7. Sokolska -->
                        <div class="col-md-6 col-lg-3">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-4">
                                    <a href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}">
                                        <img src="./assets/img/offices/sokolska/katowice-sokolska-30-18-nobel-32.jpg" alt="" class="img-fluid" />
                                    </a>
                                    <figcaption><h5 class="from-top mb-0">Zobacz</h5></figcaption>
                                </figure>
                                <div class="post-header justify-content-center text-center">
                                    <h2 class="post-title h3 mb-3">
                                        <a class="link-dark" href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}" style="font-size: 20px;">Sokolska 30 Katowice</a>
                                    </h2>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>


                <h1 class="mb-4 underline-3 style-2 green">Dostarczamy rozwiązania, które ułatwiają życie.</h1>
                <div class="tab-pane fade show active" id="tab2-1">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg">
                                <img src="{{asset('assets/img/services/ro_1_1200.jpg')}}" srcset="{{asset('assets/img/services/ro_1_1200.jpg')}}" alt="Biuro serwisowane">
                            </figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <p style="font-size: 15px;">
                                Szukasz wygodnego, profesjonalnego miejsca do pracy bez zbędnych formalności? Biura serwisowane to rozwiązanie, które pozwala skupić się na tym, co najważniejsze – Twoim biznesie.
                            </p>
                            <p style="font-size: 15px;">
                                Biura serwisowane to:
                            </p>
                            <ul class="icon-list bullet-bg bullet-soft-green" style="font-size: 15px;">
                                <li><i class="uil uil-check"></i><b>Gotowe do pracy od zaraz</b> – w pełni umeblowane i nowoczesne przestrzenie, idealne zarówno dla jednej osoby, jak i całego zespołu.</li>
                                <li><i class="uil uil-check"></i><b>Różnorodne lokalizacje</b> – w centrum miasta, w dzielnicach biznesowych lub w spokojnych okolicach z dogodnym dojazdem. Wybierz miejsce, które najlepiej pasuje do Twoich potrzeb.</li>
                                <li><i class="uil uil-check"></i><b>Pełen pakiet udogodnień</b> – obsługa administracyjna, szybki internet, sale konferencyjne, recepcja i serwis sprzątający – wszystko w jednym miejscu.</li>
                                <li><i class="uil uil-check"></i><b>Formuła „plug & work”</b> – rozpocznij działalność tego samego dnia, bez remontów, zakupów i organizacji. To oszczędność czasu, elastyczność i profesjonalny wizerunek w jednym.</li>
                                <li><i class="uil uil-check"></i><b>Pracuj tak, jak lubisz</b> – my zajmiemy się resztą.</li>
                            </ul>
                            <p style="font-size: 15px;">
                                Biura serwisowane to wygoda i gotowość do działania od pierwszej chwili.
                            </p>
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

    <hr class="bg-grape border-2 border-top border-green"/>

    <div class="mt-4">
        @include('qa.display', ['section' => 'readyOffice', 'title' => 'Q&A'])
    </div>

@endsection
