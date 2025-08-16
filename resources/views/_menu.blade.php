<header class="wrapper bg-soft-primary">
    <nav class="navbar navbar-expand-lg center-nav navbar-light navbar-bg-light">
        <div class="container d-flex justify-content-between align-items-center">

            <!-- Logo po lewej -->
            <div class="navbar-brand me-auto">
                <a href="/">
                    <img class="logo-dark" src="{{ asset('/assets/img/logo/logo_purple_121x32.png') }}" alt="Logo" />
                </a>
            </div>

            <!-- Hamburger menu dla mobilnych -->
            <div class="navbar-other d-lg-none">
                <ul class="navbar-nav flex-row align-items-center">
                    <li class="nav-item">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>

            <!-- Menu po prawej -->
            <div class="navbar-collapse-wrapper d-flex align-items-center">
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-none px-lg-15">
                        <h3 class="text-dark fs-30 mb-0">Nobel</h3>
                        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body d-lg-flex">
                        <ul class="navbar-nav flex-column flex-lg-row flex-wrap">
                            <!-- Gotowe biuro dropdown -->
                            <li class="nav-item dropdown">
                                <a id="gotoweBiuroToggle"
                                   class="nav-link dropdown-toggle"
                                   href="{{ route('service.route.dispatch', ['service' => 'gotowe-biura']) }}">
                                    Biura
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'wola-panska-96'])}}">Centrum Pańska 96</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'oxford-tower'])}}">Śródmieście Chałubińskiego 8</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'piekna'])}}">Śródmieście Piękna 15</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Mokotów Pory 78</a>
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

                            <!-- Coworking dropdown -->
                            <li class="nav-item dropdown">
                                <a id="coworkingToggle"
                                   class="nav-link dropdown-toggle"
                                   href="{{ route('service.route.dispatch', ['service' => 'coworking']) }}">
                                    Coworking
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{ route('coworking.office.route.dispatch', ['office' => 'oxford-tower']) }}">Śródmieście Chałubińskiego 8</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href={{ route('coworking.office.route.dispatch', ['office' => 'wilanow-klimczaka-15']) }}>Wilanów Klimczaka 15</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Wirtualne biuro dropdown -->
                            <li class="nav-item dropdown">
                                <a id="wirtualneBiuroToggle"
                                   class="nav-link dropdown-toggle"
                                   href="{{ route('service.route.dispatch', ['service' => 'wirtualne-biuro']) }}">
                                    Wirtualne biuro
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'wola-panska-96'])}}">Centrum Pańska 96</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'oxford-tower'])}}">Śródmieście Chałubińskiego 8</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'carolina-medical-center'])}}">Mokotów Pory 78</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="{{route('virtual.office.route.dispatch', ['office' => 'wilanow-klimczaka-15'])}}">Wilanów Klimczaka 15</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Pozostałe linki -->
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'zmiany-krs'])}}">Zmiany w KRS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'rejestracja-spolki'])}}">Rejestracja spółek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('service.route.dispatch', ['service' => 'gotowe-spolki'])}}">Sprzedaż spółek</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('blog.show.all')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact.index')}}">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
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
        handleDropdownAndRedirect('coworkingToggle');
    });
</script>
