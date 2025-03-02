@extends('_layout')

@section('content')
    <section class="wrapper bg-light">
        <div class="col-lg-12 text-center text-lg-start">
            <h3 class="display-3 pe-xl-10 pe-xxl-15">
                <span class="underline-3 style-2 violet">Wirtualne biuro</span>
            </h3>
        </div>

        <div class="container pb-5 pb-md-7">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <article>
                        <figure class="overlay overlay-1 hover-scale rounded mb-4">
                            <a href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}"> <img src="./assets/img/offices/oxf/4.jpg" alt="" class="img-fluid" /></a>
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
                            <a href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}"> <img src="./assets/img/offices/carolina/BUDYNEK_PORY78.jpg" alt="" class="img-fluid" /></a>
                            <figcaption>
                                <h5 class="from-top mb-0">Read More</h5>
                            </figcaption>
                        </figure>
                        <div class="post-header">
                            <h2 class="post-title h3 mb-3">
                                <a class="link-dark" href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Carolina Medical Center Pory 78
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
            </div>
            <div class="row g-4 mt-2 justify-content-center">


            </div>
        </div>

        <div class="tab-pane fade show active" id="tab2-1">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6">
                    <figure class="rounded shadow-lg"><img src="./assets/img/services/wirtualne_biuro1.jpg" srcset="./assets/img/services/wirtualne_biuro1.jpg" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <p style="font-size: 15px;">
                        Wirtualne biuro to wygoda, a przede wszystkim redukcja kosztów związanych m.in. z wynajmem lokalu i zatrudnieniem pracowników biurowych do jego obsługi. W ramach usługi odbierzemy Twoją korespondencję i na
                        życzenie prześlemy skan. Przydzielimy numer telefonu stacjonarnego, odbierzemy,
                        połączenie lub przełączymy bezpośrednio do Ciebie,
                        a także obsłużymy spotkanie w salce konferencyjnej.
                    </p>
                    <ul class="icon-list bullet-bg bullet-soft-violet" style="font-size: 15px;">
                        <li><i class="uil uil-check"></i><b>Indywidualny/prywatny numer telefonu</b></li>
                        <li><i class="uil uil-check"></i><b>Obsługa sekretarska</b> – odbiór połączeń przychodzących oraz odbiór i przekazywanie korespondencji.</li>
                        <li><i class="uil uil-check"></i><b>Sale konferencyjne na spotkania biznesowe</b></li>
                        <li><i class="uil uil-check"></i><b>Prestiżowy adres dla Twojej działalności</b></li></li>
                    </ul>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>


        <div class="pricing-wrapper position-relative mt-8">
            <h3 class="display-3 pe-xl-10 pe-xxl-15">
                <span class="underline-3 style-2 violet">Cennik</span>
            </h3>
            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
            <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
            <div class="row gy-6 mt-3 mt-md-5">
                <div class="col-md-6 col-lg-3">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="card-title">Adres Osobisty </h4>
                            <h6>Osoba Fizyczna</h6>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">100</span> <span class="price-duration">mc</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong>Adres rejestrowy</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Odbieranie korespondencji oraz przesyłek kurierskich</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>Informowanie mailem o odebranych przesyłakch</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Skanowanie </strong> </span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Nazwa firmy w holu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Sala konferencyjna</strong> 60 zł/h</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Indywidualny numer telefonu </strong></span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Zmiana adresu w KRS </strong></span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Wszystkie zmiany w KRS </strong></span></li>
                            </ul>
                            <a href="#" class="btn btn-violet rounded-pill">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 popular">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="card-title">Prestiżowy Adres </h4>
                            <h6>Firma</h6>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">200</span> <span class="price-duration">mc</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Adres rejestrowy</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Odbieranie korespondencji oraz przesyłek kurierskich</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>Informowanie mailem o odebranych przesyłakch</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Skanowanie </strong> </span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Nazwa firmy w holu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Sala konferencyjna</strong> 60 zł/h</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Indywidualny numer telefonu </strong></span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Zmiana adresu w KRS </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Wszystkie zmiany w KRS </strong>- 0 PLN<sup>*</sup></span></li>
                            </ul>
                            <a href="#" class="btn btn-violet rounded-pill">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 popular">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="./assets/img/icons/lineal/home.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="card-title">Prestiżowy Adres Plus</h4>
                            <h6>Firma</h6>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">300</span> <span class="price-duration">mc</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">199</span> <span class="price-duration">yr</span></div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Adres rejestrowy</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Odbieranie korespondencji oraz przesyłek kurierskich</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>Informowanie mailem o odebranych przesyłakch</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Skanowanie </strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong> Nazwa firmy w holu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Sala konferencyjna</strong> <br>2 h/mc</span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Indywidualny numer telefonu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Zmiana adresu w KRS </strong>- 0 PLN<sup>*</sup></span></li>
                                <li><i class="uil uil-times bullet-soft-red"></i><span><strong> Wszystkie zmiany w KRS </strong> -50%</span></li>
                            </ul>
                            <a href="#" class="btn btn-violet rounded-pill">Choose Plan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pricing card text-center">
                        <div class="card-body">
                            <img src="./assets/img/icons/lineal/briefcase-2.svg" class="svg-inject icon-svg icon-svg-md text-primary mb-3" alt="" />
                            <h4 class="card-title">Wirtualne biuro</h4>
                            <h6>Firma</h6>
                            <div class="prices text-dark">
                                <div class="price price-show"><span class="price-currency">PLN</span><span class="price-value">400</span> <span class="price-duration">mc</span></div>
                                <div class="price price-hide price-hidden"><span class="price-currency">$</span><span class="price-value">499</span> <span class="price-duration">yr</span></div>
                            </div>
                            <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                                <li><i class="uil uil-check"></i><span><strong>Adres rejestrowy</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong>Odbieranie korespondencji oraz przesyłek kurierskich</strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong>Informowanie mailem o odebranych przesyłakch</strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Skanowanie </strong> </span></li>
                                <li><i class="uil uil-check"></i><span><strong> Nazwa firmy w holu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Sala konferencyjna</strong> 4 h/mc</span></li>
                                <li><i class="uil uil-check"></i><span><strong> Indywidualny numer telefonu </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Zmiana adresu w KRS </strong></span></li>
                                <li><i class="uil uil-check"></i><span><strong> Wszystkie zmiany w KRS </strong> - 0 PLN <sup>**</sup></span></li>
                            </ul>
                            <a href="#" class="btn btn-violet rounded-pill">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <br>
