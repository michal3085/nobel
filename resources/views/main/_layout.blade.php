<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/colors/violet.css">
    <link rel="preload" href="./assets/css/fonts/urbanist.css" as="style" onload="this.rel='stylesheet'">
</head>

<body>
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
            <div class="container justify-content-between align-items-center">
                <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                    <div class="navbar-brand"><a href="./index.html">
                            <img class="logo-dark" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                            <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
                        </a></div>
                    <div class="navbar-other ms-auto">
                        <ul class="navbar-nav flex-row align-items-center">
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn"><span></span></button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.d-flex -->
                    @include('main._menu')
                <!-- /.navbar-collapse-wrapper -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="./assets/img/photos/bg16.png">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">We bring solutions to make life <span class="underline-3 style-2 yellow">easier</span></h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">We are a creative company that focuses on long term relationships with customers.</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Read More</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <!-- /section -->
{{--    CONTENT--}}
    @yield('content')
{{--    /CONTENT--}}
</div>
<!-- /.content-wrapper -->
<footer class="bg-light">
    <div class="container pb-13 pb-md-15">
        <div class="card image-wrapper bg-full bg-image bg-overlay bg-overlay-300 mb-14" data-image-src="./assets/img/photos/bg16.png">
            <div class="card-body p-10 p-xl-12">
                <div class="row text-center">
                    <div class="col-xl-11 col-xxl-9 mx-auto">
                        <h2 class="fs-16 text-uppercase text-white mb-3">Join Our Community</h2>
                        <h3 class="display-3 mb-8 px-lg-8 text-white">We are <span class="underline-3 style-2 yellow">trusted</span> by over 5000+ clients. Join them now and grow your business.</h3>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
                <div class="d-flex justify-content-center">
                    <span><a class="btn btn-white rounded">Get Started</a></span>
                </div>
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gy-6 gy-lg-0">
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <img class="mb-4" src="./assets/img/logo-dark.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                    <p class="mb-4">© <script>
                            document.write(new Date().getUTCFullYear());
                        </script> Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
                    <nav class="nav social ">
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
                    <h4 class="widget-title  mb-3">Get in Touch</h4>
                    <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
                    <a href="mailto:#" class="link-body">info@email.com</a><br /> 00 (123) 456 78 90
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Learn More</h4>
                    <ul class="list-unstyled text-reset mb-0">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Story</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-12 col-lg-3">
                <div class="widget">
                    <h4 class="widget-title  mb-3">Our Newsletter</h4>
                    <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
                    <div class="newsletter-wrapper">
                        <!-- Begin Mailchimp Signup Form -->
                        <div id="mc_embed_signup2">
                            <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate " target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll2">
                                    <div class="mc-field-group input-group form-floating">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                        <label for="mce-EMAIL2">Email Address</label>
                                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary ">
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
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/theme.js"></script>
</body>

</html>
