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
                        <a href="/" class="transition-none d-none d-lg-flex">
                            <img class="logo-dark" src="{{asset('/assets/img/logo/logo_purple_121x32.png')}}" alt="" />
                        </a>
                        <h3 class="text-dark fs-30 mb-0 d-lg-none">Nobel</h3>
                        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="order-1 order-lg-0 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav ms-lg-auto menu-links">
                            <li class="nav-item dropdown">
                                <a id="gotoweBiuroToggle"
                                   class="nav-link dropdown-toggle"
                                   href="{{ route('service.route.dispatch', ['service' => 'gotowe-biura']) }}">
                                    Gotowe biuro
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">Śródmieście Oxford Tower</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="">Śródmieście Piękna 15</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}">Wola Pańska 96</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Mokotów Carolina Medical Center</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'herbu-jana-5'])}}">Wilanów Herbu Janina 5</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">Wilanów Klimczaka 15 | coworking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'katowice-sokolska-30'])}}">Katowice Sokolska 30</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="wirtualneBiuroToggle"
                                   class="nav-link dropdown-toggle"
                                   href="{{ route('service.route.dispatch', ['service' => 'wirtualne-biuro']) }}">
                                    Wirtualne biuro
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}">Śródmieście Oxford Tower</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'wola-panska-96'])}}">Wola Pańska 96</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Mokotów Carolina Medical Center</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">Wilanów Klimczaka 15 | coworking</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'zmiany-krs'])}}">Zmiany w KRS</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                        <ul class="navbar-nav me-lg-auto menu-links">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'gotowe-spolki'])}}">Gotowa spółka</a>
{{--                                <a class="nav-link" href="">Gotowa spółka</a>--}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'rejestracja-spolki'])}}">Rejestracja spółki</a>
{{--                                <a class="nav-link" href="">Rejestracja spółki</a>--}}
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.index')}}">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const handleDropdownAndRedirect = (id) => {
            const el = document.getElementById(id);
            if (!el) return;

            el.addEventListener('click', function (e) {
                e.preventDefault();
                const dropdown = new bootstrap.Dropdown(el);
                dropdown.show();

                setTimeout(() => {
                    window.location.href = el.href;
                }, 250);
            });
        };

        handleDropdownAndRedirect('wirtualneBiuroToggle');
        handleDropdownAndRedirect('gotoweBiuroToggle');
    });
</script>
