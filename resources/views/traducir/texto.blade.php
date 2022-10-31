<x-app-layout>

    @section('title', 'Traducir texto')


    {{-- NavBar --}}
    <main>
        <div class="py-8 border md:py-12 bg-gray-50">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- card start -->
                <div class="text-gray-600 bg-white rounded-lg" style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);"
                    x-data="{ open: false }">

                    <div class="grid h-10 grid-cols-2 mt-1 auto-cols-auto">
                        <div class="flex mt-2">
                            <div class="ml-4 mr-3">DETECTAR IDIOMA</div>
                            <div class="h-3">
                                <select id="idioma1" name="idioma1"
                                    class="relative w-auto pl-3 pr-8 overflow-x-auto leading-5 bg-white border border-none appearance-none focus:outline-none focus:border-gray-400 focus:ring-0 select-caret"
                                    aria-label="Default select example">
                                    {{-- <option selected value="0">INGLES</option>
                        <option value="8">ESPAÑOL</option>
                        <option value="3">FRANCES</option>
                        <option value="22">PORTUGUES</option>
                        <option value="8">CAMBA</option> --}}
                                </select>
                            </div>
                        </div>
                        <div class="flex mt-2">
                            <div class="mr-3">IDIOMA</div>
                            <div>
                                <select id="idioma2" name="idioma2" wire:model='idioma2'
                                    class="relative w-auto pl-3 pr-8 overflow-x-auto leading-5 bg-white border border-none appearance-none focus:outline-none focus:border-gray-400 focus:ring-0 select-caret"
                                    aria-label="Default select example">
                                    {{-- <option selected value="0">INGLES</option>
                        <option value="8">ESPAÑOL</option>
                        <option value="3">FRANCES</option>
                        <option value="22">PORTUGUES</option>
                        <option value="8">CAMBA</option> --}}
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 auto-cols-auto">
                       
                        <div class="col-auto p-4 border-t-2">
                            
                          
                                <textarea id="textArea1"
                                    class="relative w-full px-4 py-2 overflow-x-auto text-2xl leading-5 bg-white border border-white rounded focus:outline-none focus:border-white focus:ring-0"></textarea>
                                  
                           
                        </div>
                        <div class="col-auto p-4 border-t-2 border-l-2">
                            {{-- <label class="text-2xl text-gray-400">Traducción</label> --}}
                            <textarea id="textArea2" readonly
                                class="text-2xl text-gray-400 relative w-full px-4 py-2 overflow-x-auto text-2xl leading-5 bg-white border border-white rounded focus:outline-none focus:border-white focus:ring-0"></textarea>
                        </div>
                    </div>


                    <div class=" grid grid-cols-2 auto-cols-auto">
                        <div class=" cont col-auto p-4">

                            <button {{-- @click="open=!open" --}} id="btnStartRecord" 
                                class="btnMicroStart b1 w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button" tittle ="andrea">
                                <i class="fa-solid fa-microphone"></i>
                                <span class="msjMicroStart">Traducir por voz</span>
                            </button>
                            
                            <button  {{--@click="open=!open" --}} id="btnStopRecord"
                            class= "btnMicroStop  mt-auto mb-auto text-center rounded-full h-10 w-10 bg-white border border-none hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                            type="button" >
                             <i class="fa fa-stop-circle"></i>
                             <span class="msjMicroStop">Detener</span>
                          </button>
                            <button {{-- @click="open=!open" --}} id="escuchar_voz" onclick="mostrarEscucharVoz()"
                                class=" btnMicroVoz w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button">
                                <i class="fa-solid fa-volume-high"></i>
                                <span class="msjMicroVoz">Ajustar Voz</span>
                            </button>
                        </div>
                        <div class="col-auto p-4 border-l-2">
                            <button {{-- @click="open=!open" --}} onclick="mostrarEscucharVoz2()"
                                class="btnMicroVoz2 w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button">
                                <i class="fa-solid fa-volume-high"></i>
                               <span class="msjMicroVoz2">Ajustar Voz</span>
                            </button>
                        </div>
                    </div>

   
                </div>
                <span class="action" id="action"  style="display:none;"></span> 
                <div class="grid grid-cols-2">
                    <div id="flotante" style="display:none;" class="mt-3 col-span-1">
                        <div class="flex flex-wrap text-gray-600 bg-white rounded-lg py-2 px-3"
                            style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);">
                            <div class="px-2">
                                <select name="volumen" id="volumen"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">Volumen </option>
                                    <option value="0.2">0.2</option>
                                    <option value="0.4">0.4</option>
                                    <option value="0.6">0.6</option>
                                    <option value="0.8">0.8</option>
                                    <option value="1">1 comun</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <select name="tono" id="tono"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0">Tono</option>
                                    <option value="0">0 comun</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <select name="velocidad" id="velocidad"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">Velocidad</option>
                                    <option value="0">0</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1 comun</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <button id="btnPlay"
                                    class="w-15 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-play"> Play</i>
                                </button>
                            </div>

                            <div class="px-2">
                                <button id="btnStop"
                                    class="w-15 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-stop"> Stop</i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div id="flotante2" style="display:none;" class="mt-3 col-span-1">
                        <div class="flex flex-wrap text-gray-600 bg-white rounded-lg py-2 px-3"
                            style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);">
                            <div class="px-2">
                                <select name="volumen2" id="volumen2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">Volumen </option>
                                    <option value="0.2">0.2</option>
                                    <option value="0.4">0.4</option>
                                    <option value="0.6">0.6</option>
                                    <option value="0.8">0.8</option>
                                    <option value="1">1 comun</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <select name="tono2" id="tono2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="0">Tono</option>
                                    <option value="0">0 comun</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1</option>
                                    <option value="1.5">1.5</option>
                                    <option value="2">2</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <select name="velocidad2" id="velocidad2"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-6 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="1">Velocidad</option>
                                    <option value="0">0</option>
                                    <option value="0.5">0.5</option>
                                    <option value="1">1 comun</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="px-2">
                                <button id="btnPlay2"
                                    class="w-15 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-play"> Play</i>
                                </button>
                            </div>

                            <div class="px-2">
                                <button id="btnStop2"
                                    class="w-15 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-stop"> Stop</i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-6">
                    <div class="grid grid-rows-1 gap-3 auto-rows-min place-content-center">
                        <div class="flex">
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="w-16 h-16 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </button>
                                <br><label class="text-center">Historial</label>
                            </div>
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="w-16 h-16 ml-6 mr-6 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-star"></i>
                                </button>
                                <br><label class="ml-6 mr-6 text-center">Guardado</label>
                            </div>
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="w-16 h-16 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-language"></i>
                                </button>
                                <br><label class="text-center">Lenguaje</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <script src="{{ asset('js/speach-text/speach.js') }}"></script>

    <x-guest.footer></x-guest.footer>
</x-app-layout>
