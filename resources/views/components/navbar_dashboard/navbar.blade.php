    <!-- Navbar -->
    <nav class="flex flex-row items-center justify-between px-6 py-2 mt-0 bg-white border-b border-gray-200 flex-nowrap"
    id="desktop-menu">
    <!-- logo -->
    <div class="flex">
        <a class="flex items-center py-2 mr-2 text-xl ltr:mr-4 rtl:ml-4" href="{{ route('dashboard') }}">
            <span class="block text-2xl font-semibold text-gray-200 lg:hidden">
                <!-- <img class="inline-block h-auto -mt-1 w-7" src="src/img/logo.png"> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block -mt-1 w-7 h-7"
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
            <span class="hidden text-2xl font-semibold text-gray-200 lg:block dark:text-gray-300">
                <!-- <img class="inline-block h-auto mr-2 -mt-1 w-7" src="src/img/logo.png"> -->
                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block mr-2 -mt-1 w-7 h-7"
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
                </svg><span class="text-gray-700">Translator Speech</span>
            </span>
        </a>
    
        <!-- sidenav button-->
        <button id="navbartoggle" type="button"
            class="inline-flex items-center justify-center text-gray-800 hover:text-gray-600 focus:outline-none focus:ring-0 "
            aria-controls="desktp-menu" @click="open = !open" aria-expanded="false"
            x-bind:aria-expanded="open.toString()">
            <span class="sr-only">Mobile menu</span>
            <svg x-description="Icon open" x-state:on="Menu open" x-state:off="Menu closed" class="hidden w-8 h-8"
                :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="bi bi-list" viewBox="0 0 16 16">
                <path class="hidden lg:block" fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                <path class="lg:hidden"
                    d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
    
            <svg x-description="Icon closed" x-state:on="Menu open" x-state:off="Menu closed" class="block w-8 h-8"
                :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="bi bi-filter-left" viewBox="0 0 16 16">
                <path class="lg:hidden" fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                <path class="hidden lg:block"
                    d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
            </svg>
            <!-- <i class="text-2xl fas fa-bars"></i> -->
        </button>
    </div>

    <!-- Search -->
    <form class="hidden mx-5 sm:inline-block md:hidden lg:inline-block">
        <div class="relative flex flex-wrap items-stretch w-full">
            <input type="text"
                class="relative flex-grow flex-shrink max-w-full px-4 py-2 overflow-x-auto text-sm leading-5 text-gray-800 bg-gray-100 border border-gray-100 ltr:rounded-l rtl:rounded-r focus:outline-none focus:border-gray-200 focus:ring-0 dark:text-gray-400"
                placeholder="Search…" aria-label="Search">
            <div class="flex -mr-px">
                <button
                    class="flex items-center px-4 py-2 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
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
    <ul class="flex justify-end mt-0 mt-2 ltr:ml-auto rtl:mr-auto">
        <!-- messages -->
        <li x-data="{ open: false }" class="relative">
            <a href="#" class="flex block px-4 py-3 text-sm rounded-full focus:outline-none"
                id="messages">
                <div class="relative inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-6 h-6 bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                        </path>
                    </svg>

                    <span
                        class="absolute flex justify-center px-1 text-xs text-center text-white bg-pink-500 rounded-full -top-2 ltr:-right-1 rtl:-left-1"><span
                            class="align-self-center">3</span></span>
                </div>
            </a>

        </li>

        <!-- notification -->
        <li x-data="{ open: false }" class="relative" >
            <a href="#" class="flex block px-4 py-3 text-sm rounded-full focus:outline-none"
                id="notify">
                <div class="relative inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell"
                        viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                    <!-- <i class="text-2xl fas fa-bell"></i> -->
                    <span
                        class="absolute flex justify-center px-1 text-xs text-center text-white bg-pink-500 rounded-full -top-2 ltr:-right-1 rtl:-left-1"><span
                            class="align-self-center">1</span></span>
                </div>
            </a>


        </li>
        <!-- profile -->
        <li x-data="{ open: false }" class="relative">
            <a href="javascript:;" class="flex px-3 text-sm rounded-full focus:outline-none" id="user-menu-button" @click="open = ! open">
              <div class="relative">
                <img class="w-10 h-10 " src="src/img/avatar/avatar.png" alt="avatar">
                <span title="online" class="flex justify-center absolute -bottom-0.5 ltr:right-1 rtl:left-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
              </div>
              <span class="self-center hidden md:block ltr:ml-1 rtl:mr-1">Ari Budin</span>
            </a>
            <ul x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition-all duration-200 ease-in" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute ltr:right-0 rtl:left-0 rounded top-full z-50 py-0.5 ltr:text-left rtl:text-right bg-white " style="min-width:12rem;display: none;">
              <li class="relative">
                <div class="flex flex-row flex-wrap items-center px-3 py-4 -mx-4">
                  <div class="flex-shrink w-1/3 max-w-full px-4">
                    <img src="src/img/avatar/avatar.png" class="w-10 h-10 rounded-full" alt="Ari Budin">
                  </div>
                  <div class="flex-shrink w-2/3 max-w-full px-4 ltr:pl-1 rtl:pr-1">
                    <div class="font-bold"><a href="layout-topnav.html#" class="text-gray-800 dark:text-gray-300 hover:text-indigo-500">Ari Budin</a></div>
                    <div class="mt-1 text-sm text-gray">Professional Front end developer.</div>
                  </div>
                </div>
              </li>
              <li class="relative">
                <hr class="my-0 border-t border-gray-200 dark:border-gray-700">
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-cog"></i> --> Settings &amp; Privacy
                </a>
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-question-circle"></i> --> Help &amp; Support
                </a>
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-translate" viewBox="0 0 16 16">
                    <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                    <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-language"></i> --> Change Language
                  </a>
              </li>
              <li class="relative">
                <hr class="my-0 border-t border-gray-200 dark:border-gray-700">
              </li>
              <li class="relative">
                <a class="block clear-both w-full px-6 py-2 whitespace-nowrap hover:text-indigo-500" href="layout-topnav.html#">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline w-4 h-4 ltr:mr-2 rtl:ml-2 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg>
                  <!-- <i class="mr-2 fas fa-sign-out-alt"></i> --> Sign out
                </a>
              </li>
            </ul>
          </li>
    </ul>
