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
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">OXFORD TOWER CH8</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}">WOLA PAŃSKA 96</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">MOKOTÓW CAROLINA MEDICAL CENTER</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}">WILANÓW HERBU JANINA 5 HJ5</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'gotowe-spolki'])}}">Gotowa spółka</a>
                            </li>

                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'rejestracja-spolki'])}}">Rejestracja spółki</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'zmiany-krs'])}}">Zmiany w KRS</a>
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
