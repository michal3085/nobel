<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>NOBEL - Gotowe Rozwiązania</title>
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/colors/violet.css">
    <link rel="preload" href="/assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/project.js"></script>
</head>

<body>
<div class="content-wrapper">
    <!--     MENU    -->
        @include('_menu')
    <!--    /MENU   -->
    @if ($mainMenu === 'dashboard')
        @include('components.movieBanner')
    @endif
    <section class="wrapper bg-light ">
        <div class="container py-14 py-md-16">
            @yield('content')
        </div>
    </section>

</div>
<!-- /.content-wrapper -->
<footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <!--            <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />-->
                    <p class="mb-4">© <script>
                            document.write(new Date().getUTCFullYear());
                        </script> BMSOFTWARE <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social social-white">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Kontakt</h4>
                    <address class="pe-xl-15 pe-xxl-17">
                        Nobel Sp. z o.o.<br>
                        Plac Defilad 1<br>
                        00-901 Warszawa<br>
                    </address>
                    <a href="mailto:#">nobel@nobel.pro</a><br /> +48 22 499 99 00
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
{{--                <div class="widget">--}}
{{--                    <h4 class="widget-title text-white mb-3">Learn More</h4>--}}
{{--                    <ul class="list-unstyled  mb-0">--}}
{{--                        <li><a href="#">About Us</a></li>--}}
{{--                        <li><a href="#">Our Story</a></li>--}}
{{--                        <li><a href="#">Projects</a></li>--}}
{{--                        <li><a href="#">Terms of Use</a></li>--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <!-- /.widget -->--}}
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Newsletter</h4>
                    <p class="mb-5">Dołącz do naszego newslettera aby otrzymywać najnowsze informacje</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Adres e-mail</label>
                                        <input type="submit" value="Dołącz" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                    </div>
                                    <div id="mce-responses2" class="clear">
                                        <div class="response" id="mce-error-response2" style="display:none"></div>
                                        <div class="response" id="mce-success-response2" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                    <div class="clear"></div>
                                </div>
                            </form>
                        </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/theme.js"></script>
<script src="/assets/js/project.js"></script>
</body>

</html>
