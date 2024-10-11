<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
        <div class="container justify-content-between align-items-center">
            <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
                <div class="navbar-brand"><a href="/">
                        <img class="logo-dark" src="./assets/img/nobel_black.png" srcset="./assets/img/nobel_black@2x.png 2x" alt="" />
                        <img class="logo-dark" src="./assets/img/nobel_black.png" srcset="./assets/img/nobel_black@2x.png 2x" alt="" />
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
            <!-- /.d-MENU -->
            <div class="navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                        <a href="/" class="transition-none d-none d-lg-flex"><img class="logo-dark" src="{{asset('/assets/img/logo/nobel_black.png')}}" srcset="{{asset('/assets/img/nobel_black.png')}}" alt="" />
                            <img class="logo-dark" src="{{asset('/assets/img/logo/nobel_black.png')}}" alt="" /></a>
                        </a>
                        <h3 class="text-dark fs-30 mb-0 d-lg-none">Nobel</h3>
                        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class=" order-1 order-lg-0 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Gotowe biuro</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">OXFORD TOWER CH8</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}">WOLA PAŃSKA 96</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">MOKOTÓW CAROLINA MEDICAL CENTER</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}">WILANÓW HERBU JANINA 5 HJ5</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">WILANÓW KLIMCZAKA 15</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}">KATOWICE – SOKOLSKA 30 NEW</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Wirtualne biuro</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./services.html">Services I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services II</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./about.html">About I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./about2.html">About II</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./shop.html">Shop I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./shop2.html">Shop II</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./shop-product.html">Product Page</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./shop-cart.html">Shopping Cart</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./shop-checkout.html">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./contact.html">Contact I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./contact2.html">Contact II</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./contact3.html">Contact III</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Career</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./career.html">Job Listing I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./career2.html">Job Listing II</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./career-job.html">Job Description</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Utility</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./404.html">404 Not Found</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./page-loader.html">Page Loader</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./signin.html">Sign In I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./signin2.html">Sign In II</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./signup.html">Sign Up I</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./signup2.html">Sign Up II</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./terms.html">Terms</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Gotowa spólka</a>
                                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                    <li class="mega-menu-content">
                                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block1.svg" alt=""></div>
                                                    <span>About</span>
                                                </a>
                                            </li>
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block2.svg" alt=""></div>
                                                    <span>Blog</span>
                                                </a>
                                            </li>
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block3.svg" alt=""></div>
                                                    <span>Call to Action</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--/.row -->
                                    </li>
                                    <!--/.mega-menu-content-->
                                </ul>
                                <!--/.dropdown-menu -->
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Rejestracja spółki</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without Sidebar</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with Left Sidebar</a></li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Posts</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Post without Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Post with Sidebar</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Post with Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Zmiany w KRS</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="mega-menu-content">
                                        <div class="row gx-0 gx-lg-3">
                                            <div class="col-lg-4">
                                                <h6 class="dropdown-header">Usage</h6>
                                                <ul class="list-unstyled cc-2 pb-lg-1">
                                                    <li><a class="dropdown-item" href="./docs/index.html">Get Started</a></li>
                                                    <li><a class="dropdown-item" href="./docs/forms.html">Forms</a></li>
                                                    <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a></li>
                                                    <li><a class="dropdown-item" href="./docs/changelog.html">Changelog</a></li>
                                                    <li><a class="dropdown-item" href="./docs/credits.html">Credits</a></li>
                                                </ul>
                                                <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                                                <ul class="list-unstyled cc-2">
                                                    <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Colors</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Fonts</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/icons-svg.html">SVG Icons</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/icons-font.html">Font Icons</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/backgrounds.html">Backgrounds</a></li>
                                                    <li><a class="dropdown-item" href="./docs/styleguide/misc.html">Misc</a></li>
                                                </ul>
                                            </div>
                                            <!--/column -->
                                            <div class="col-lg-8">
                                                <h6 class="dropdown-header">Elements</h6>
                                                <ul class="list-unstyled cc-3">
                                                    <li><a class="dropdown-item" href="./docs/elements/accordion.html">Accordion</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/alerts.html">Alerts</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/animations.html">Animations</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/avatars.html">Avatars</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/background.html">Background</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/badges.html">Badges</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/buttons.html">Buttons</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/card.html">Card</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/carousel.html">Carousel</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/dividers.html">Dividers</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/form-elements.html">Form Elements</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/image-hover.html">Image Hover</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/image-mask.html">Image Mask</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/lightbox.html">Lightbox</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/player.html">Media Player</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/modal.html">Modal</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/pagination.html">Pagination</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/progressbar.html">Progressbar</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/shadows.html">Shadows</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/shapes.html">Shapes</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/tables.html">Tables</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/tabs.html">Tabs</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/text-animations.html">Text Animations</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/tiles.html">Tiles</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                                                    <li><a class="dropdown-item" href="./docs/elements/typography.html">Typography</a></li>
                                                </ul>
                                            </div>
                                            <!--/column -->
                                        </div>
                                        <!--/.row -->
                                    </li>
                                    <!--/.mega-menu-content-->
                                </ul>
                                <!--/.dropdown-menu -->
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Q&A</a>
                                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                                    <li class="mega-menu-content">
                                        <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block1.svg" alt=""></div>
                                                    <span>About</span>
                                                </a>
                                            </li>
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block2.svg" alt=""></div>
                                                    <span>Blog</span>
                                                </a>
                                            </li>
                                            <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                                                    <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block3.svg" alt=""></div>
                                                    <span>Call to Action</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--/.row -->
                                    </li>
                                    <!--/.mega-menu-content-->
                                </ul>
                                <!--/.dropdown-menu -->
                            </li>

                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="offcanvas-body d-lg-none order-4 mt-auto">
                        <div class="offcanvas-footer">
                            <div>
                                <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
