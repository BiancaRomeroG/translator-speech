<x-app-layout>

    @section('title', 'Traducir imagen')
    @section('script-css')

        <link rel="stylesheet" href="{{ asset('/css/dragdrop.css') }}">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    @endsection

    {{-- NavBar --}}
    <main>

        <input type="hidden" id="rolUsuario" value="{{ Auth::user()->roles()->first()->name }}">
        <div class="flex flex-wrap">

            <div>
                @if (Auth::user()->HasRole(['premium']))
                @else
                    @include('publicidad.index')
                @endif
            </div>

            @livewire('image-translator.upload-image', ['languages' => $languages])

            {{-- Historial --}}
            <div class="bg-white right fade " style="width: 45%; display:none;" id="record-text">
                <div class="mt-6 mb-8 ml-4">
                    <div class="px-2 mx-auto">
                        <header class="mx-auto mb-4">
                            <button onclick="mostrarHistorial()" type="button" class="close" data-dismiss="modal"
                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h1 class="mb-2 text-3xl font-medium leading-normal bg-white text-dark">Historial</h1>
                        </header>
                        <hr>
                        @livewire('records-image.image-records')
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Image Translator Script --}}
    <script src="{{ asset('js/image-translator/upload.js') }}"></script>



    {{-- Drag & over Image Script --}}
    <script src="{{ asset('js/image-translator/drag.js') }}"></script>

</x-app-layout>
