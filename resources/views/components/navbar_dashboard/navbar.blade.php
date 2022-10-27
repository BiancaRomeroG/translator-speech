
        <!-- Navbar -->
        <nav class="flex flex-row flex-nowrap items-center justify-between mt-0 py-2 px-6 border-b border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-800"
            id="desktop-menu">
            <!-- logo -->
            <a class="flex items-center py-2 ltr:mr-4 rtl:ml-4 text-xl" href="{{ route('dashboard') }}">
                <span class="text-2xl font-semibold text-gray-200 block lg:hidden">
                    <!-- <img class="inline-block w-7 h-auto -mt-1" src="src/img/logo.png"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 -mt-1"
                        viewBox="0 0 300.000000 300.000000">
                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor"
                            stroke="none">
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
                    </svg>
                </span>
                <span class="text-2xl font-semibold text-gray-200 hidden lg:block dark:text-gray-300">
                    <!-- <img class="inline-block w-7 h-auto mr-2 -mt-1" src="src/img/logo.png"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-7 h-7 mr-2 -mt-1"
                        viewBox="0 0 300.000000 300.000000">
                        <g transform="translate(0.000000,300.000000) scale(0.100000,-0.100000)" fill="currentColor"
                            stroke="none">
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
                    </svg><span class="text-gray-700 dark:text-gray-200">Translator Speech</span>
                </span>
            </a>

            <!-- sidenav button-->
            <button id="navbartoggle" type="button"
                class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 focus:outline-none focus:ring-0 dark:text-gray-300 dark:hover:text-gray-200"
                aria-controls="desktp-menu" @click="open = !open" aria-expanded="false"
                x-bind:aria-expanded="open.toString()">
                <span class="sr-only">Mobile menu</span>
                <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-8 w-8"
                    :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path class="hidden lg:block" fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    <path class="lg:hidden"
                        d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>

                <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block h-8 w-8"
                    :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="bi bi-filter-left" viewBox="0 0 16 16">
                    <path class="lg:hidden" fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    <path class="hidden lg:block"
                        d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                </svg>
                <!-- <i class="text-2xl fas fa-bars"></i> -->
            </button>

            <!-- Search -->
            <form class="hidden sm:inline-block md:hidden lg:inline-block mx-5">
                <div class="flex flex-wrap items-stretch w-full relative">
                    <input type="text"
                        class="flex-shrink flex-grow flex-shrink max-w-full leading-5 relative text-sm py-2 px-4 ltr:rounded-l rtl:rounded-r text-gray-800 bg-gray-100 overflow-x-auto focus:outline-none border border-gray-100 focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                        placeholder="Search…" aria-label="Search">
                    <div class="flex -mr-px">
                        <button
                            class="flex items-center py-2 px-4 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-5 h-5">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                            <!-- <i class="fas fa-search"></i> -->
                        </button>
                    </div>
                </div>
            </form>

            <!-- menu -->
            <ul class="flex ltr:ml-auto rtl:mr-auto mt-2 mt-0">
                <!-- messages -->
                <li x-data="{ open: false }" class="relative">
                    <a href="#" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none"
                        id="messages">
                        <div class="relative inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                                <path
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                </path>
                            </svg>

                            <span
                                class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span
                                    class="align-self-center">3</span></span>
                        </div>
                    </a>

                </li>

                <!-- notification -->
                <li x-data="{ open: false }" class="relative">
                    <a href="#" class="block py-3 px-4 flex text-sm rounded-full focus:outline-none"
                        id="notify">
                        <div class="relative inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell"
                                viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                            </svg>
                            <!-- <i class="text-2xl fas fa-bell"></i> -->
                            <span
                                class="flex justify-center absolute -top-2 ltr:-right-1 rtl:-left-1 text-center bg-pink-500 px-1 text-white rounded-full text-xs"><span
                                    class="align-self-center">1</span></span>
                        </div>
                    </a>


                </li>

                <!-- profile -->
                <li x-data="{ open: false }" class="relative">
                    <a href="#" class="px-3 flex text-sm rounded-full focus:outline-none"
                        id="user-menu-button">
                        <div class="relative">
                            <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700"
                                src="src/img/avatar/avatar.png" alt="avatar">
                            <span title="online"
                                class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                        </div>
                        <span class="hidden md:block ltr:ml-1 rtl:mr-1 self-center">{{ Auth::user()->name }}</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Navbar -->

        <!-- desktop menu -->
        <div x-bind:aria-expanded="open" :class="{ 'block lg:hidden': open, 'hidden lg:flex': !(open) }"
            class="lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between mt-0 px-6 color_nav_dashboard"
            id="desktp-menu">
            <!-- menu -->
            <ul class="flex flex-col lg:ltr:mr-auto lg:rtl:ml-auto mt-3 lg:flex-row lg:mt-0">
                <!-- dropdown -->
                <li class="relative">
                    <a id="dropdown-01" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente"
                        href="{{ route('dashboard') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            class="inline-block h-4 w-4 ltr:mr-1 rtl:ml-1 bi bi-house-door" viewBox="0 0 16 16">
                            <path
                                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                        </svg>
                        Dashboard
                    </a>


                </li>

                <!-- dropdown -->





                <!-- Menú2-->
                <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                    @click.away="open = false">
                    <a id="dropdown-02" class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente"
                        href="javascript:;" @click="open = !open" aria-haspopup="true" x-bind:aria-expanded="open"
                        :class="{ 'text-gray-300': open }">
                        Menú1
                        <!-- caret -->
                        <span
                            class="inline-block ltr:ml-2 ltr:float-right rtl:mr-2 rtl:float-left mt-1.5 lg:float-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width=".8rem" height=".8rem"
                                fill="currentColor" viewBox="0 0 512 512">
                                <polyline points="112 184 256 328 400 184"
                                    style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                            </svg>
                        </span>
                    </a>
                    <!-- dropdown menu -->
                    <ul class="block lg:absolute ltr:border-l-2 rtl:border-r-2 border-gray-400 lg:ltr:border-l-0 lg:rtl:border-r-0 lg:border-t-2 lg:border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:bg-white lg:shadow-md lg:text-gray-600 dark:bg-gray-800 dark:border-gray-700"
                        style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open"
                        role="menu" aria-orientation="vertical" aria-labelledby="dropdown-02"
                        x-transition:enter="transition duration-200"
                        x-transition:enter-start="transform opacity-0 translate-y-4"
                        x-transition:enter-end="transform opacity-100 translate-y-0"
                        x-transition:leave="transition translate-y-4"
                        x-transition:leave-start="transform opacity-100 translate-y-0"
                        x-transition:leave-end="transform opacity-0 translate-y-4">
                        <!--submenu-->
                        <li class="relative" x-data="{ open: false }" @keydown.escape.stop="open = false"
                            @click.away="open = false">
                            <a id="submenu-01"
                                class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 color_nav_fuente1"
                                href="javascript:;"@click="open = !open" aria-haspopup="true"
                                x-bind:aria-expanded="open" :class="{ 'text-gray-300 lg:text-indigo-500': open }">
                                Submenú1
                                <!-- caret -->
                                <span class="inline-block ltr:float-right rtl:float-left mt-1 pt-1">
                                    <svg :class="{
                                        'rotate-0 lg:ltr:-rotate-90 lg:rtl:rotate-90': open,
                                        'ltr:-rotate-90 rtl:rotate-90':
                                            !(open)
                                    }"
                                        xmlns="http://www.w3.org/2000/svg" class="transform" width=".8rem"
                                        height=".8rem" fill="currentColor" viewBox="0 0 512 512">
                                        <polyline points="112 184 256 328 400 184"
                                            style="fill:none;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px" />
                                    </svg>
                                </span>
                            </a>


                            <ul class="block lg:absolute lg:ltr:left-full lg:rtl:right-full lg:ltr:right-auto lg:rtl:left-auto lg:transform ltr:pl-6 rtl:pr-6 lg:ltr:pl-0 lg:rtl:pr-0 lg:border-t-2 border-indigo-500 rounded rounded-t-none top-full z-50 py-0.5 ltr:text-left rtl:text-right lg:-mt-11 ml-0 mr-0 lg:bg-white lg:shadow-md dark:bg-gray-800 dark:border-gray-700"
                                style="min-width: 12rem;display:none;" x-description="Dropdown menu" x-show="open"
                                role="menu" aria-orientation="vertical" aria-labelledby="submenu-01"
                                x-transition:enter="transition duration-200"
                                x-transition:enter-start="transform opacity-0 translate-y-4"
                                x-transition:enter-end="transform opacity-100 translate-y-0"
                                x-transition:leave="transition translate-y-4"
                                x-transition:leave-start="transform opacity-100 translate-y-0"
                                x-transition:leave-end="transform opacity-0 translate-y-4">
                                <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 color_nav_fuente1"
                                        href="#">Opción2</a></li>
                                <li><a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 color_nav_fuente1"
                                        href="#">Opción1</a></li>
                            </ul>
                        </li>

                        <!--submenu-->
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 color_nav_fuente1"
                                href="#">Opción1</a>
                        </li>
                        <li class="relative">
                            <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-gray-300 lg:hover:text-indigo-500 color_nav_fuente1"
                                href="#">Opción2</a>
                        </li>
                    </ul>
                </li>

                <li class="relative">
                    <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente"
                        href="{{ route('traducir.texto') }}">
                        <i class="fa-solid fa-language"></i>
                        Traducir Texto
                    </a>
                </li>
                <li class="relative">
                    <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente" href="#">
                        Opción2
                    </a>
                </li>
                <li class="relative">
                    <a class="block py-3 lg:py-7 px-0 lg:px-4 hover:text-gray-300 color_nav_fuente" href="#">
                        Opcion3
                    </a>
                </li>
            </ul>

            <!-- button -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <div class="text-center lg:block my-6 lg:my-auto">
                    <button
                        class="py-2 px-4 text-sm inline-block text-center rounded leading-5 text-gray-300 bg-indigo-500 border border-indigo-500 hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                        target="_blank" rel="noopener" href="layout-topnav.html#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="inline ltr:mr-1 rtl:ml-1 feather feather-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        Log Out
                    </button>
                </div>
            </form>
        </div>
    
