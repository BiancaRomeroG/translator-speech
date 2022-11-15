@section('title', 'Traducir Documentos')
@section('script-css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/loader-page.css') }}">
@endsection
<x-app-layout>
    {{-- NavBar --}}
    <div id="loader-page" class="loader-page">
        <h1 class="grid justify-center font-sans text-3xl font-bold text-center loader-page" style="z-index: 25001;">
            Procesando documento</h1>
    </div>
    <main>
        <div class="py-8 border md:py-12 bg-gray-50">
            <div class="container px-4 mx-auto xl:max-w-6xl">
                <!-- card start -->
                @livewire('document-translator.upload-document', ['languages' => $languages])
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
                {{-- Historial --}}
                <div class="container bg-white modal right fade " style="width: 45%; display:none;" id="record-text">
                    <div class="min-h-screen mt-6 mb-8 ml-4">
                        <div class="px-2 mx-auto modal-header">
                            <header class="mx-auto mb-4">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h1 class="mb-2 text-3xl font-medium leading-normal bg-white text-dark">Historial</h1>
                            </header>
                        </div>
                        <hr>
                        <div class="px-2 mx-auto mt-2 mb-2 ml-56 ">

                            <head class="mx-auto mb-4 text-right">
                                <button
                                    class="text-right text-blue-700 hover:bg-blue-50 hover:ring-0 hover:border-blue-50 focus:bg-blue-50 focus:border-blue-50 focus:outline-none focus:ring-0">Borrar
                                    todo el historial</button>
                            </head>
                        </div>
                        <hr>
                        <div class="modal-body">
                            <p>hola como estas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/document-translator/upload-file.js') }}"></script>
    <script src="{{ asset('js/speach-text/speach.js') }}"></script>

    <script>
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</x-app-layout>