<br>
<br>
<br>
<br>






        <div class="container pb-5 pb-md-7"> <!-- Zmniejszono padding-bottom -->

                <!--/.row -->

                {{--    PRICE    --}}
                <h3 class="display-3 mb-2 pe-xl-10 pe-xxl-15">
                    <span class="underline-3 style-2 yellow">CENNIK</span>
                </h3>

                <div class="container pt-5 pb-5">
                    <div class="table-responsive mt-2 mt-lg-0">
                        <table class="table table-borderless table-striped text-center">
                            <thead>
                            <tr>
                                <th class="text-start">Pakiety</th>
                                <th>
                                    <div class="h4 mb-1 text-nowrap">ADRES OSOBISTY<br>
                                        (osoba fizyczna)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">100</div>
                                </th>
                                <th>
                                    <div class="h4 mb-1 text-nowrap">PRESTIŻOWY ADRES<br>
                                        (firma)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">200</div>
                                </th>
                                <th>
                                    <div class="h4 mb-1">PRESTIŻOWY ADRES PLUS <br>
                                        (firma)
                                    </div>
                                    <div class="fs-15 fw-normal text-secondary">400</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="option text-start">ADRES REJESTROWY</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">ODBIERANIE KORESPONDENCJI oraz przesyłek kurierskich</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">INFORMOWANIE MAILEM O ODEBRANYCH PRZESYŁAKCH</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">SKANOWANIE</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">NAZWA FIRMY W HOLU</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">SALA KONFERENCYJNA</td>
                                <td>60 PLN / H</td>
                                <td>60 PLN / H</td>
                                <td>4H w miesiącu</td>
                            </tr>
                            <tr>
                                <td class="option text-start">INDYWIDUALNY NUMER TELEFONU</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="uil uil-check bg-pale-primary text-primary rounded-circle p-1"></i></td>
                            </tr>
                            <tr>
                                <td class="option text-start">WPISANIE ADRESU W KRS</td>
                                <td>-</td>
                                <td>250 PLN*</td>
                                <td>0 PLN*</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th class="w-25"></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="1"
                                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="2"
                                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                                <th><a class="btn btn-soft-primary rounded-pill mt-1" data-info="3"
                                       data-bs-toggle="modal" data-bs-target="#modal-virtual-office">Zapytaj</a></th>
                            </tr>
                            </tfoot>
                        </table>
                        * • Cena nie zawiera opłaty sądowej.
                    </div>
                    <!-- /.table-responsive -->
                </div>
                {{--    /PRICE    --}}
            </section>
        </div>
    </section>

    {{--  OFFICES CARDS  --}}
    {{--        @include('Services.components.localsCards')--}}
    @include('Services.components._offices')
    {{--  /OFFICES CARDS  --}}

    <div class="col-lg-12 mb-2 mt-2">
        <img src="{{asset('./assets/img/icons/lineal/megaphone.svg')}}" class="svg-inject icon-svg icon-svg-md mb-4"
             alt=""/>
        <h2 class="display-4 mb-3">Usługa biuro wirtualne to:</h2>
        <div class="row gy-3 gx-xl-8">
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Obniżenie kosztów:</b></span>
                        <br>
                        <span class="justify-content-center">
                            Zamiast ponosić koszty związane z wynajmem tradycyjnego biura, korzystaj z wirtualnego biura, co
                            jest znacznie tańsze.
                        </span>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Elastyczność:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Ty i Twoi współpracownicy możecie pracować z dowolnego miejsca w świecie, co ułatwia
                            zarządzanie
                            czasem i pozwala na dostosowanie się do zmieniających potrzeb biznesowych.
                        </div>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Bezpieczeństwo:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Wykorzystaj adres rejestrowy dla siedziby swojej firmy, który będzie wykorzystywany na
                            fakturach i
                            wszelkich innych dokumentach firmowych, zamiast rejestracji firmy pod adresem domowym.
                        </div>
                    </li>
                </ul>
            </div>
            <!--/column -->
            <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                    <li><span><i class="uil uil-check"></i><b> Profesjonalny wizerunek:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Korzystanie z usług wirtualnego biura pozwala firmie zachować profesjonalny wizerunek, nawet
                            jeśli
                            nie ma ona fizycznej siedziby. Biznesowy adres rejestrowy siedziby Twojej firmy znajdujący
                            się w
                            największym mieście w Polsce, obsługa korespondencji, możliwość posiadania numeru telefonu
                            firmowego stacjonarnego oraz korzystanie z sal konferencyjnych wzmocnią zaufanie Twoich
                            klientów.
                        </div>
                    </li>
                    <li><span><i class="uil uil-check"></i><b> Skupienie się na działalności biznesowej:</b></span>
                        <br>
                        <div class="d-flex justify-content-center">
                            Outsorsuj wykonywanie codziennych zadań biurowych i skup się na istotnych aspektach
                            prowadzenia
                            firmy.
                        </div>
                    </li>
                </ul>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>

    @include('Services.modal._modal')
    <script>
        document.querySelectorAll('[data-bs-toggle="modal"]').forEach(function (button) {
            button.addEventListener('click', function () {
                // Pobierz wartość data-info z klikniętego przycisku
                const info = this.getAttribute('data-info');

                // Pobierz element select
                const select = document.getElementById('nobel-vo-topic-id');

                // Ustaw wartość w zależności od data-info
                if (info === '1') {
                    select.value = "ADRES OSOBISTY";
                } else if (info === '2') {
                    select.value = "PRESTIŻOWY ADRES";
                } else if (info === '3') {
                    select.value = "PRESTIŻOWY ADRES PLUS";
                }
            });
        });

        $(document).ready(function () {
            var $spinner = $('.spinner-border'); // Pobierz spinner raz, aby nie szukać go wielokrotnie

            $('#nobel-submit-button').click(function (e) {
                e.preventDefault();

                // Pokaż spinner
                $spinner.removeClass('d-none');

                $('#nobel-virtual-office-form-id').find("input").removeClass('is-invalid');
                $('#nobel-virtual-office-form-id').find("select").removeClass('is-invalid');
                $('#nobel-virtual-office-form-id').find("textarea").removeClass('is-invalid');

                $.ajax({
                    url: "{{ route('service.send.mail') }}",
                    method: "POST",
                    dataType: 'json',
                    data: $('#nobel-virtual-office-form-id').serialize(),
                    success: function (data) {
                        // Ukryj spinner po zakończeniu
                        $spinner.addClass('d-none');

                        // Schowanie modala po sukcesie
                        $('#modal-virtual-office').modal('hide');
                        location.reload(); // Odśwież stronę
                    },
                    error: function (response) {
                        // Ukryj spinner w przypadku błędu
                        $spinner.addClass('d-none');

                        // Obsługa błędów walidacji
                        if (response.status === 422) {
                            var errors = response.responseJSON.errors;

                            // Dodanie klasy 'is-invalid' dla każdego błędnego pola
                            $.each(errors, function (key, value) {
                                var inputElement = $('[name="' + key + '"]');
                                inputElement.addClass('is-invalid');
                            });
                        }
                    }
                });
            });
        });
    </script>
@endsection