</nav>
<!-- End Navbar -->

<!-- desktop menu -->
<div x-bind:aria-expanded="open" :class="{ 'block lg:hidden': open, 'hidden lg:flex': !(open) }"
    class="px-6 mt-0 lg:flex lg:flex-row lg:flex-nowrap lg:items-center lg:justify-between color_nav_dashboard"
    id="desktp-menu">
    <!-- menu -->
    <ul class="flex flex-col mt-3 lg:ltr:mr-auto lg:rtl:ml-auto lg:flex-row lg:mt-0">
        <!-- dropdown -->
        <li class="relative">
            <x-jet-nav-link href="{{route('dashboard')}}" :active="request()->routeIs('dashboard')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="inline-block w-4 h-4 ltr:mr-1 rtl:ml-1 bi bi-house-door" viewBox="0 0 16 16">
                    <path
                        d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                </svg>
                Home
            </a>
            </x-jet-nav-link>
        </li>
        <li class="relative">
            <x-jet-nav-link href="{{ route('traducir.texto') }}" :active="request()->routeIs('traducir.texto')">
                <i class="fa-solid fa-language"></i>
                Traducir Texto
            </x-jet-nav-link>
        </li>
        <li class="relative">
            <x-jet-nav-link href="{{ route('document-translator') }}" :active="request()->routeIs('document-translator')">
                <i class="fa-solid fa-file"></i>
                Traducir Documentos
            </x-jet-nav-link>
        </li>

        <li class="relative">
            <a class="block px-0 py-3 lg:py-7 lg:px-4 hover:text-gray-300 color_nav_fuente" href="#">
                <i class="fa-solid fa-image"></i>
                Traducir Imagenes
            </a>
        </li>

        <li class="relative">
            <x-jet-nav-link href="{{ route('subscription.all') }}" :active="request()->routeIs('subscription.all')">
                <i class="fa-solid fa-file-invoice"></i>
                Subscripciones
            </x-jet-nav-link>
        </li>
    </ul>

    <!-- button -->
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <div class="my-6 text-center lg:block lg:my-auto">
            <button
                class="inline-block px-4 py-2 text-sm leading-5 text-center text-gray-300 bg-indigo-500 border border-indigo-500 rounded hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
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