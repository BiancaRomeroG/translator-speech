    <!-- Navbar -->
    <nav class="flex flex-row items-center justify-between px-6 py-4 bg-white border-b border-gray-200 flex-nowrap"
        id="desktop-menu">
        <!-- logo -->
        <div class="flex">
            <a class="flex items-center mr-2 text-xl ltr:mr-4 rtl:ml-4" href="{{ route('dashboard') }}">
                <span class="block text-2xl font-semibold text-gray-200 lg:hidden">
                    <!-- <img class="inline-block h-auto -mt-1 w-7" src="src/img/logo.png"> -->
                    <img class="inline-block h-auto -mt-1 w-7" src="{{ asset('src/img/favicon.png') }}">
                </span>
                <span class="hidden text-2xl font-semibold text-gray-200 lg:block">
                    <img class="inline-block h-auto -mt-1 w-7" src="{{ asset('src/img/favicon.png') }}">
                    <span
                        class="ml-1 font-bold bg-gradient-to-r from-green-300 via-blue-500 to-indigo-600 bg-clip-text text-transparent">SYSTRAN</span>
                </span>
            </a>

            <!-- sidenav button-->
            <button id="navbartoggle" type="button"
                class="inline-flex items-center justify-center text-orange-400 hover:text-orange-600 focus:outline-none focus:ring-0 "
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
            <!-- Search -->
            {{-- <div class="inline-flex">
                <form class="hidden mx-5 sm:inline-block md:hidden lg:inline-block">
                    <div class="relative flex flex-wrap items-stretch w-full">
                        <input type="text"
                            class="relative flex-grow flex-shrink max-w-full px-4 py-2 overflow-x-auto text-sm leading-5 text-gray-800 bg-gray-100 border border-gray-100 ltr:rounded-l rtl:rounded-r focus:outline-none focus:border-gray-200 focus:ring-0"
                            placeholder="Search…" aria-label="Search">
                        <div class="flex -mr-px">
                            <button
                                class="flex items-center px-4 py-2 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="w-5 h-5">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <!-- <i class="fas fa-search"></i> -->
                            </button>
                        </div>
                    </div>
                </form>
            </div> --}}
        </div>


        <!-- menu -->
        <ul class="flex justify-end mt-0 ltr:ml-auto rtl:mr-auto">
            <!-- messages -->
            {{-- <li x-data="{ open: false }" class="relative">
                <a href="javascript:;" class="block px-4 pt-1 text-sm rounded-full focus:outline-none"
                    id="messages" @click="open = ! open">
                    <div class="relative inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 bi bi-bell"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                        <!-- <i class="text-2xl fas fa-envelope"></i> -->
                        <span
                            class="absolute flex justify-center px-1 text-xs text-center text-white bg-pink-500 rounded-full -top-2 ltr:-right-1 rtl:-left-1"><span
                                class="align-self-center">3</span></span>
                    </div>
                </a>

                <div x-show="open" @click.away="open = false"
                    x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition-all duration-200 ease-in"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="w-72 origin-top-right absolute ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 bg-white shadow-md"
                    style="display: none;">
                    <div class="p-3 font-normal border-b border-gray-200">
                        <div class="relative">
                            <div class="font-bold">Messages</div>
                            <div x-data="{ open: false }" class="absolute top-0 ltr:right-0 rtl:left-0">
                                <a @click="open = ! open" href="javascript:;" class="inline-block ltr:mr-2 rtl:ml-2"
                                    title="Search message">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="inline-block w-4 h-4 bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                    <!-- <i class="fas fa-search"></i> -->
                                </a>
                                <div x-show="open" @click.away="open = false"
                                    class="absolute z-10 origin-top-right bg-white rounded ltr:right-0 rtl:left-0 dark:bg-gray-700"
                                    style="min-width:16rem">
                                    <form class="inline-block w-full">
                                        <div class="relative flex flex-wrap items-stretch w-full">
                                            <input type="text"
                                                class="relative flex-grow flex-shrink max-w-full px-4 py-2 overflow-x-auto text-sm leading-5 text-gray-800 bg-gray-100 border border-gray-100 ltr:rounded-l rtl:rounded-r focus:outline-none focus:border-gray-200 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600"
                                                placeholder="Search messages…" aria-label="Search">
                                            <div class="flex -mr-px">
                                                <button
                                                    class="flex items-center px-4 py-2 leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 ltr:-ml-1 rtl:-mr-1 ltr:rounded-r rtl:rounded-l hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0"
                                                    type="button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="w-5 h-5">
                                                        <circle cx="11" cy="11" r="8">
                                                        </circle>
                                                        <line x1="21" y1="21" x2="16.65"
                                                            y2="16.65"></line>
                                                    </svg>
                                                    <!-- <i class="fas fa-search"></i> -->
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="layout-topnav.html#" class="inline-block ltr:mr-2 rtl:ml-2"
                                    title="Mark all as read">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="inline-block w-4 h-4 bi bi-envelope-open" viewBox="0 0 16 16">
                                        <path
                                            d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
                                    </svg>
                                    <!-- <i class="fas fa-envelope-open"></i> -->
                                </a>
                                <a href="layout-topnav.html#" class="inline-block ltr:mr-2 rtl:ml-2"
                                    title="New message">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        class="inline-block w-4 h-4 bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                    <!-- <i class="fas fa-edit"></i> -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-y-auto max-h-60 scrollbars show">
                        <a href="layout-topnav.html#">
                            <div
                                class="flex flex-row flex-wrap items-center py-2 border-b border-gray-200 dark:border-gray-700 dark:bg-gray-900 dark:bg-opacity-40 dark:hover:bg-opacity-20 hover:bg-gray-100 bg-gray-50">
                                <div class="flex-shrink w-1/4 max-w-full px-2 text-center">
                                    <div class="relative">
                                        <img src="src/img/avatar/avatar2.png" class="w-10 h-10 mx-auto rounded-full"
                                            alt="Daniel Esteban">
                                        <span title="online"
                                            class="flex justify-center absolute -bottom-0.5 ltr:right-2 rtl:left-2 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
                                    </div>
                                </div>
                                <div class="flex-shrink w-3/4 max-w-full px-2">
                                    <div class="text-sm font-bold">Daniel Esteban</div>
                                    <div class="mt-1 text-sm text-gray-500">What do you think about this project?</div>
                                    <div class="mt-1 text-sm text-gray-500">12m ago</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-3 font-normal text-center">
                        <a href="layout-topnav.html#" class="hover:underline">Show all Messages</a>
                    </div>
                </div>
            </li> --}}

            <!-- notification -->
            <li x-data="{ open: false }" class="relative">
                @livewire('notification.notification-index')
            </li>
            <!-- profile -->
            <li x-data="{ open: false }" class="relative">
                <button @click="open = ! open"
                    class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 md:mr-0 focus:ring-4 focus:ring-gray-100">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 mr-2 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="user photo">
                    {{ Auth::user()->name }}
                    <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition-all duration-200 ease-out"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition-all duration-200 ease-in"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="w-60 origin-top-right absolute right-0 ltr:-right-36 md:ltr:right-0 rtl:-left-36 md:rtl:left-0 rounded top-full z-50 py-0.5 bg-white shadow-md"
                    style="display: none;">
                    <div class="px-4 py-3 text-sm text-gray-900">
                        <div class="font-medium ">
                            @forelse (Auth::user()->roles as $role)
                                {{ $role->name }}
                            @empty
                                Sin roles
                            @endforelse
                        </div>
                        <div class="truncate">{{ Auth::user()->email }}</div>
                    </div>
                    <ul class="py-1 text-sm text-gray-700"
                        aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                        <li>
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-100">Mi
                                Perfil</a>
                        </li>
                        {{-- <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                      </li>
                      <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
                      </li> --}}
                    </ul>
                    <hr>
                    <div class="py-1">
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
                            <ul class="py-1 text-sm text-gray-700"
                                aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                                <li>
                                    <a href="route('logout')"
                                        onclick="event.preventDefault();
                    this.closest('form').submit();"
                                        class="block px-4 py-2 hover:bg-gray-100">Cerrar
                                        Sesión</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
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
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <i class="fa-solid fa-house"></i>
                    Home
                </x-jet-nav-link>
            </li>
            <li class="relative">
                <x-jet-nav-link href="{{ route('traducir.texto') }}" :active="request()->routeIs('traducir.texto')">
                    <i class="fa-solid fa-language"></i>
                    Traducir Texto
                </x-jet-nav-link>
            </li>
            {{-- condicion para habilitar las sgtes opciones --}}

            <li class="relative">
                <x-jet-nav-link href="{{ route('document-translator') }}" :active="request()->routeIs('document-translator')">
                    <i class="fa-solid fa-file"></i>
                    Traducir Documentos
                </x-jet-nav-link>

            </li>
            {{-- opcion habilitada si tiene algun rol --}}
            <li class="relative">
                <x-jet-nav-link href="{{ route('traducir.imagen') }}" :active="request()->routeIs('traducir.imagen')">
                    <i class="fa-solid fa-image"></i>
                    Traducir Imagenes
                </x-jet-nav-link>
            </li>


            <li class="relative">
                <x-jet-nav-link href="{{ route('subscription.all') }}" :active="request()->routeIs('subscription.all', 'plans.checkout')">
                    <i class="fa-solid fa-file-invoice"></i>
                    Subscripciones
                </x-jet-nav-link>
            </li>
        </ul>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"
            integrity="sha512-eiqtDDb4GUVCSqOSOTz/s/eiU4B31GrdSb17aPAA4Lv/Cjc8o+hnDvuNkgXhSI5yHuDvYkuojMaQmrB5JB31XQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            Livewire.on('pushNotification', function() {
                const imagen = '{{ asset('src/img/favicon.png') }}';
                Push.create('Notificacion', {
                    body: "SYSTRAN hay informacion de tu plan",
                    //timeout: 5000,
                    icon: imagen,
                    onClick: function() {
                        window.focus();
                        this.close();
                    }
                });
            });
            

            Livewire.on('Are_sure_deleteAll', function() {
                Swal.fire({
                    title: 'Estas seguro de eliminar todo?',
                    text: "No tendras vuelta atras!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#00D80B',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar!',
                    cancelButtonText: 'Cancelar'

                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('yes_deleteAll');
                        Swal.fire(
                            'Eliminado!',
                            'Tus notificaciones han sido eliminadas.',
                            'success'
                        )
                    }
                })
            });

            Livewire.on('Are_sure_deleteSelected', function(id) {
                Swal.fire({
                    title: 'Estas seguro de eliminar?',
                    text: "No tendras vuelta atras!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#00D80B',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar!',
                    cancelButtonText: 'Cancelar'

                }).then((result) => {
                    if (result.isConfirmed) {
                        Livewire.emit('yes_deleteSelected', id);
                        Swal.fire(
                            'Eliminado!',
                            'Tu notificacion ha sido eliminada.',
                            'success'
                        )
                    }
                })
            });
        </script>


        {{-- <script>
        // const tradDoc = document.querySelector("#permisoVistaDoc");
     
        // tradDoc.addEventListener("click",prueba)
        function prueba(){
             toastr.info("Adquiere el plan PREMIUM para usar esta función")
             toastr.options.closeButton = true;
             toastr.options.preventDuplicates = true;
        }
      </script>
  --}}
        <!-- button -->
        {{-- <form method="POST" action="{{ route('logout') }}" x-data>
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
                    Cerrar Sesión
                </button>
            </div>
        </form> --}}
    </div>
