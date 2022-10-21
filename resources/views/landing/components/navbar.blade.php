<nav
        class="navbar navbar-expand-lg navbar-dark fixed-top site-navigation main-nav navbar-togglable trans-navigation">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h3>&lt/Aqui tu logito&gt</h3>
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse has-dropdown" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="/" id="navbarWelcome">
                            Home
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="/about" class="nav-link js-scroll-trigger">
                            About
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="/services" class="nav-link js-scroll-trigger">
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="/pricing" class="nav-link js-scroll-trigger">
                            Precio
                        </a>
                    </li>

                    {{-- <li class="nav-item ">
                        <a href="project.html" class="nav-link js-scroll-trigger">
                            Projects
                        </a>
                    </li> --}}

                    <li class="nav-item ">
                        <a href="/contact" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>

                <ul class="ml-lg-auto list-unstyled m-0 nav-btn">
                    <li><a href="{{ route('login') }}" class="btn btn-trans-white btn-circled">Iniciar sesión</a></li>
                </ul>
                <ul class="ml-lg-auto list-unstyled m-0 nav-btn">
                    <li><a href="{{ route('register') }}" class="btn btn-trans-white btn-circled" title="SOLO PARA PRUEBAS" >Register</a></li>
                </ul>
            </div> <!-- / .navbar-collapse -->
        </div> <!-- / .Container -->
    </nav>