<div>
    <div class="px-2 mx-auto mt-2 mb-2 flex justify-end">
        <button id="btndelete" wire:click="deleteAllDocumentRecord()"
            class="font-semibold text-blue-600 hover:bg-blue-50 hover:ring-0 hover:border-blue-50 focus:bg-blue-50 focus:border-blue-50 focus:outline-none focus:ring-0">Borrar
            todo el historial</button>
    </div>
    <hr>
    <div class="overflow-y-scroll h-120">
        @foreach ($recordsDocuments as $recordDocument)
            <div class="grid grid-cols-3 gap-3">
                <div class="col-auto flex">
                    <p class="ml-0 font-mono text-left mr-2">{{ $recordDocument->lang_input }}</p>
                    <i class="text-sm fa-solid fa-arrow-right"></i>
                    <p class="font-mono text-left ml-2">{{ $recordDocument->lang_output }}</p>
                </div>
                <div class="col-auto ml-44">
                    <button 
                        class="w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full btnMicroVoz2 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                        type="button">
                        <i class="fa-regular fa-star"></i>
                        <span class="msjMicroVoz2">Guardar traduccion</span>
                    </button>
                </div>
                <div class="col-auto ml-16">
                    <button wire:click="deleteOneDocumentRecord({{ $recordDocument->id }})"
                        class="w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full btnMicroVoz2 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                        type="button">
                        <i class="fa-solid fa-trash"></i>
                        <span class="msjMicroVoz2">Eliminar del historial</span>
                    </button>
                </div>
            </div>
            <div class="flex items-center justify-center mb-6 ">
                <a href="{{$recordDocument->path_file_input}}" style="width: 100px ; height: 40px ; " class="p-3 mt-4 mb-4 " >
                    @if ($recordDocument->extension == 'docx')
                        <img src="{{ asset('src/img/document-translate/logo-docx.png') }}" width="50" height="50">
                    
                    @elseif ($recordDocument->extension == 'pdf')
                        <img src="{{ asset('src/img/document-translate/logo-2-pdf.png') }}" width="50" height="50">
                    
                    @elseif ($recordDocument->extension == 'txt')
                        <img src="{{ asset('src/img/document-translate/logo-txt.png') }}" width="50" height="50">
                    
                    @else
                    <img src="{{asset('src/img/document-translate/document.png')}}" width="50" height="50">
                    @endif
                </a>
                <i class="pt-8 mr-8 text-xl fa-solid fa-arrow-right "></i>
                <a href="{{$recordDocument->path_file_output}}" style="width: 100px ; height: 40px ; " class="p-3 mt-4 mb-4 ">
                    @if ($recordDocument->extension == 'docx')
                        <img src="{{ asset('src/img/document-translate/logo-docx.png') }}" width="50" height="50">
                    
                    @elseif ($recordDocument->extension == 'pdf')
                        <img src="{{ asset('src/img/document-translate/logo-2-pdf.png') }}" width="50" height="50">
                    
                    @elseif ($recordDocument->extension == 'txt')
                        <img src="{{ asset('src/img/document-translate/logo-txt.png') }}" width="50" height="50">
                    
                    @else
                    <img src="{{asset('src/img/document-translate/document.png')}}" width="50" height="50">
                    @endif
                </a>
            </div>
            <p class="mt-2 mb-2 text-center">{{substr($recordDocument->path_file_input, 9)}}</p>
            <hr>
        @endforeach
    </div>
    <script defer>
        document.getElementById('btndelete').addEventListener('click', function() {
            Livewire.emit('deleteAllRecord');
        });
    </script>

    <style>
        .h-120 {
            height: 31rem;
        }
    </style>
</div>
