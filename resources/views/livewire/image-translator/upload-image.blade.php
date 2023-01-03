<div id="divTraductor" class="py-8 border md:py-12 bg-gray-50" style="width: 100%">
    <div class="container px-4 mx-auto xl:max-w-6xl">
        <!-- card start -->
        <div class="text-gray-600 bg-white rounded-lg" style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);"
            x-data="{ open: false }">

            <div class="grid h-10 grid-cols-2 mt-1 auto-cols-auto">
                <div class="flex mt-2">
                    <div class="ml-4 mr-3">DETECTAR IDIOMA</div>
                    <div class="h-3">
                        <select wire:model="lang_input"
                            class="relative w-auto pl-3 pr-8 overflow-x-auto leading-5 bg-white border border-none appearance-none select2 focus:outline-none focus:border-gray-400 focus:ring-0 select-caret"
                            aria-label="Default select example">
                            <option selected value="es">Español</option>
                            @foreach ($languages as $key => $language)
                                <option value="{{ $key }}">{{ $language['name'] }}</option>
                            @endforeach
                        </select>
            
                    </div>
                </div>
                <div class="flex mt-2">
                    <div class="mr-3">IDIOMA</div>
                    <div>
                        <select wire:model="lang_output"
                            class="relative w-auto pl-3 pr-8 overflow-x-auto leading-5 bg-white border border-none appearance-none focus:outline-none focus:border-gray-400 focus:ring-0 select-caret"
                            aria-label="Default select example">
                            <option selected value="es">Español</option>
                            @foreach ($languages as $key => $language)
                                <option value="{{ $key }}">{{ $language['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 auto-cols-auto">
                <div class="col-auto p-4 border-t-2">

                    <div wire:ignore class="containerdd" style="max-width: 600px">
                        <h3>SUBIR IMAGEN</h3>
                        <div class="drag-area" style="height: 250px">
                            <div class="icono" style="font-size: 15px">
                                <i class="fas fa-images"></i>
                            </div>
                            <span class="header" style="font-size: 15px">Arrastrar y soltar en el
                                area</span>
                            <span class="header" style="font-size: 15px">o <span class="buttonDrop"
                                    style="font-size: 12px">navega</span></span>
                            <span class="support" style="font-size: 15px">Support: JPEG, JPG,
                                PNG</span>
                        </div>
                        <input wire:model="file" type="file" id="img" name="NOMBRE-INPUT" class="form-control"
                            accept=".jpge,.jpg,.png" hidden>
                    </div>


                    <!-- Borrar este text area le quita el estilo al que muestra las traducciones -->

                    <textarea hidden id="textArea1"
                        class="relative w-full px-4 py-2 overflow-x-auto text-2xl leading-5 bg-white border border-white rounded focus:outline-none focus:border-white focus:ring-0"></textarea>
                    <div class="flex justify-end">
                        <button id="btnClearArea" onclick="vaciarTextsArea()"
                            class="w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full btnMicroVoz2 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                            type="button" style="display: none;">
                            <i class="fa-regular fa-x"></i>
                            <span class="msjMicroVoz2">Vaciar</span>
                        </button>
                    </div>

                    <!-- Borrar este text area le quita el estilo al que muestra las traducciones -->

                </div>
                <div class="col-auto p-4 border-t-2 border-l-2">
                    {{-- <label class="text-2xl text-gray-400">Traducción</label> --}}
                    <textarea id="textArea2" readonly rows="17"
                        class="relative w-full px-4 py-2 overflow-x-auto text-2xl leading-5 text-gray-400 bg-white border border-white rounded focus:outline-none focus:border-white focus:ring-0"></textarea>
                </div>
            </div>


            <div class="grid grid-cols-2 auto-cols-auto">
                <div class="col-auto p-4 cont">
                    <div class="grid justify-end">
                        <div class="">
                            <button
                                class="px-3 py-2 text-white bg-indigo-500 rounded-tl-lg rounded-br-lg hover:bg-indigo-600 "
                                id="btnTraducir">
                                <i class="fa-solid fa-language"></i>
                                Traducir</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <span class="action" id="action" style="display:none;"></span>
 

        <div class="mt-6">
            <div class="grid grid-rows-1 gap-3 auto-rows-min place-content-center">
                <div class="flex">
                    <div>
                        <button {{-- @click="open=!open" --}} onclick="mostrarHistorial()"
                            class="w-16 h-16 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                            type="button">
                            <i class="fa-solid fa-clock-rotate-left"></i>
                        </button>
                        <br><label class="text-center">Historial</label>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/speach-text/speach.js') }}"></script>

</div>