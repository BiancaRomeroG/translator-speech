@section('title', 'Traducir Documentos')
@section('script-css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/loader-page.css') }}">

    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection
<x-app-layout>

{{-- condicion para conocer el rol del usuario --}}
        <input type="hidden" id="rolUsuario" value="{{Auth::user()->roles()->first()->name}}">
{{-- NavBar --}}
    <div id="loader-page" class="loader-page">
        <h1 class="grid justify-center font-sans text-3xl font-bold text-center loader-page" style="z-index: 25001;">
            Procesando documento</h1>
    </div>
    <main >   
        <div class="flex flex-wrap">
            <div>
                @if (Auth::user()->HasRole(['premium']))
                    
                @else
                    @include('publicidad.index')
                @endif
               </div>
            <div id="divTraductor" class="flex py-8 border md:py-12 bg-gray-50" style="width: 100%">
                <div class="container px-4 mx-auto xl:max-w-6xl">
                    <!-- card start -->
                    @livewire('document-translator.upload-document', ['languages' => $languages])
                    <div class="mt-6" >
                        <div class="grid grid-rows-1 gap-3 auto-rows-min place-content-center">
                            <div class="flex">
                                <div>
                                    <button {{-- @click="open=!open" --}} onclick="mostrarHistorial();"
                                        class="w-16 h-16 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                        type="button">
                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                    </button>
                                    <br><label class="text-center">Historial</label>
                                </div>
                                {{-- <div>
                                    <button
                                        class="w-16 h-16 ml-6 mr-6 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                        type="button">
                                        <i class="fa-solid fa-star"></i>
                                    </button>
                                    <br><label class="ml-6 mr-6 text-center"onclick="mostrarHistorial()">Guardado</label>
                                </div>
                                <div>
                                    <button
                                        class="w-16 h-16 text-center bg-white border border-gray-300 rounded-full hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                                        type="button">
                                        <i class="fa-solid fa-language"></i>
                                    </button>
                                    <br><label class="text-center">Lenguaje</label>
                                </div> --}}
                            </div>
                        </div>
                    </div> 
                </div>   
            </div>
            {{-- Historial --}}
            <div class="bg-white right fade " style="width: 45%; display:none;" id="record-text">
                <div class="mt-6 mb-8 ml-4">
                    <div class="px-2 mx-auto">
                        <header class="mx-auto mb-4">
                        <button onclick="mostrarHistorial()" type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                            <h1 class="mb-2 text-3xl font-medium leading-normal bg-white text-dark">Historial</h1>
                        </header>
                        <hr>
                        @livewire('records-documents.document-record')
                    </div>
                </div>
            </div>
        </div>
          
    </main>
    <script src="{{ asset('js/document-translator/upload-file.js') }}"></script>
    <script src="{{ asset('js/speach-text/speach.js') }}"></script>

    
</x-app-layout>
