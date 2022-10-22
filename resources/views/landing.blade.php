<x-guest-layout>
    <header>
        <nav x-data="{ open: false }"
            class="nav-top flex flex-nowrap lg:flex-start items-center z-20 fixed top-0 left-0 right-0 bg-gradient-to-r from-sky-300 via-sky-500 to-sky-300{{-- bg-indigo-600 bg-gradient-to-r from-indigo-800 via-indigo-700 to-green-500 dark:from-gray-800 dark:via-gray-700 dark:to-green-700 --}} overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full">
            <div class="container mx-auto px-4 xl:max-w-6xl ">
                <!-- mobile navigation -->
                <div class="flex flex-row justify-between py-3 lg:hidden">
                    <!-- logo -->
                    <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
                        <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden">
                            <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="src/img/logo.png"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                viewBox="0 0 300.000000 300.000000">
                                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                    fill="currentColor" stroke="none">
                                    <path class="text-pink-500"
                                        d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                    <path class="text-indigo-500"
                                        d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                -687 428 -110 29 -111 28 -153 -37z" />
                                    <path class="text-indigo-500"
                                        d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                217 -10 16 -14 14 -45 -18z" />
                                </g>
                            </svg><span class="text-gray-200">Translator-Speech</span>
                        </h2>
                    </a>

                    <!-- navbar toggler -->
                    <div class="right-0 flex items-center">
                        <!-- Mobile menu button-->
                        <button id="navbartoggle" type="button"
                            class="inline-flex items-center justify-center text-gray-200 focus:outline-none focus:ring-0"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Mobile menu</span>
                            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                                class="block h-8 w-8" :class="{ 'hidden': open, 'block': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>

                            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                                class="hidden h-8 w-8" :class="{ 'block': open, 'hidden': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="lg:hidden fixed w-full h-full inset-0 z-40" id="mobile-menu" x-description="Mobile menu"
                    x-show="open" style="display: none;">
                    <!-- bg open -->
                    <span class="fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0"></span>

                    <!-- Mobile navbar -->
                    <nav id="mobile-nav"
                        class="flex flex-col ltr:right-0 rtl:left-0 w-64 fixed top-0 py-4 bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-400 h-full overflow-auto z-40"
                        x-show="open" @click.away="open=false" x-description="Mobile menu" role="menu"
                        aria-orientation="vertical" aria-labelledby="navbartoggle"
                        x-transition:enter="transform transition-transform duration-300"
                        x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-transform duration-300"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full">
                        <div class="mb-auto">
                            <!--logo-->
                            <div class="mh-18 text-center px-12 mb-8">
                                <a href="landing.html#" class="flex relative">
                                    <h2 class="text-2xl font-semibold text-gray-200 max-h-9">
                                        <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="src/img/logo.png"> -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                            viewBox="0 0 300.000000 300.000000">
                                            <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                                fill="currentColor" stroke="none">
                                                <path class="text-pink-500"
                                                    d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                    -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                    -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                    5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                    58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                    465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                                <path class="text-indigo-500"
                                                    d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                    0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                    -687 428 -110 29 -111 28 -153 -37z" />
                                                <path class="text-indigo-500"
                                                    d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                    l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                    62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                    -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                    -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                    217 -10 16 -14 14 -45 -18z" />
                                            </g>
                                        </svg><span class="text-gray-700 dark:text-gray-200">Translator-Speech</span>
                                    </h2>
                                </a>
                            </div>

                            <!--navigation-->
                            <div class="mb-4">
                                <nav class="relative flex flex-wrap items-center justify-between">
                                    <ul id="side-menu" class="w-full float-none flex flex-col">
                                        <li class="relative">
                                            <a href="#home"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Home</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#caracteristicas"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Caracteristicas</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#precios"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Precios</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#nosotros"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Nosotros</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#contact"
                                                class="block py-3 px-4 hover:text-indigo-500 focus:text-indigo-500">Contact</a>
                                        </li>
                                        <li>
                                            <div class="grid text-center lg:block my-4 lg:my-auto">
                                                <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-blue-400 border border-blue-400 hover:text-gray-100 hover:bg-indigo-400 hover:ring-0 hover:border-indigo-400 focus:bg-blue-600 focus:border-blue-600 focus:outline-none focus:ring-0"
                                                    target="_blank" rel="noopener" href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid text-center lg:block my-4 lg:my-auto">
                                                <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-green-400 border border-green-400 hover:text-gray-100 hover:bg-lime-400 hover:ring-0 hover:border-lime-400 focus:bg-lime-600 focus:border-lime-600 focus:outline-none focus:ring-0"
                                                    target="_blank" rel="noopener" href="{{ route('register') }}">
                                                    Registrar
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </nav>
                </div><!-- End Mobile menu -->

                <!-- desktop menu -->
                <div class="hidden lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between lg:mt-0"
                    id="desktp-menu">
                    <!-- logo -->
                    <a class="hidden lg:flex items-center py-2 mr-4 text-xl" href="index.html">
                        <h2 class="text-2xl font-semibold px-4 max-h-9 overflow-hidden">
                            <!-- <img class="inline-block w-7 h-auto ltr:mr-2 rtl:ml-2 -mt-1" src="src/img/logo.png"> -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="inline-block w-7 h-7 ltr:mr-2 rtl:ml-2 -mt-1"
                                viewBox="0 0 300.000000 300.000000">
                                <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)"
                                    fill="currentColor" stroke="none">
                                    <path class="text-pink-500"
                                        d="M1225 2825 c-546 -115 -959 -534 -1065 -1080 -28 -147 -28 -373 0
                -520 81 -419 350 -774 728 -964 115 -58 120 -58 65 3 -27 29 -65 84 -85 122
                -68 131 -90 236 -89 428 0 229 44 470 167 923 41 149 74 275 74 278 0 4 -102
                5 -227 3 -198 -4 -236 -7 -290 -25 -35 -12 -63 -18 -63 -14 0 4 22 43 49 87
                58 93 123 157 177 175 22 6 124 14 234 16 l195 5 33 112 c91 305 200 431 405
                465 43 7 31 9 -73 9 -94 1 -152 -5 -235 -23z" />
                                    <path class="text-indigo-500"
                                        d="M1695 2763 c-48 -77 -122 -231 -179 -375 -25 -65 -46 -120 -46 -123
                0 -7 995 -6 1069 1 34 4 61 12 61 18 0 6 -30 46 -65 88 -170 201 -426 361
                -687 428 -110 29 -111 28 -153 -37z" />
                                    <path class="text-indigo-500"
                                        d="M2660 2104 c-33 -36 -54 -47 -120 -67 -21 -6 -256 -12 -595 -16
                l-560 -6 -51 -180 c-62 -215 -116 -445 -144 -608 -74 -435 -37 -655 124 -740
                62 -32 189 -30 274 5 174 72 337 212 410 353 l20 40 24 -50 c32 -70 32 -162
                -1 -229 -48 -97 -216 -250 -383 -347 -86 -51 -170 -85 -261 -109 l-69 -17 94
                -6 c469 -33 947 205 1214 605 229 342 291 790 163 1173 -24 70 -76 192 -94
                217 -10 16 -14 14 -45 -18z" />
                                </g>
                            </svg><span class="text-gray-200">T-Speech</span>
                        </h2>
                    </a>

                    <!-- menu -->
                    <ul class="flex flex-col lg:mx-auto mt-2 lg:flex-row lg:mt-0 text-gray-200">
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="#home">
                                Home
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white"
                                href="#caracteristicas">
                                Características
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="#precios">
                                Precios
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="#nosotros">
                                Nosotros
                            </a>
                        </li>
                        <!-- dropdown -->
                        {{-- <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false" @mouseleave="open = false">
            <a id="dropdown-01" class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="javascript:;" @mouseenter="open = !open" aria-haspopup="true" x-bind:aria-expanded="open" :class="{ 'text-white': open }">
              Contacto
              <!-- caret -->
              <span class="inline-block ltr:ml-2 rtl:mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem" fill="currentColor" viewBox="0 0 512 512"><polyline points="112 184 256 328 400 184" style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px"/></svg>
              </span>
            </a>
            <!-- dropdown menu -->
            <ul class="block absolute left-1/2 right-auto border-t-2 transform -translate-x-1/2 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white text-gray-700 dark:text-gray-200 dark:bg-gray-800 border dark:border-gray-700 shadow-md" style="min-width: 12rem"  x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/introduction.html">Documentation</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="components/alerts.html">Components</a>
              </li>
              <li class="relative">
                <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="docs/changelog.html">Changelog</a>
              </li>
            </ul>
          </li> --}}
                        <li class="relative">
                            <a class="block py-3 lg:py-7 px-6 hover:text-white focus:text-white" href="#contact">
                                Contact
                            </a>
                        </li>
                    </ul>

                    <!-- button -->
                    <div class="grid text-center lg:block my-4 lg:my-auto">
                        <a class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-blue-400 border border-blue-400 hover:text-gray-100 hover:bg-indigo-400 hover:ring-0 hover:border-indigo-400 focus:bg-blue-600 focus:border-blue-600 focus:outline-none focus:ring-0"
                            href="{{ route('login') }}">
                            Iniciar Sesión
                        </a>
                        <a class="py-2 px-4 ml-1 text-sm inline-block text-center rounded leading-5 text-gray-100 bg-green-400 border border-green-400 hover:text-gray-100 hover:bg-lime-400 hover:ring-0 hover:border-lime-400 focus:bg-lime-600 focus:border-lime-600 focus:outline-none focus:ring-0"
                            href="{{ route('register') }}">
                            Registrar
                        </a>
                    </div>
                </div><!-- end desktop menu -->
            </div>
        </nav>
    </header>
    <main id="content">
        <!-- =========={ Hero }==========  -->
        <div id="home"
            class="relative z-0 pt-32 lg:pt-36 pb-20 text-gray-300 bg-gradient-to-r from-sky-300 via-sky-500 to-sky-300 overflow-hidden">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <!-- hero content -->
                    <div
                        class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center lg:ltr:pr-12 lg:rtl:pl-12">
                        <div class="text-center lg:ltr:text-left lg:rtl:text-right mt-6 lg:mt-0">
                            <div class="mb-8">
                                <h1 class="text-white text-4xl leading-normal mb-3 font-bold">TranslatorSpeech</h1>
                                <p class="text-gray-100 leading-relaxed font-light text-xl mx-auto pb-2"> Esta página proporciona acceso a servicios en línea que permiten traducir automáticamente un texto en otro idioma.</p>
                            </div>
                            <a class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-700 bg-gray-100 border border-gray-100  hover:bg-gray-200 hover:ring-0 hover:border-gray-200 focus:bg-gray-200 focus:border-gray-200 focus:outline-none focus:ring-0 mr-4"
                                href="landing.html#features">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-check2-circle"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                    <path
                                        d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                </svg>Ver la plantilla principal
                            </a>
                        </div>
                    </div>

                    <!-- hero image -->
                    <div class="flex-shrink max-w-full px-4 w-full md:w-9/12 lg:w-1/2 self-center">
                        <div class="px-12 md:ml-16 md:pr-0 mt-4">
                            <img src="src/img/58.jpg" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end hero -->

        <!-- =========={ features }==========  -->
        <div id="caracteristicas" class="relative pt-14 pb-2 md:pt-16 md:pb-4 bg-white">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-400"><span
                            class="font-light">Nuestros</span> Características</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">Servicios de traductor para cualquier documento o simple párrafo que incluye a un formato de audio.</p>
                </header><!-- end section header -->

                <!-- row -->
                <div class="flex flex-wrap flex-row -mx-4 text-center">
                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-color1 dark:bg-color1 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
                                class="w-8 h-8 bi bi-body-text" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Traducción de Textos</h3>
                            <p>Traducción online de cualquier texto en una amplia variedad de idiomas de manera automática</p>
                        </div> <!-- end service block -->
                    </div>

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-color3 dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
                                    class="w-8 h-8 bi bi-journal-richtext" viewBox="0 0 16 16">
                                    <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Traducción de documentos</h3>
                            <p>Este servicio implica que al traducir, el formato que tengan los textos del documento será el mismo</p>
                        </div><!-- end service block -->
                    </div>

                    {{-- <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-color2 dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
                                    class="w-8 h-8 bi bi-file-earmark-music" viewBox="0 0 16 16">
                                    <path d="M11 6.64a1 1 0 0 0-1.243-.97l-1 .25A1 1 0 0 0 8 6.89v4.306A2.572 2.572 0 0 0 7 11c-.5 0-.974.134-1.338.377-.36.24-.662.628-.662 1.123s.301.883.662 1.123c.364.243.839.377 1.338.377.5 0 .974-.134 1.338-.377.36-.24.662-.628.662-1.123V8.89l2-.5V6.64z"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Modern Tools</h3>
                            <p>Coming with modern tools like npm, gulp and browsersync</p>
                        </div><!-- end service block -->
                    </div> --}}

                    <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-color4 dark:bg-gray-800 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" 
                                    class="w-8 h-8 bi bi-card-list" viewBox="0 0 16 16">
                                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">
                                Traducción a audios</h3>
                            <p>Cualquier traducción que se ejeucte tendrá la opción de exportar a un formato de audio</p>
                        </div><!-- end service block -->
                    </div>

                    {{-- <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-color5 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-8 h-8 bi bi-circle-square" viewBox="0 0 16 16">
                                    <path d="M0 6a6 6 0 1 1 12 0A6 6 0 0 1 0 6z"></path>
                                    <path
                                        d="M12.93 5h1.57a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1.57a6.953 6.953 0 0 1-1-.22v1.79A1.5 1.5 0 0 0 5.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 4h-1.79c.097.324.17.658.22 1z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">Svg
                                and Font Icons</h3>
                            <p>Using the default svg icon and the icon font as an alternative</p>
                        </div><!-- end service block -->
                    </div> --}}

                    {{-- <div class="flex-shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6">
                        <!-- service block -->
                        <div
                            class="p-6 mb-12 shadow-lg rounded-lg bg-yellow-100 transform transition duration-300 ease-in-out hover:-translate-y-2 hover:shadow-xl">
                            <div class="inline-block text-indigo-500 mb-4">
                                <!-- icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="currentColor"
                                    viewBox="0 0 512 512">
                                    <line x1="48" y1="112" x2="336" y2="112"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <line x1="192" y1="64" x2="192" y2="112"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <polyline points="272 448 368 224 464 448"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </polyline>
                                    <line x1="301.5" y1="384" x2="434.5" y2="384"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </line>
                                    <path d="M281.3,112S257,206,199,277,80,384,80,384"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                    <path d="M256,336s-35-27-72-75-56-85-56-85"
                                        style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-lg leading-normal mb-2 font-semibold text-gray-800 dark:text-gray-300">RTL
                                Supported</h3>
                            <p>Supports RTL Direction for Arabic or Persian site developers</p>
                        </div><!-- end service block -->
                    </div> --}}
                </div><!-- end row -->
            </div>
        </div><!-- End features -->

        <!-- =========={ about }==========  -->
        <div id="nosotros" class="relative pt-14 md:pt-16 bg-gradient-to-r from-sky-300 via-sky-500 to-sky-300">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span
                            class="font-light">Sobre</span> TranslatorSpeech</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 relative">
                        <div class="pb-8 px-3 text-center">
                            <img class="mx-auto max-w-full h-auto" src="src/img/svg/website.svg"
                                alt="company profile">
                        </div>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2">
                        <div class="pb-8 px-3">
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3">TranslatorSpeech es una herramienta que incluye muchos servicios de traducción que ayudan a cualquier usuario y que cuenta con un historial por usuario</p>
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-12">Además presenta un sistema de suscripciones para una mejor servicio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End about-->

        <!-- =========={ demo }==========  -->
        {{-- <div id="demo" class="relative pt-14 pb-4 md:pt-16 md:pb-6 bg-white dark:bg-white dark:bg-opacity-40">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span
                            class="font-light">Layout</span> Preview</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">There are three layout
                        options that you can use.</p>
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink w-full max-w-full px-4 md:w-1/2 mb-12">
                        <div x-data="{ tabs: 3 }" class="px-2 text-center">
                            <p class="mb-2">Theme Skin</p>
                            <!-- button group -->
                            <div class="flex inline-flex mb-4" role="group">
                                <button @click="tabs = 1" :class="{ 'bg-indigo-600': tabs === 1 }" type="button"
                                    class="rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-sun"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>Light
                                </button>
                                <button @click="tabs = 2" :class="{ 'bg-indigo-600': tabs === 2 }" type="button"
                                    class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-moon"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    </svg>Dark
                                </button>
                                <button @click="tabs = 3" :class="{ 'bg-indigo-600': tabs === 3 }" type="button"
                                    class="rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-moon"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                                    </svg>Sidedark
                                </button>
                            </div>
                            <div x-show="tabs === 1" class="relative">
                                <a target="_blank" href="index.html">
                                    <img src="src/img/demo/light.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-dark.html">
                                    <img src="src/img/demo/dark.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-sidedark.html">
                                    <img src="src/img/demo/sidedark.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink w-full max-w-full px-4 md:w-1/2 mb-12">
                        <div x-data="{ tabs: 1 }" class="px-2 text-center">
                            <p class="mb-2">Layout</p>
                            <!-- button group -->
                            <div class="flex inline-flex mb-4" role="group">
                                <button @click="tabs = 1" :class="{ 'bg-indigo-600': tabs === 1 }" type="button"
                                    class="rounded-l py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    Compact
                                </button>
                                <button @click="tabs = 2" :class="{ 'bg-indigo-600': tabs === 2 }" type="button"
                                    class="py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    Topnav
                                </button>
                                <button @click="tabs = 3" :class="{ 'bg-indigo-600': tabs === 3 }" type="button"
                                    class="rounded-r py-2 px-4 inline-block text-center mb-3 leading-normal text-gray-100 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-0 -mr-0.5">
                                    RTL
                                </button>
                            </div>
                            <div x-show="tabs === 1" class="relative">
                                <a target="_blank" href="layout-compact.html">
                                    <img src="src/img/demo/compact.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-topnav.html">
                                    <img src="src/img/demo/top-navbar.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-rtl.html">
                                    <img src="src/img/demo/rtl.jpg"
                                        class="max-w-full mx-auto shadow-lg transform transition duration-300 ease-in-out hover:-translate-y-1 border border-gray-200 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End demo--> --}}

        <!-- =========={ PRICING }==========  -->
        <div id="precios" class="relative pt-14 pb-2 md:pt-16 md:pb-4 bg-white">
            <div x-data="{ open: false }" class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span
                            class="font-light">Nuestros</span> Precios</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-gray-400 leading-relaxed font-light text-xl mx-auto pb-2">Paga una vez y sin costos adicionales</p>
                </header><!-- end section header -->

                <div class="pt-6 text-gray-100">
                    <div class="flex flex-wrap flex-row -mx-4 justify-center">
                        <div class="flex-shrink max-w-full w-full sm:w-11/12 md:w-1/2 lg:w-1/3 px-4">
                            <div class="px-6 md:px-2 lg:px-4">
                                <!-- pricing table -->
                                <div
                                    class="relative py-16 px-12 mb-12 lg:-mt-6 bg-white dark:bg-gray-900 dark:bg-opacity-40 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                    <!-- ribbon -->
                                    <div
                                        class="absolute top-0 ltr:right-0 ltr:text-right rtl:left-0 rtl:text-left w-36 h-36 text-sm">
                                        <span
                                            class="absolute top-4 ltr:right-0 rtl:left-0 px-4 py-2 block align-center shadow bg-indigo-500 text-gray-100">Popular</span>
                                    </div>
                                    <!-- pricing title -->
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Single</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>25</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>1 End products</li>
                                        <li>Personal or client</li>
                                        <li>Lifetime Update</li>
                                        <li>Supports 24/7</li>
                                        <li>Most Popular</li>
                                        <li>Can't product sold</li>
                                        <li>Can't for generators</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener"
                                            class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Compra ahora</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>

                        <div class="flex-shrink max-w-full w-full sm:w-11/12 md:w-1/2 lg:w-1/3 px-4">
                            <div class="px-6 md:px-2 lg:px-4">
                                <!-- pricing table -->
                                <div
                                    class="relative py-16 px-12 mb-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-30 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                    <!-- pricing Title -->
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Extended</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>699</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>1 End products</li>
                                        <li>Personal or client</li>
                                        <li>Lifetime Update</li>
                                        <li>Supports 24/7</li>
                                        <li>Can for product sold</li>
                                        <li>Can't for generators</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener"
                                            class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Compra ahora</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>

                        <div class="flex-shrink max-w-full w-full px-4">
                            <p class="text-center font-small mb-0">
                                <a class="text-gray-500" rel="noopener" href="landing.html#" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline ltr:mr-2 rtl:ml-2"
                                        fill="currentColor" width="1rem" height="1rem" viewBox="0 0 640 512">
                                        <path
                                            d="M256 336h-.02c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0C-2.06 328.75.02 320.33.02 336H0c0 44.18 57.31 80 128 80s128-35.82 128-80zM128 176l72 144H56l72-144zm511.98 160c0-16.18 1.34-8.73-85.05-181.51-17.65-35.29-68.19-35.36-85.87 0-87.12 174.26-85.04 165.84-85.04 181.51H384c0 44.18 57.31 80 128 80s128-35.82 128-80h-.02zM440 320l72-144 72 144H440zm88 128H352V153.25c23.51-10.29 41.16-31.48 46.39-57.25H528c8.84 0 16-7.16 16-16V48c0-8.84-7.16-16-16-16H383.64C369.04 12.68 346.09 0 320 0s-49.04 12.68-63.64 32H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h129.61c5.23 25.76 22.87 46.96 46.39 57.25V448H112c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h416c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z">
                                        </path>
                                    </svg>
                                    Detalles completos de las licencias
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Pricing -->

        <!-- =========={ BRAND }==========  -->
        <div id="partner-brand" class="relative py-14 md:py-16 bg-gradient-to-r from-sky-300 via-sky-500 to-sky-300">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <div class="flex flex-wrap flex-row -mx-4 justify-center">
                    <div class="w-full px-4">
                        <!-- slider brand -->
                        <div class="nav-dark-button"
                            data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false, "imagesLoaded": true }'>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img1.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img2.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img3.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img4.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img5.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 py-4 lg:py-1 px-6 lg:px-12 text-center">
                                <a href="landing.html#" target="_blank">
                                    <img class="brands-image mx-auto opacity-80 hover:opacity-100 max-w-full h-auto"
                                        src="src/img/brand/img6.png" alt="Image Description">
                                </a>
                            </div>
                        </div><!-- end slider brand -->
                    </div>
                </div>
            </div>
        </div><!-- End brand-->
    </main>
    <div id="contact">
        <x-guest.footer></x-guest.footer>
    </div>
</x-guest-layout>
