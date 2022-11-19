<div>
    <div class="px-2 mx-auto mt-2 mb-2 ml-72 ">
        <button id="btndelete" class="font-semibold text-blue-600 hover:bg-blue-50 hover:ring-0 hover:border-blue-50 focus:bg-blue-50 focus:border-blue-50 focus:outline-none focus:ring-0">Borrar todo el historial</button>
    </div>
    <hr>
    <div class="overflow-y-scroll h-120" >
        @foreach ( $recordText as $record )
        <div class="grid grid-cols-3 gap-3">
                <div class="col-auto">
                    <p class="font-mono text-left "> {{ $record->language_input}} <i class="text-sm fa-solid fa-arrow-right"></i> {{$record->language_output}}</p>
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
                    <button wire:click="deleteOneRecord({{ $record->id }})"
                        class="w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full btnMicroVoz2 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                        type="button">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                        <span class="msjMicroVoz2">Eliminar del historial</span>
                    </button>
                </div>
        </div>
             
            <p class="mt-2 font-mono text-left">{{ $record->path_file_input}}</p>
            <p class="mb-2 font-mono text-left"> {{ $record->path_file_output}}</p>
            <hr>
        @endforeach
    </div>
    <script defer>
        document.getElementById('btndelete').addEventListener('click', function(){
            Livewire.emit('deleteAllRecord');
        });
    </script>

    <style>
        .h-120 {
            height: 31rem;
        }
    </style>
</div>
