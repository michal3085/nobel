<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nobel.pro - Profesjonalne doradztwo korporacyjne, rejestracja spółek, wirtualne biuro w Warszawie, wynajem biur, obsługa księgowa i szkolenia biznesowe. Oferujemy wsparcie administracyjne, outsourcing biura oraz gotowe spółki dla firm. Zadbaj o profesjonalny wizerunek swojej firmy z Nobel.pro.">
    <meta name="keywords" content="doradztwo korporacyjne, rejestracja spółek, wirtualne biuro Warszawa, wynajem biura, obsługa księgowa, sekretariat telefoniczny, szkolenia biznesowe, komunikacja medialna, negocjacje, obsługa administracyjna, outsourcing biura, gotowe spółki, prestiżowy adres, wsparcie dla przedsiębiorców, usługi biznesowe">
    <meta name="author" content="elemis">
    <title>NOBEL - Gotowe Rozwiązania</title>

    <!-- Domyślne favicon (dla przeglądarek, które nie obsługują prefers-color-scheme) -->
    <link rel="shortcut icon" href="{{asset('/assets/img/logo/favicon.png')}}" id="default-favicon">

    <!-- Favicon dla trybu jasnego -->
    <link rel="icon" href="{{asset('/assets/img/logo/favicon_black.png')}}" media="(prefers-color-scheme: light)">

    <!-- Favicon dla trybu ciemnego -->
    <link rel="icon" href="{{asset('/assets/img/logo/favicon.png')}}" media="(prefers-color-scheme: dark)">

    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/styleV2.css">
    <link rel="stylesheet" href="/assets/css/colors/nobel.css">
    <link rel="preload" href="/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/project.js"></script>
    <script src="/vendors/summernote-0.9.0-dist/summernote-lite.css"></script>
</head>

<style>
    .nav.social a i {
        color: inherit;
    }

    .nav.social a:nth-child(1) i { color: #1DA1F2; } /* Twitter */
    .nav.social a:nth-child(2) i { color: #1877F2; } /* Facebook in use */
    .nav.social a:nth-child(3) i { color: #EA4C89; } /* Dribbble */
    .nav.social a:nth-child(4) i { color: #E4405F; } /* Instagram in use */
    .nav.social a:nth-child(5) i { color: #FF0000; } /* YouTube */
</style>


<body>
@include('components._coockies')

@if (request()->get('color') === 'false' || ! request()->get('color'))
    <div class="bg-light py-2 border-bottom">
        <div class="container-fluid d-flex justify-content-end">
            <div class="d-flex align-items-center gap-3">
                <a href="mailto:nobel@nobel.pro" class="text-decoration-none text-dark d-flex align-items-center">
                    <i class="bi bi-envelope fs-12 me-2"></i><span class="fs-12">nobel@nobel.pro</span>
                </a>
                |
                <a href="tel:+48224999900" class="text-decoration-none text-dark d-flex align-items-center">
                    <i class="bi bi-telephone fs-12 me-2"></i><span class="fs-12">+48 22 499 99 00</span>
                </a>
            </div>
        </div>
    </div>
@else
    <div class="bg-dark py-2 border-bottom">
        <div class="container-fluid d-flex justify-content-end">
            <div class="d-flex align-items-center gap-3">
                <a href="mailto:nobel@nobel.pro" class="text-decoration-none text-white d-flex align-items-center">
                    <i class="bi bi-envelope fs-12 me-2"></i><span class="fs-12 text-white">nobel@nobel.pro</span>
                </a>
                |
                <a href="tel:+48224999900" class="text-decoration-none text-white d-flex align-items-center">
                    <i class="bi bi-telephone fs-12 me-2"></i><span class="fs-12 text-white">+48 22 499 99 00</span>
                </a>
            </div>
        </div>
    </div>
@endif

</body>
<div class="content-wrapper">
    <!--     MENU    -->
        @include('_menu')
    <!--    /MENU   -->
    @if (isset($mainMenu) && $mainMenu === 'dashboard')
        @include('components.movieBanner')
    @endif
    <section class="wrapper bg-light ">
        <div class="container py-14 py-md-10">
            @yield('content')
        </div>
    </section>

</div>
<!-- /.content-wrapper -->
<footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">

            <div class="col-md-4 col-lg-2">
                <div class="widget">
                    <p class="mb-4" style="font-size: 12px;">© 2025</script> BMSOFTWARE <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social">
{{--                        <a href="#"><i class="uil uil-twitter" style="color: #1DA1F2;"></i></a>--}}
                        <a href="#"><i class="uil uil-facebook-f" style="color: #1877F2;"></i></a>
{{--                        <a href="#"><i class="uil uil-dribbble" style="color: #EA4C89;"></i></a>--}}
                        <a href="#"><i class="uil uil-instagram" style="color: #E4405F;"></i></a>
{{--                        <a href="#"><i class="uil uil-youtube" style="color: #FF0000;"></i></a>--}}
                    </nav>
                </div>
            </div>

            <!-- /column -->
            <div class="col-md-4 col-lg-4">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">NOBEL Biuro Obsługi Klienta</h4>
                    <div class="d-flex gap-4">
                        <address>
                            Nobel.pro Sp. z o.o.<br>
                            Ul. Chałubińskiego 8<br>
                            Piętro 22, lokal 22.52<br>
                            00-613 Warszawa<br>
                        </address>
{{--                        <address>--}}
{{--                            NIP: 7010225520<br>--}}
{{--                            KRS: 0000353244<br>--}}
{{--                        </address>--}}
                    </div>

                    <div class="d-flex gap-4">
                    </div>
                    <a href="mailto:#">nobel@nobel.pro</a><br />
                    +48 22 499 99 00<br>
                    +48 885 588 511
                </div>
            </div>

            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Nasze linki</h4>
                    <ul class="list-unstyled  mb-0">
                        <li><a href="https://wyszukiwarka-krs.ms.gov.pl/">Wyszukiwarka KRS</a></li>
                        <li><a href="https://ekrs.ms.gov.pl/s24/">E-KRS</a></li>
                        <li><a href="https://www.gov.pl/web/sprawiedliwosc/">Ministerstwo Sprawiedliwości</a></li>
                        <li><a href="https://crbr.podatki.gov.pl/adcrbr/#/">Centralny Rejestr Beneficjentów Rzeczywistych</a></li>
                        <li><a href="{{ route('politics.private') }}">Polityka Prywatności</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Dołącz do grupy mailingowej</h4>
                    <p class="mb-5">w celu otrzymywania najnowszych wiadomości</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                            <form action="{{ route('newsletter.add.subscriber') }}" method="post" class="validate dark-fields">
                                @csrf

                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="ns_mail_address" class="required email form-control" placeholder="Email Address">
                                        <label for="mce-EMAIL2">Adres e-mail</label>
                                        <input type="submit" value="Dołącz" name="subscribe" class="btn btn-primary ">
                                    </div>
{{--                                    <div id="mce-responses2" class="clear">--}}
{{--                                        <div class="response" id="mce-error-response2" style="display:none"></div>--}}
{{--                                        <div class="response" id="mce-success-response2" style="display:none"></div>--}}
{{--                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>--}}
{{--                                    <div class="clear"></div>--}}

                            </form>
                        <!--End mc_embed_signup-->
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
@include('components.success')
@include('components.error')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="/assets/js/project.js"></script>
<script src="/vendors/summernote-0.9.0-dist/summernote-lite.js"></script>
@yield('js')
</body>

</html>
