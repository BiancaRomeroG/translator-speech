@section('title', 'Dashboard')
<x-app-layout>
    {{-- NavBar --}}

    <main id="content">

        <!-- =========={ Hero }==========  -->
        <div id="home" class="relative z-0 pt-32 pb-20 overflow-hidden text-dark lg:pt-36 ">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <img class="float-right" src="{{ asset('src/img/illustrations/icon-1.svg') }}" alt="icon-translate"
                    width="80" height="80">
                <img class="float-right" src="{{ asset('src/img/illustrations/icon-2.svg') }}" alt="icon-translate"
                    width="80" height="80">
                <img class="float-left " src="{{ asset('src/img/illustrations/icon-4.svg') }}" alt="icon-translate"
                    width="280" height="280">
                <!-- row -->
                <div class="flex flex-row flex-wrap justify-center -mx-4">
                    <!-- hero content -->
                    <div
                        class="self-center flex-shrink w-full max-w-full px-4 md:w-9/12 lg:w-1/2 lg:ltr:pr-12 lg:rtl:pl-12">
                        <div class="mt-6 text-center lg:ltr:text-left lg:rtl:text-right lg:mt-0">
                            <div class="mb-8">
                                <h1 class="mb-3 text-4xl font-bold leading-normal text-indigo-900 text-left">La
                                    traducción automática más precisa y sutil del mundo</h1>
                                <p class="pb-2 mx-auto text-xl font-light leading-relaxed text-dark text-left"> Utiliza
                                    la traducción automática para detectar más de cien idiomas. Esta página proporciona
                                    acceso a servicios en línea que permiten traducir automáticamente un texto en otro
                                    idioma.</p>
                            </div>
                            <a class="inline-block px-4 py-2 mr-4 leading-5 text-center text-white bg-orange-500 border border-gray-100 rounded hover:bg-orange-600 hover:ring-0 hover:border-orange-600 focus:bg-orange-600 focus:border-orange-600 focus:outline-none focus:ring-0"
                                href="landing.html#features">
                                Contactanos para mas información
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div><!-- end hero -->

        <!-- =========={ features }==========  -->
        <div id="caracteristicas" class="relative pb-2 bg-white pt-14 md:pt-16 md:pb-4">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- section header -->
                <header class="mx-auto mb-12 text-center">
                    <h2 class="mb-2 text-2xl font-bold leading-normal text-gray-800 dark:text-gray-400"><span
                            class="font-light">Nuestras</span> Características</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="pb-2 mx-auto text-xl font-light leading-relaxed text-gray-500">traducción rápida, segura y
                        eficaz</p>
                </header><!-- end section header -->
                <div class="columns-4">
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-1.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold mb-3 text-center">Traducción de texto ilimitada </h3>
                            <p class="text-center">Traduce todo lo que quieras, sin límites: di adiós a preocuparte por
                                la cantidad de textos
                                que traduces o por su extensión.</p>
                        </center>

                    </div>
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-2.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold text-center" mb-3>Traducción de archivos </h3>
                            <p class="text-center">Traduce documentos completos con la tranquilidad de que no perderás
                                tiempo arreglando el formato porque se mantiene tal y como estaba en el documento
                                original.</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-3.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold mb-3 text-center">Traducciones más personalizadas</h3>
                            <p class="text-center">Define tus preferencias en el Traductor de DeepL para obtener
                                traducciones hechas a medida.</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-4.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold mb-3 text-center">Máxima seguridad de datos</h3>
                            <p class="text-center">Benefíciate de los más altos estándares de protección de datos del
                                mundo con la seguridad de que tus textos serán eliminados tras su traducción.</p>
                    </div>
                    </center>
                </div>
            </div><!-- End features -->
        </div>

        {{-- <!-- =========={ about }==========  -->
        <div id="nosotros" class="relative pt-14 md:pt-16 bg-white ">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-ligth text-dark"><span class="font-bold">El
                            mejor</span> Traductor automático del mundo</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 relative">
                        <div class="pb-8 px-3 text-center">
                            <img class="mx-auto max-w-full h-auto" src="{{asset('')}}" alt="company profile">
                        </div>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2">
                        <div class="pb-8 px-3">
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3">Las redes neuronales de Translate 
                                Speech son capaces incluso de captar los matices más sutiles y traducirlos mejor que cualquier 
                                otro traductor. </p>
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3">En test "a ciegas" para comparar el Traductor de DeepL con sus rivales, los traductores profesionales 
                                escogieron las traducciones de DeepL tres veces más que las de otros. DeepL alcanza también unas puntuaciones 
                                nunca vistas según los criterios científicos.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End about--> --}}

        <!-- =========={ PRICING }==========  -->
        <div id="precios" class="relative pt-14 pb-2 md:pt-16 md:pb-4 ">
            <div x-data="{ open: false }" class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-center mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-dark"><span
                            class="font-light">Nuestros</span> Precios</h2>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
                    <p class="text-dark leading-relaxed font-light text-xl mx-auto pb-2">Paga una vez y sin costos
                        adicionales</p>
                </header><!-- end section header -->



                <div class="pt-6 text-gray-100">
                    <div class="flex flex-wrap flex-row -mx-4 justify-center">
                        <div class="flex-shrink max-w-full w-full sm:w-11/12 md:w-1/2 lg:w-1/3 px-4">
                            <div class="px-6 md:px-2 lg:px-4">
                                <!-- pricing table -->
                                <div
                                    class="relative py-16 px-12 mb-12 bg-gray-100 dark:bg-gray-900 dark:bg-opacity-30 transform transition duration-300 ease-in-out hover:-translate-y-1 shadow-lg text-center rounded-lg">
                                    <!-- pricing Title -->
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Basico</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold">Gratis</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>Traducción de texto limitada</li>
                                        <li>Lectura de tus traducciones</li>
                                        <li>1 glosario de hasta 10 entradas</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener"
                                            class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Compra
                                            ahora</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>

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
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Premium</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>30</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>Máxima seguridad de datos</li>
                                        <li>Traducción de texto ilimitada</li>
                                        <li>Lectura de tus traducciones</li>
                                        <li>Traduccion de archivos</li>
                                        <li>Tamaño máximo por archivo: 10 MB</li>
                                        <li>Traduccion por voz</li>
                                        <li>Acceso a tu historial de traducciones</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener"
                                            class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Compra
                                            ahora</a>
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
                                    <h3 class="text-lg mb-4 font-semibold uppercase">Estandar</h3>
                                    <div class="pb-2">
                                        <h4 class="text-4xl mb-2 font-semibold"><small>$</small>15</h4>
                                    </div>
                                    <!-- pricing content -->
                                    <ul class="space-y-6 mt-4 mb-12">
                                        <li>Máxima seguridad de datos</li>
                                        <li>Traducción de texto ilimitada</li>
                                        <li>Lectura de tus traducciones</li>
                                        <li>Traduccion por voz</li>
                                        <li>Acceso a tu historial de traducciones</li>
                                    </ul>
                                    <!-- Pricing Button -->
                                    <div class="py-2">
                                        <a href="landing.html#" rel="noopener"
                                            class="py-2 px-4 -ml-1 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">Compra
                                            ahora</a>
                                    </div>
                                </div><!-- end pricing table -->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div><!-- End Pricing -->

    </main>
</x-app-layout>
