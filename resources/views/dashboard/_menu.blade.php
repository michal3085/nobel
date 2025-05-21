<header class="wrapper bg-gray">
    <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light">
        <div class="container">
            <div class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/index.html">
                        <img src="/assets/img/logo/nobel_black.png" srcset="/assets/img/logo/nobel_black.png 2x" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Moduły</a>
                                <ul class="dropdown-menu">
                                    @can('view', \Illuminate\Support\Facades\Auth::user())
                                        <li class="nav-item"><a class="dropdown-item" href="{{ route('user.index') }}">Użytkownicy</a></li>
                                    @endcan
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('dashboard') }}">Blog</a></li>
                                    <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Newsletter</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('newsletter.subscriber.index') }}">Subskrybenci</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="{{ route('newsletter.index') }}">Newsletter</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('qa.index') }}">Q&A</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100 text-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">{{ $authUser['name'] }}</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="{{ route('user.edit', ['user' => $authUser]) }}">Edycja</a></li>
                                    <li class="nav-item">
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Wyloguj
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</header>
