<x-app-layout>
    @section('title', 'Traducir texto')
    {{-- NavBar --}}
    <main>
        <div class="py-8 md:py-12 bg-gray-50 border">
            <div class="container mx-auto px-4 xl:max-w-6xl">
                <!-- card start -->
                <div class="bg-white rounded-lg text-gray-600" style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);"
                    x-data="{ open: false }">

                    <div class="grid grid-cols-2 auto-cols-auto h-10 mt-1">
                        <div class="flex mt-2">
                            <div class="ml-4 mr-3">DETECTAR IDIOMA</div>
                            <div class="h-3">
                                <select
                                    class="w-auto leading-5 relative pl-3 pr-8 bg-white border border-none overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 select-caret appearance-none"
                                    aria-label="Default select example">
                                    <option selected>INGLES</option>
                                    <option value="1">ESPAÑOL</option>
                                    <option value="2">FRANCES</option>
                                    <option value="3">CAMBA</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex mt-2">
                            <div class="mr-3">IDIOMA</div>
                            <div>
                                <select
                                    class="w-auto leading-5 relative pl-3 pr-8 bg-white border border-none overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 select-caret appearance-none"
                                    aria-label="Default select example">
                                    <option selected>INGLES</option>
                                    <option value="1">ESPAÑOL</option>
                                    <option value="2">FRANCES</option>
                                    <option value="3">CAMBA</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 auto-cols-auto">
                        <div class="col-auto p-4 border-t-2">
                            <textarea
                                class="w-full leading-5 relative py-2 px-4 rounded bg-white border border-white overflow-x-auto focus:outline-none focus:border-white focus:ring-0 text-2xl"></textarea>
                        </div>
                        <div class="col-auto p-4 border-l-2 border-t-2">
                            <label class="text-2xl text-gray-400">Traducción</label>
                        </div>
                    </div>


                    <div class="grid grid-cols-2 auto-cols-auto">
                        <div class="col-auto p-4">
                            <button {{-- @click="open=!open" --}}
                                class="mt-auto mb-auto text-center rounded-full h-10 w-10 bg-white border border-none hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button">
                                <i class="fa-solid fa-microphone"></i>
                            </button>
                            <button {{-- @click="open=!open" --}}
                                class="mt-auto mb-auto text-center rounded-full h-10 w-10 bg-white border border-none hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button">
                                <i class="fa-solid fa-volume-high"></i>
                            </button>
                        </div>
                        <div class="col-auto p-4 border-l-2">
                            <button {{-- @click="open=!open" --}}
                                class="mt-auto mb-auto text-center rounded-full h-10 w-10 bg-white border border-none hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                type="button">
                                <i class="fa-solid fa-volume-high"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <div class="grid grid-rows-1 gap-3 auto-rows-min place-content-center">
                        <div class="flex">
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="text-center rounded-full h-16 w-16 bg-white border border-gray-300 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-clock-rotate-left"></i>
                                </button>
                                <br><label class="text-center">Historial</label>
                            </div>
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="ml-6 mr-6 text-center rounded-full h-16 w-16 bg-white border border-gray-300 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                    type="button">
                                    <i class="fa-solid fa-star"></i>
                                </button>
                                <br><label class="text-center ml-6 mr-6">Guardado</label>
                            </div>
                            <div>
                                <button {{-- @click="open=!open" --}}
                                    class="text-center rounded-full h-16 w-16 bg-white border border-gray-300 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
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
    <x-guest.footer></x-guest.footer>
</x-app-layout>
