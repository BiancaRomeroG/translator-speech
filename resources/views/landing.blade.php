<x-guest-layout>
    <header>

        <nav x-data="{ open: false }"
            class="nav-top flex flex-nowrap lg:flex-start items-center z-30 fixed top-0 left-0 right-0 overflow-y-auto max-h-screen lg:overflow-visible lg:max-h-full"
            id="navmenu">
            <div class="container mx-auto xl:max-w-7xl text-gray-900">
                <!-- mobile navigation -->
                <div class="flex flex-row justify-between py-3 lg:hidden">
                    <!-- logo -->
                    <a class="flex items-center py-2 mr-4 text-xl" href="index.html">
                        <h2 class="px-4 overflow-hidden text-2xl font-semibold max-h-9">
                            <!-- <img class="inline-block h-auto -mt-1 w-7 ltr:mr-2 rtl:ml-2" src="src/img/logo.png"> -->
                            <img class="inline-block h-auto -mt-1 w-7" src="{{asset('src/img/favicon.png')}}">
                            <span>SYSTRAN</span>
                        </h2>
                    </a>

                    <!-- navbar toggler -->
                    <div class="right-0 flex items-center">
                        <!-- Mobile menu button-->
                        <button id="navbartoggle" type="button"
                            class="inline-flex items-center justify-center text-black focus:outline-none focus:ring-0 pr-3"
                            aria-controls="mobile-menu" @click="open = !open" aria-expanded="false"
                            x-bind:aria-expanded="open.toString()">
                            <span class="sr-only">Mobile menu</span>
                            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed"
                                class="block w-8 h-8" :class="{ 'hidden': open, 'block': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>

                            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed"
                                class="hidden w-8 h-8" :class="{ 'block': open, 'hidden': !(open) }"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile menu -->
                <div class="fixed inset-0 z-40 w-full h-full lg:hidden" id="mobile-menu" x-description="Mobile menu"
                    x-show="open" style="display: none;">
                    <!-- bg open -->
                    <span class="fixed inset-x-0 top-0 w-full h-full bg-gray-900 bg-opacity-70"></span>

                    <!-- Mobile navbar -->
                    <nav id="mobile-nav" class="fixed top-0 z-40 flex flex-col w-64 h-full bg-white py-4 overflow-auto"
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
                            <div class="px-12 mb-8 text-center mh-18">
                                <a href="landing.html#" class="relative flex">
                                    <h2 class="text-2xl font-semibold max-h-9">
                                        <!-- <img class="inline-block h-auto -mt-1 w-7 ltr:mr-2 rtl:ml-2" src="src/img/logo.png"> -->
                                        <img class="inline-block h-auto -mt-1 w-7" src="{{asset('src/img/favicon.png')}}">
                                        <span class="">SYSTRAN</span>
                                    </h2>
                                </a>
                            </div>

                            <!--navigation-->
                            <div class="mb-4">
                                <nav class="relative flex flex-wrap items-center justify-between">
                                    <ul id="side-menu" class="flex flex-col float-none w-full">
                                        <li class="relative">
                                            <a href="#home"
                                                class="block px-4 py-3 hover:text-indigo-500 focus:text-indigo-500">Home</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#servicios"
                                                class="block px-4 py-3 hover:text-indigo-500 focus:text-indigo-500">Servicios</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#precios"
                                                class="block px-4 py-3 hover:text-indigo-500 focus:text-indigo-500">Precios</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#nosotros"
                                                class="block px-4 py-3 hover:text-indigo-500 focus:text-indigo-500">Nosotros</a>
                                        </li>
                                        <li class="relative">
                                            <a href="#contact"
                                                class="block px-4 py-3 hover:text-indigo-500 focus:text-indigo-500">Contact</a>
                                        </li>
                                        <li>
                                            <div class="grid my-4 text-center">
                                                <a class="block px-4 py-2 mx-auto w-40 text-sm leading-5 text-center text-gray-100 rounded-full transition ease-in-out delay-150 bg-sky-500"
                                                    href="{{ route('login') }}">
                                                    Iniciar Sesión
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="grid my-4 text-center">
                                                <a class="block px-4 py-2 mx-auto w-40 text-sm leading-5 text-center text-gray-100 rounded-full transition ease-in-out delay-150 bg-green-400 "
                                                    href="{{ route('register') }}">
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
                    <a class="items-center hidden py-2 mr-4 text-xl lg:flex" href="index.html">
                        <h2 class="px-4 overflow-hidden text-2xl font-semibold max-h-9">
                            <!-- <img class="inline-block h-auto -mt-1 w-7 ltr:mr-2 rtl:ml-2" src="src/img/logo.png"> -->
                            <img class="inline-block h-auto -mt-1 w-7" src="{{asset('src/img/favicon.png')}}">
                            <span class="">SYSTRAN</span>
                        </h2>
                    </a>

                    <!-- menu -->
                    <ul class="flex flex-col mt-2 font-bold lg:mx-auto lg:flex-row lg:mt-0">
                        <li class="relative">
                            <a class="block px-4 py-3 lg:py-7 hover:text-blue-700 focus:text-white" href="#home">
                                HOME
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block px-4 py-3 lg:py-7 hover:text-blue-700 focus:text-white" href="#servicios">
                                SERVICIOS
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block px-4 py-3 lg:py-7 hover:text-blue-700 focus:text-white" href="#precios">
                                PRECIOS
                            </a>
                        </li>
                        <li class="relative">
                            <a class="block px-4 py-3 lg:py-7 hover:text-blue-700 focus:text-white" href="#nosotros">
                                NOSOTROS
                            </a>
                        </li>

                        <li class="relative">
                            <a class="block px-4 py-3 lg:py-7 hover:text-blue-700 focus:text-white" href="#contact">
                                CONTACT
                            </a>
                        </li>
                    </ul>

                    <!-- button -->
                    <div class="grid my-4 text-center lg:block lg:my-auto">
                        <a class="inline-block px-4 py-2 text-sm leading-5 text-center text-gray-100 rounded-full transition ease-in-out delay-150 bg-sky-500 hover:-translate-y-1 hover:scale-110 hover:bg-blue-700 duration-200 focus:bg-blue-600 focus:border-blue-600 focus:outline-none focus:ring-0"
                            href="{{ route('login') }}">
                            Iniciar Sesión
                        </a>
                        <a class="inline-block px-4 py-2 ml-1 text-sm leading-5 text-center text-gray-100 rounded-full transition ease-in-out delay-150 bg-green-500 hover:-translate-y-1 hover:scale-110 hover:bg-green-600 duration-200 focus:bg-lime-600 focus:border-lime-600 focus:outline-none focus:ring-0"
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
        <div class="relative">
            <img src="{{asset('src/img/header-bg.jpg')}}" class="absolute inset-0 object-cover w-full h-full" alt="" />
            <div id="home"
                class="relative z-20 pt-0 pb-0 overflow-hidden text-black lg:pt-36 bg-opacity-75 bg-sky-200">

                <div class="container px-5 mx-auto xl:max-w-4xl">
                    <!-- row -->
                    <div class="flex flex-row flex-wrap justify-center -mx-4">
                        <!-- hero content -->
                        <div class="pt-24 pb-64 text-center header-content">
                            <h2 class="mb-5 text-3xl font-semibold text-gray-900 md:text-5xl">Traduce cualquier palabra y aquellos documentos que deseas</h2>
                            <p class="px-5 mb-10 text-xl text-gray-700">Traduccion rapida de textos, y seguridad en manejo y almacenamiento de documentos confidenciales con los planes mas flexibles</p>
                            <ul class="flex flex-wrap justify-center">
                                <li><a class="inline-block px-4 py-3 text-base leading-5 text-center text-gray-100 rounded-full animate-bounce transition ease-in-out delay-150 bg-gradient-to-r from-blue-600 via-blue-500 to-cyan-300 duration-400 hover:translate-y-0 hover:scale-110 hover:bg-gradient-to-r hover:from-cyan-300 hover:via-blue-500 hover:to-blue-600 duration-300"
                                    href="{{ route('register') }}">
                                    Comenzar!
                                </a>
                                </li>
                                
                            </ul>
                        </div>
                        {{-- <div
                            class="self-center flex-shrink w-full max-w-full px-4 md:w-9/12 lg:w-1/2 lg:ltr:pr-12 lg:rtl:pl-12">
                            <div class="mt-6 text-center lg:ltr:text-left lg:rtl:text-right lg:mt-0">
                                <div class="mb-8">
                                    <h1 class="mt-16 mb-3 text-4xl font-bold leading-normal text-white">SySTran</h1>
                                    <p class="pb-2 mx-auto text-xl font-light leading-relaxed text-gray-100"> Esta
                                        página proporciona acceso a servicios en línea que permiten traducir
                                        automáticamente un texto en otro idioma.</p>
                                </div>
                                <a class="inline-block px-4 py-2 mr-4 leading-5 rounded-full transition ease-in-out delay-150 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-white duration-300"
                                    href="landing.html#features">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="inline-block ltr:mr-2 rtl:ml-2 bi bi-check2-circle"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                                        <path
                                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                                    </svg>Comenzar
                                </a>
                            </div>
                        </div>

                        <!-- hero image -->
                        <div class="self-center flex-shrink w-full max-w-full px-4 md:w-9/12 lg:w-1/2">
                            <div class="px-12 mt-4 md:ml-16 md:pr-0">
                                <img src="{{ asset('src/img/home/machine-translation-2.png') }}"
                                    class="max-w-full mx-auto">
                            </div>
                        </div> --}}
                    </div><!-- end row -->
                </div>
                <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape bg-transparent">
                    <img src="{{asset('src/img/header-shape.svg')}}" alt="shape">
                </div>
            </div><!-- end hero -->
        </div>
        <!-- =========={ features }==========  -->
        <div id="servicios" class="relative pb-2 bg-white pt-14 md:pt-16 md:pb-4">
            <div class="container py-10 mx-auto xl:max-w-7xl">
                <section class="bg-white">
                    <div class="container px-6 py-10 mx-auto">
                        <div class="lg:flex lg:items-center">
                            <div class="w-full space-y-12 lg:w-1/2 ">
                                <div>
                                    <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">Explora nuestros <br> mejores Componentes</h1>
                
                                    <div class="mt-2">
                                        <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                        <span class="inline-block w-3 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                        <span class="inline-block w-1 h-1 ml-1 bg-blue-500 rounded-full"></span>
                                    </div>
                                </div>
                
                                <div class="md:flex md:items-start md:-mx-4">
                                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                    </span>
                
                                    <div class="mt-4 md:mx-4 md:mt-0">
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">Traducción de documentos</h1>
                
                                        <p class="mt-3 text-gray-500">
                                            Este servicio implica que al traducir, el formato que tengan los textos del documento será el mismo
                                        </p>
                                    </div>
                                </div>
                
                                <div class="md:flex md:items-start md:-mx-4">
                                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                    </span>
                
                                    <div class="mt-4 md:mx-4 md:mt-0">
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">Traducción a audios</h1>
                
                                        <p class="mt-3 text-gray-500">
                                            Cualquier traducción que se ejeucte tendrá la opción de exportar a un formato de audio
                                        </p>
                                    </div>
                                </div>
                
                                <div class="md:flex md:items-start md:-mx-4">
                                    <span class="inline-block p-2 text-blue-500 bg-blue-100 rounded-xl md:mx-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    class="w-6 h-6 bi bi-body-text" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M0 .5A.5.5 0 0 1 .5 0h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 0 .5Zm0 2A.5.5 0 0 1 .5 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm9 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-9 2A.5.5 0 0 1 .5 4h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm5 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Zm-12 2A.5.5 0 0 1 .5 6h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5Zm8 0a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm-8 2A.5.5 0 0 1 .5 8h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5Zm7 0a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm-7 2a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1h-8a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5Z" />
                                </svg>
                                    </span>
                
                                    <div class="mt-4 md:mx-4 md:mt-0">
                                        <h1 class="text-2xl font-semibold text-gray-700 capitalize">Traducción de Texto</h1>
                
                                        <p class="mt-3 text-gray-500">
                                            Traducción online de cualquier texto en una amplia variedad de idiomas de manera automática
                                        </p>
                                    </div>
                                </div>
                            </div>
                
                            <div class="hidden lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                                <img class="w-[24rem] h-[24rem] object-cover xl:w-[28rem] xl:h-[28rem] rounded-full" src="{{asset('src/img/svg/website.svg')}}" alt="">
                            </div>
                        </div>
                
                    </div>
                </section>

                
            </div>
        </div><!-- End features -->

        <!-- =========={ about }==========  -->
        <div id="nosotros" class="relative md:py-10 bg-gray-100 py-14">
            <div class="container mx-auto xl:max-w-7xl py-14">
                <section class="bg-gray-100">
                    <div class="container py-14 mx-auto">
                        <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl">Sobre <span class="text-blue-500">Nosotros</span></h1>
                
                        <p class="max-w-2xl mx-auto my-6 text-center text-gray-500">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt ex placeat modi magni quia error alias, adipisci rem similique, at omnis eligendi optio eos harum.
                        </p>
                
                        <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-2">
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/92609752?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Bianca Romero</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Scrum Master</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/69329983?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Edson Sacaca</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Product Owner</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/97114827?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Teo. Montalvo</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Scrum Team</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/58397625?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Pedro. Chracayo</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Scrum Team</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/36086876?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Jhasmany. Fernandez</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Scrum Team</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                
                            <div class="px-12 py-8 bg-white transition-colors duration-300 transform border cursor-pointer rounded-xl hover:border-transparent group hover:bg-blue-600">
                                <div class="flex flex-col sm:-mx-4 sm:flex-row">
                                    <img class="flex-shrink-0 object-cover w-24 h-24 rounded-full sm:mx-4 ring-4 ring-gray-300" src="https://avatars.githubusercontent.com/u/104465437?v=4" alt="">
                
                                    <div class="mt-4 sm:mx-4 sm:mt-0">
                                        <h1 class="text-xl font-semibold text-gray-700 capitalize md:text-2xl group-hover:text-white">Carlos. Vargas</h1>
                
                                        <p class="mt-2 text-gray-500 capitalize group-hover:text-gray-300">Scrum Team</p>
                                    </div>
                                </div>
                
                                <p class="mt-4 text-gray-500 capitalize group-hover:text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nesciunt officia aliquam neque optio? Cumque facere numquam est.</p>
                
                                <div class="flex mt-4 -mx-2">
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Reddit">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                            </path>
                                        </svg>
                                    </a>
                
                                    <a href="#" class="mx-2 text-gray-600 hover:text-gray-500 group-hover:text-white" aria-label="Github">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!-- End about-->

        <!-- =========={ demo }==========  -->
        {{-- <div id="demo" class="relative pb-4 bg-white pt-14 md:pt-16 md:pb-6 dark:bg-white dark:bg-opacity-40">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- section header -->
                <header class="mx-auto mb-12 text-center">
                    <h2 class="mb-2 text-2xl font-bold leading-normal text-gray-800 dark:text-gray-300"><span
                            class="font-light">Layout</span> Preview</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="pb-2 mx-auto text-xl font-light leading-relaxed text-gray-500">There are three layout
                        options that you can use.</p>
                </header><!-- end section header -->

                <div class="flex flex-row flex-wrap -mx-4">
                    <div class="flex-shrink w-full max-w-full px-4 mb-12 md:w-1/2">
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
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-dark.html">
                                    <img src="src/img/demo/dark.jpg"
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-sidedark.html">
                                    <img src="src/img/demo/sidedark.jpg"
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex-shrink w-full max-w-full px-4 mb-12 md:w-1/2">
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
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 2" class="relative">
                                <a target="_blank" href="layout-topnav.html">
                                    <img src="src/img/demo/top-navbar.jpg"
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                            <div x-show="tabs === 3" class="relative">
                                <a target="_blank" href="layout-rtl.html">
                                    <img src="src/img/demo/rtl.jpg"
                                        class="max-w-full mx-auto transition duration-300 ease-in-out transform border border-gray-200 shadow-lg hover:-translate-y-1 dark:border-gray-700"
                                        alt="Demo dashboard">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End demo--> --}}

        <!-- =========={ PRICING }==========  -->
        <div id="precios" class="relative bg-white py-14 md:py-10">
            <div x-data="{ open: false }" class="container mx-auto py-14 xl:max-w-7xl">
                <div class="max-w-md mx-auto mb-14 text-center">
                    <h1 class="text-3xl font-semibold mb-6 lg:text-4xl">Planes
                        <span class="text-indigo-600">Flexibles</span></h1>
                    <p class="text-xl text-gray-500 font-medium">Elige el plan con el que te mejor te ayude en tus tareas o proyectos.
                    </p>
                </div>

                <div class="flex flex-col justify-between items-center lg:flex-row lg:items-start">

                    <div
                        class="w-full flex-1 mt-8 p-8 order-2 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-1 lg:rounded-r-none">
                        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                            <img src="https://res.cloudinary.com/williamsondesign/abstract-1.jpg" alt=""
                                class="rounded-3xl w-20 h-20" />
                            <div class="ml-5">
                                <span class="block text-2xl font-semibold">Basic</span>
                                <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span
                                        class="text-3xl font-bold">10 </span></span><span
                                    class="text-gray-500 font-medium">/ user</span>
                            </div>
                        </div>
                        <ul class="mb-7 font-medium text-gray-500">
                            <li class="flex text-lg mb-2">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3">Get started with <span class="text-black">messaging</span></span>
                            </li>
                            <li class="flex text-lg mb-2">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3">Flexible <span class="text-black">team meetings</span></span>
                            </li>
                            <li class="flex text-lg">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3"><span class="text-black">5 TB</span> cloud storage</span>
                            </li>
                        </ul>
                        <a href="#/"
                            class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                            Choose Plan
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </a>
                    </div>

                    <div
                        class="w-full flex-1 p-8 order-1 shadow-xl rounded-3xl bg-gray-900 text-gray-400 sm:w-96 lg:w-full lg:order-2 lg:mt-0">
                        <div class="mb-8 pb-8 flex items-center border-b border-gray-600">
                            <img src="https://res.cloudinary.com/williamsondesign/abstract-2.jpg" alt=""
                                class="rounded-3xl w-20 h-20" />
                            <div class="ml-5">
                                <span class="block text-2xl font-semibold text-white">Startup</span>
                                <span><span class="font-medium text-xl align-top">$&thinsp;</span><span
                                        class="text-2xl font-bold text-white">24 </span></span><span
                                    class="font-medium">/ user</span>
                            </div>
                        </div>
                        <ul class="mb-10 font-normal text-base">
                            <li class="flex mb-6">
                                <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                                <span class="ml-3">All features in <span class="text-white">Basic</span></span>
                            </li>
                            <li class="flex mb-6">
                                <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                                <span class="ml-3">Flexible <span class="text-white">call scheduling</span></span>
                            </li>
                            <li class="flex">
                                <img src="https://res.cloudinary.com/williamsondesign/check-white.svg" />
                                <span class="ml-3"><span class="text-white">15 TB</span> cloud storage</span>
                            </li>
                        </ul>
                        <a href="#/"
                            class="flex justify-center items-center bg-indigo-600 rounded-xl py-6 px-4 text-center text-white text-2xl">
                            Choose Plan
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </a>
                    </div>

                    <div
                        class="w-full flex-1 mt-8 p-8 order-3 bg-white shadow-xl rounded-3xl sm:w-96 lg:w-full lg:order-3 lg:rounded-l-none">
                        <div class="mb-7 pb-7 flex items-center border-b border-gray-300">
                            <img src="https://res.cloudinary.com/williamsondesign/abstract-3.jpg" alt=""
                                class="rounded-3xl w-20 h-20" />
                            <div class="ml-5">
                                <span class="block text-2xl font-semibold">Enterprise</span>
                                <span><span class="font-medium text-gray-500 text-xl align-top">$&thinsp;</span><span
                                        class="text-3xl font-bold">35 </span></span><span
                                    class="text-gray-500 font-medium">/ user</span>
                            </div>
                        </div>
                        <ul class="mb-7 font-medium text-gray-500">
                            <li class="flex text-lg mb-2">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3">All features in <span class="text-black">Startup</span></span>
                            </li>
                            <li class="flex text-lg mb-2">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3">Growth <span class="text-black">oriented</span></span>
                            </li>
                            <li class="flex text-lg">
                                <img src="https://res.cloudinary.com/williamsondesign/check-grey.svg" />
                                <span class="ml-3"><span class="text-black">Unlimited</span> cloud storage</span>
                            </li>
                        </ul>
                        <a href="#/"
                            class="flex justify-center items-center bg-indigo-600 rounded-xl py-5 px-4 text-center text-white text-xl">
                            Choose Plan
                            <img src="https://res.cloudinary.com/williamsondesign/arrow-right.svg" class="ml-2" />
                        </a>
                    </div>

                </div>
                {{-- <!-- section header -->
                <header class="mx-auto mb-12 text-center ">
                    <h2 class="mb-2 text-2xl leading-normal font-extrabold text-gray-800"><span
                            class="font-light">Nuestros</span> Precios</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="pb-2 mx-auto text-xl font-light leading-relaxed text-gray-400">Paga una vez y sin costos
                        adicionales</p>
                </header><!-- end section header -->

                <div class="pt-6">
                    <div class="flex flex-row flex-wrap justify-center -mx-4">

                        <div class="relative w-full h-full">
                            <div class="absolute hidden w-full bg-gray-50 lg:block h-96"></div>
                            <div
                                class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                                    <h2
                                        class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                                        <span class="relative inline-block">
                                            <svg viewBox="0 0 52 24" fill="currentColor"
                                                class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                                <defs>
                                                    <pattern id="2c67e949-4a23-49f7-bf27-ca140852cf21" x="0"
                                                        y="0" width=".135" height=".30">
                                                        <circle cx="1" cy="1" r=".7">
                                                        </circle>
                                                    </pattern>
                                                </defs>
                                                <rect fill="url(#2c67e949-4a23-49f7-bf27-ca140852cf21)" width="52"
                                                    height="24"></rect>
                                            </svg>
                                            <span class="relative">Affordable</span>
                                        </span>
                                        for everyone
                                    </h2>
                                    <p class="text-base text-gray-700 md:text-lg">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque rem aperiam, eaque ipsa quae.
                                    </p>
                                </div>
                                <div class="grid max-w-screen-md gap-10 md:grid-cols-2 sm:mx-auto">
                                    <div>
                                        <div class="p-8 bg-gray-900 rounded">
                                            <div class="mb-4 text-center">
                                                <p class="text-xl font-medium tracking-wide text-white">
                                                    Starter Plan
                                                </p>
                                                <div class="flex items-center justify-center">
                                                    <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                                                        $39
                                                    </p>
                                                    <p class="text-lg text-gray-500">/ month</p>
                                                </div>
                                            </div>
                                            <ul class="mb-8 space-y-2">
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">10 deploys per day</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">10 GB of storage</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">3 domains</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">SSL Certificates</p>
                                                </li>
                                            </ul>
                                            <button type="submit"
                                                class="inline-flex items-center justify-center w-full h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none">
                                                Get Now
                                            </button>
                                        </div>
                                        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
                                        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
                                        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
                                    </div>
                                    <div>
                                        <div class="p-8 bg-gray-900 rounded">
                                            <div class="mb-4 text-center">
                                                <p class="text-xl font-medium tracking-wide text-white">Pro Plan</p>
                                                <div class="flex items-center justify-center">
                                                    <p class="mr-2 text-5xl font-semibold text-white lg:text-6xl">
                                                        $59
                                                    </p>
                                                    <p class="text-lg text-gray-500">/ month</p>
                                                </div>
                                            </div>
                                            <ul class="mb-8 space-y-2">
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">100 deploys per day</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">50 GB of storage</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">Unlimited domains</p>
                                                </li>
                                                <li class="flex items-center">
                                                    <div class="mr-3">
                                                        <svg class="w-4 h-4 text-teal-accent-400" viewBox="0 0 24 24"
                                                            stroke-linecap="round" stroke-width="2">
                                                            <polyline fill="none" stroke="currentColor"
                                                                points="6,12 10,16 18,8"></polyline>
                                                            <circle cx="12" cy="12" fill="none"
                                                                r="11" stroke="currentColor"></circle>
                                                        </svg>
                                                    </div>
                                                    <p class="font-medium text-gray-300">SSL Certificates</p>
                                                </li>
                                            </ul>
                                            <button type="submit"
                                                class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-teal-900 transition duration-200 rounded shadow-md bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                                                Get Now
                                            </button>
                                        </div>
                                        <div class="w-11/12 h-2 mx-auto bg-gray-900 rounded-b opacity-75"></div>
                                        <div class="w-10/12 h-2 mx-auto bg-gray-900 rounded-b opacity-50"></div>
                                        <div class="w-9/12 h-2 mx-auto bg-gray-900 rounded-b opacity-25"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-shrink w-full max-w-full px-4">
                            <p class="mb-0 text-center font-small">
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
                </div> --}}
            </div>
        </div><!-- End Pricing -->

        <!-- =========={ BRAND }==========  -->
        <div id="contact" class="relative py-14 md:py-10 bg-gray-100">
            <div class="container mx-auto xl:max-w-7xl">
                <section class="min-h-screen bg-gray-100 ">
                    <div class="container px-6 py-10 mx-auto">
                        <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
                            <div class="text-gray-900 lg:w-1/2 lg:mx-6">
                                <h1 class="text-3xl font-semibold capitalize lg:text-5xl">Obtén un plan personalizado</h1>
                
                                <p class="max-w-xl mt-6">Preguntanos cualquier duda, y estaremos para resolverlas al instante</p>
                
                                <div class="mt-6 space-y-8 md:mt-8">
                                    <p class="flex items-start -mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                
                                        <span class="mx-2 text-gray-900 truncate w-72">
                                            Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522
                                        </span>
                                    </p>
                
                                    <p class="flex items-start -mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                
                                        <span class="mx-2 text-gray-900 truncate w-72">(257) 563-7401</span>
                                    </p>
                
                                    <p class="flex items-start -mx-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                
                                        <span class="mx-2 text-gray-900 truncate w-72">acb@example.com</span>
                                    </p>
                                </div>
                
                                <div class="mt-6 md:mt-8">
                                    <h3 class="text-gray-700 ">Siguenos</h3>
                
                                    <div class="flex mt-4 -mx-1.5 ">
                                        <a class="mx-1.5 text-gray-900 transition-colors duration-300 transform hover:text-blue-500" href="#">
                                            <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                                            </svg>
                                        </a>
                
                                        <a class="mx-1.5 text-gray-900 transition-colors duration-300 transform hover:text-blue-500" href="#">
                                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z" fill="currentColor" />
                                                <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                                <path d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z" fill="currentColor" />
                                            </svg>
                                        </a>
                
                                        <a class="mx-1.5 text-gray-900 transition-colors duration-300 transform hover:text-blue-500" href="#">
                                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                                            </svg>
                                        </a>
                
                                        <a class="mx-1.5 text-gray-900 transition-colors duration-300 transform hover:text-blue-500" href="#">
                                            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                
                            <div class="mt-8 lg:w-1/2 lg:mx-6">
                                <div class="w-full px-8 py-10 mx-auto overflow-hidden text-gray-900 shadow-2xl rounded-3xl lg:max-w-xl">
                                    <h1 class="text-2xl font-medium text-gray-700">Formulario de Contacto</h1>
                
                                    <form class="mt-6">
                                        <div class="flex-1">
                                            <label class="block mb-2 text-sm text-gray-700">Nombre Completo</label>
                                            <input type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-xl focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                                        </div>
                
                                        <div class="flex-1 mt-6">
                                            <label class="block mb-2 text-sm text-gray-700">Direccion Email</label>
                                            <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-xl focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" />
                                        </div>
                
                                        <div class="w-full mt-6">
                                            <label class="block mb-2 text-sm text-gray-700">Mensaje</label>
                                            <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-xl md:h-48 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Message"></textarea>
                                        </div>
                
                                        <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-xl hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                                            get in touch
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <div class="flex flex-row flex-wrap justify-center -mx-4">
                    <div class="w-full px-4">
                        <!-- slider brand -->
                        <div class="nav-dark-button"
                            data-flickity='{ "cellAlign": "left", "wrapAround": true, "adaptiveHeight": true, "pageDots": false, "imagesLoaded": true }'>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img1.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img2.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img3.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img4.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img5.png" alt="Image Description">
                                </a>
                            </div>
                            <div
                                class="w-full px-6 py-4 text-center sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/5 lg:py-1 lg:px-12">
                                <a href="landing.html#" target="_blank">
                                    <img class="h-auto max-w-full mx-auto brands-image opacity-80 hover:opacity-100"
                                        src="src/img/brand/img6.png" alt="Image Description">
                                </a>
                            </div>
                        </div><!-- end slider brand -->
                    </div>
                </div> --}}
            </div>
        </div><!-- End brand-->
    </main>
    <div id="contact" class="relative bg-white">
        <x-guest.footer></x-guest.footer>
    </div>
    @push('scripts')
        <script>
            const nav = document.getElementById('navmenu');
            window.addEventListener('scroll', () => {
                /* console.log(window.scrollY) */
                if (window.scrollY >= 50) {
                    nav.classList.add('bg-white');
                    nav.classList.add('shadow-md');
                } else {
                    nav.classList.remove('bg-white');
                    nav.classList.remove('shadow-md');
                }
            })
        </script>
    @endpush
</x-guest-layout>
