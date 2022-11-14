@section('title', 'Dashboard')
<x-app-layout>
    {{-- NavBar --}}

    <main id="content">
        <!-- =========={ Hero }==========  -->
        <div id="home" class="relative z-0 pt-32 pb-20 overflow-hidden text-dark lg:pt-36 bg-white ">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- row -->
                <div class="flex flex-row flex-wrap justify-center -mx-4 ">
                    <!-- hero content -->
                    <div
                        class="self-center flex-shrink w-full max-w-full px-4 md:w-9/12 lg:w-1/2 lg:ltr:pr-12 lg:rtl:pl-12 ">
                        <div class="mt-6 text-center lg:ltr:text-left lg:rtl:text-right lg:mt-0 ">
                            <div class="mb-8">
                                <h1 class="mb-3 text-4xl font-bold leading-normal text-blue text-left">Usa SYSTRAN
                                    Translate para tus traducciónes más precisa del mundo</h1>
                                <p class=" mb-3  text-2xl font-bold leading-normal text-left text-green">Herramienta de
                                    traduccion en línea</p>
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

                    <!-- hero image -->
                    <div class="self-center flex-shrink w-full max-w-full px-4 md:w-9/12 lg:w-1/2">
                        <div class="px-12 mt-4 md:ml-16 md:pr-0">
                            <img src="{{ asset('src/img/home/machine-translation-2.png') }}" class="max-w-full mx-auto">
                        </div>
                    </div>
                </div><!-- end row -->
            </div>
        </div><!-- end hero -->

        <!-- =========={ features }==========  -->
        <div id="caracteristicas" class="relative pb-2 bg-white pt-14 md:pt-16 md:pb-4 m-12">
            <div class="container px-4 mx-auto xl:max-w-6xl m-12">
                <!-- section header -->
                <header class="mx-auto mb-12 text-center">
                    <h1 class="mb-2 text-3xl font-bold leading-normal text-blue">Nuestras Características</h1>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-amber-500 border-amber-500">
                    {{-- <p class="pb-2 mx-auto text-xl font-semibold leading-relaxed text-green">Traducción rápida, segura y
                        eficaz</p> --}}
                </header><!-- end section header -->
                <div class="columns-4">
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-1.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold mb-3 text-center text-green">Traducción de texto ilimitada
                            </h3>
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
                            <h3 class="text-lg font-bold text-center text-green" mb-3>Traducción de archivos </h3>
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
                            <h3 class="text-lg font-bold mb-3 text-center text-green">Traducciones más personalizadas
                            </h3>
                            <p class="text-center">Define tus preferencias en el Traductor de DeepL para obtener
                                traducciones hechas a medida.</p>
                        </center>
                    </div>
                    <div>
                        <center>
                            <img class="object-[center_bottom]"
                                src="{{ asset('src/img/illustrations/translate-4.svg') }}" alt="icon-translate"
                                width="120" height="120">
                            <h3 class="text-lg font-bold mb-3 text-center text-green">Máxima seguridad de datos</h3>
                            <p class="text-center">Benefíciate de los más altos estándares de protección de datos del
                                mundo con la seguridad de que tus textos serán eliminados tras su traducción.</p>
                    </div>
                    </center>
                </div>
            </div><!-- End features -->
        </div>

        <!-- =========={ about }==========  -->
        <div id="nosotros" class="relative pt-14 md:pt-16 bg-white ">
            <div class="container xl:max-w-6xl mx-auto px-4">
                <!-- section header -->
                <header class="text-left mx-auto mb-12">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-blue">TRADUCIR DOCUMENTOS</h2>
                    <p class="text-2xl font-bold leading-normal text-left text-green">En cualquier formato</p>
                </header><!-- end section header -->

                <div class="flex flex-wrap flex-row -mx-4">
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2">
                        <div class="pb-8 px-3">
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3 text-left">
                                ¡ Traduce tus documentos a más de 100 idiomas en segundos! Obtiene
                                una versión traducida editable de su documento con formato, gráficos
                                e ilustraciones completamente conservados.
                            </p>
                            <p class="leading-relaxed font-light text-xl mx-auto pb-2 mb-3">
                                Se admiten los siguientes formatos:
                            <div>
                                <img src="{{ asset('src/img/home/document-translation-formats.png') }}" alt="">
                            </div>
                            </p>
                        </div>
                    </div>
                    <div class="flex-shrink max-w-full px-4 w-full md:w-1/2 relative">
                        <div class="pb-8 px-3 text-center">
                            <img class="mx-auto max-w-full h-auto"
                                src="{{ asset('src/img/home/pdf-translations.svg') }}" alt="company profile">
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End about-->

        <!-- =========={ about }==========  -->
        <div id="nosotros" class="relative pt-14 md:pt-16 bg-white  ">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- section header -->
                <header class="mx-auto mb-12 text-center">
                    <h2 class="mb-2 text-2xl font-bold leading-normal text-blue">AHORRE TIEMPO Y DINERO</h2>
                    <p class="text-2xl font-bold leading-normal text-center text-green">Con una solución en línea de
                        confianza</p>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-amber-500 border-amber-500">
                </header><!-- end section header -->

                <div class="flex flex-row flex-wrap -mx-4">
                    <div class="relative flex-shrink w-full max-w-full px-4 md:w-1/2">
                        <div class="px-3 pb-8 text-center">
                            <img class="h-auto max-w-full mx-auto"
                                src="{{ asset('src/img/home/Slide17-secured-.svg') }}" alt="company profile">
                        </div>
                    </div>
                    <div class="flex-shrink w-full max-w-full px-4 md:w-1/2">
                        <div class="px-3 pb-8">
                            <p class="pb-2 mx-auto mb-3 text-xl font-light leading-relaxed">
                                Ahorre mucho tiempo con nuestra solución de traducción de documentos:
                                no más copiar y pegar, no es necesario volver a formatear sus documentos.
                                SOLO cargue sus archivos de Word, PDF o PPT.</p>
                            <p class="pb-2 mx-auto mb-12 text-xl font-light leading-relaxed">
                                Ya sea que no pueda pagar una agencia de traducción, tenga grandes volúmenes
                                para traducir o necesite una traducción en este momento, SYSTRAN ofrece una
                                solución con planes asequibles y flexibles.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End about-->

        <!-- =========={ PRICING }==========  -->
        <div class="container mx-auto antialiased text-gray-900 bg-transparent" x-data="setup()">
            <main class="mx-4 my-16">
                <div class="text-center">
                    <h1 class="mb-4 text-2xl font-normal md:text-3xl lg:text-4xl text-blue">
                        <span class="font-semibold">NUESTROS MEJORES PLANES Y PRECIOS</span>
                    </h1>
                    <h1 class="mb-4 text-2xl font-normal md:text-3xl lg:text-4xl text-green">
                        Nuestros <span class="font-semibold">planes</span> para tus <span
                            class="font-semibold">necesidades</span>
                    </h1>
                    <p class="text-sm font-normal text-gray-400">
                        Vea a continuación nuestros tres planes principales para tí.
                    </p>
                    <p class="text-sm font-normal text-gray-400">
                        ¡Empieza desde aquí!, accede a nuestros planes.
                    </p>
                    <hr class="block w-12 h-0.5 mx-auto my-5 bg-amber-500 border-amber-500">
                </div>

                <section>
                    <div class="max-w-full mx-auto md:max-w-6xl sm:px-8">
                        <!-- Basic Pricing -->
                        <div class="relative flex flex-col items-center block sm:flex-row">
                            <div
                                class="relative z-0 w-11/12 max-w-sm my-8 border border-gray-200 rounded-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-mr-4">
                                <div
                                    class="overflow-hidden text-black bg-white border-t border-gray-100 rounded-lg shadow-sm">
                                    <div
                                        class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-6">
                                        <h3 class="p-3 text-lg font-light tracking-wide text-center uppercase">
                                            Plan<span class="ml-2 font-bold">{{ $planBasic->name }}</span></h3>
                                        <h4
                                            class="flex items-center justify-center pb-6 text-4xl font-bold text-center text-gray-900">
                                            <span
                                                class="mr-1 -ml-2 text-lg text-gray-700">$</span>{{ $planBasic->price / 100 }}
                                        </h4>
                                        <p class="text-sm text-gray-600">{{ $planBasic->description }}</p>
                                    </div>

                                    <div class="flex flex-wrap px-6 mt-8">
                                        <ul>
                                            @foreach ($planBasic->planDetails as $plan_detail)
                                                <li class="flex items-center">
                                                    <div class="p-2 text-green-500 rounded-full fill-current ">
                                                        <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span
                                                        class="ml-3 text-lg text-gray-700">{{ $plan_detail->description }}</span>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="flex items-center block p-8 uppercase">
                                        <a href="{{ route('plans.checkout', $planBasic->plan_id) }}"
                                            class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-green-600">
                                            Comprar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pro Pricing -->
                            <div
                                class="relative z-10 w-full max-w-md my-8 bg-white rounded-lg shadow-lg sm:w-2/3 lg:w-1/3 sm:my-5">
                                <div
                                    class="py-4 text-sm font-semibold leading-none tracking-wide text-center text-white uppercase bg-amber-500">
                                    Most Popular</div>
                                <div
                                    class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-6">
                                    <h3 class="p-3 pb-1 text-lg font-light tracking-wide text-center uppercase">
                                        Plan<span class="ml-2 font-bold">{{ $planPremium->name }}</span></h3>
                                    <h4
                                        class="flex items-center justify-center pb-6 text-5xl font-bold text-center text-gray-900">
                                        <span
                                            class="mr-1 -ml-2 text-lg text-gray-700">$</span>{{ $planPremium->price / 100 }}
                                    </h4>
                                    <p class="text-sm text-gray-600">{{ $planPremium->description }}</p>
                                </div>
                                <div class="flex justify-start pl-12 mt-8 sm:justify-start">
                                    <ul>
                                        @foreach ($planPremium->planDetails as $plan_detail)
                                            <li class="flex items-center">
                                                <div class="p-2 text-green-500 rounded-full fill-current">
                                                    <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="ml-3 text-lg text-gray-700">{{ $plan_detail->description }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="flex items-center block p-8 uppercase">
                                    <a href="{{ route('plans.checkout', $planPremium->plan_id) }}"
                                        class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-amber-500">
                                        Comprar</a>
                                </div>
                            </div>
                            <!-- Premium Pricing -->
                            <div
                                class="relative z-0 w-11/12 max-w-sm my-8 rounded-lg shadow-lg sm:w-3/5 lg:w-1/3 sm:my-5 md:-ml-4">
                                <div class="overflow-hidden text-black bg-white rounded-lg shadow-lg shadow-inner">
                                    <div
                                        class="block max-w-sm px-8 mx-auto mt-5 text-sm text-left text-black sm:text-md lg:px-8">
                                        <h3 class="p-3 pb-1 text-lg font-light tracking-wide text-center uppercase">
                                            Plan<span class="ml-2 font-bold">{{ $planStandard->name }}</span></h3>
                                        <h4
                                            class="flex items-center justify-center pb-6 text-4xl font-bold text-center text-gray-900">
                                            <span
                                                class="mr-1 -ml-2 text-lg text-gray-700">$</span>{{ $planStandard->price / 100 }}
                                        </h4>
                                        <p class="pl-2 text-sm text-gray-600">{{ $planStandard->description }}</p>
                                    </div>
                                    <div class="flex flex-wrap px-8 mt-8">
                                        <ul>
                                            @foreach ($planStandard->planDetails as $plan_detail)
                                                <li class="flex items-center">
                                                    <div class="p-2 text-green-500 rounded-full fill-current ">
                                                        <svg class="w-6 h-6 align-middle" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                        </svg>
                                                    </div>
                                                    <span class="ml-3 text-lg text-gray-700">{{ $plan_detail->description }}</span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                    <div class="flex items-center block p-8 uppercase">
                                        <a href="{{ route('plans.checkout', $planStandard->plan_id) }}"
                                            class="block w-full px-6 py-4 mt-3 text-lg font-semibold text-center text-white bg-gray-900 rounded shadow-sm hover:bg-green-600">
                                            Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>






            </main>


</x-app-layout>
