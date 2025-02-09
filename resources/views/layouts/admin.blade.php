<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="Action Figure Marketplace" />
        <meta name="author" content="" />

        <title>@yield('title')</title>

        {{-- Styles --}}
        @stack('prepend-style') 
        @include('includes.style')
        <link
            href="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.css"
            rel="stylesheet"
        />
        @stack('addon-style')
    </head>

    <body>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <!-- Sidebar -->
                @include('includes.sidebar-admin')

                <!-- Page content -->
                <div id="page-content-wrapper">
                    <!-- Profile -->
                    <nav
                        class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
                        data-aos="fade-down"
                    >
                        <div class="container-fluid">
                            <button
                                class="btn btn-secondary d-md-none mr-auto mr-2"
                                id="menu-toggle"
                            >
                                &laquo; Menu
                            </button>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-toggle="collapse"
                                data-target="#navbarSupportedContent"
                            >
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div
                                class="collapse navbar-collapse"
                                id="navbarSupportedContent"
                            >
                                <!-- Desktop -->
                                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                    <li class="nav-item dropdown">
                                        <a
                                            href="#"
                                            class="nav-link"
                                            id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                        >
                                            <img
                                                src="/images/profile/profile-1.png"
                                                alt="Profile picture"
                                                class="rounded-circle mr-2 profile-picture"
                                            />
                                            Hi, {{ Auth::user()->name }}

                                            <div class="dropdown-menu">

                                                <a href="{{ route('home') }}" class="dropdown-item">
                                                    Beranda
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a href=href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" 
                                                        class="dropdown-item">
                                                    Keluar
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Phone -->
                                <ul class="navbar-nav d-block d-lg-none">

                                    <li class="nav-item">
                                        <a href="#" class="nav-link"
                                            >Hi, {{ Auth::user()->name }}</a
                                        >
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href=href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();" 
                                                class="dropdown-item nav-link">
                                            Keluar
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <!-- Section content -->
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Scripts --}}
        @stack('prepend-script')
        <script src="/vendor/jquery/jquery.min.js"></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/v/bs4/dt-1.13.8/datatables.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script src="/script/navbar-scroll.js"></script>

        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        @stack('addon-script')
    </body>
</html>
