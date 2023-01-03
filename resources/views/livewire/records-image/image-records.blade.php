<div>
    <div class="px-2 mx-auto mt-2 mb-2 flex justify-end">
        <button id="btndelete" wire:click="deleteAllImageRecord()"
            class="font-semibold text-blue-600 hover:bg-blue-50 hover:ring-0 hover:border-blue-50 focus:bg-blue-50 focus:border-blue-50 focus:outline-none focus:ring-0">Borrar
            todo el historial</button>
    </div>
    <hr>
    <div class="overflow-y-scroll h-120">
        @foreach ($recordsImages as $recordsImage)
        <div class="grid grid-cols-3 gap-3">
            <div class="col-auto flex">
                <p class="ml-0 font-mono text-left mr-2">{{ $recordsImage->lang_input }}</p>
                <i class="text-sm fa-solid fa-arrow-right"></i>
                <p class="font-mono text-left ml-2">{{ $recordsImage->lang_output }}</p>
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
                <button wire:click="deleteOneImageRecord({{ $recordsImage->id }})"
                    class="w-10 h-10 mt-auto mb-auto text-center bg-white border border-none rounded-full btnMicroVoz2 hover:text-gray-900 hover:bg-gray-300 hover:ring-0 hover:border-gray-300 focus:bg-gray-300 focus:border-gray-300 focus:outline-none focus:ring-0"
                    type="button">
                    <i class="fa-solid fa-trash"></i>
                    <span class="msjMicroVoz2">Eliminar del historial</span>
                </button>
            </div>
        </div>
        <div class="flex items-center justify-center mb-6 ">
            <a href="{{$recordsImage->path_image_input}}" target="_blank" style="width: 100px ; height: 40px ; " class="p-3 mt-4 mb-4 " >

                 <img src="{{ asset($recordsImage->path_image_input) }}" width="50" height="50">

            </a>
        </div>
        <p class="mt-2 mb-2 text-center">{{substr($recordsImage->text_translated, 9)}}</p>
        <hr>
        @endforeach
    </div>
    <script defer>
        document.getElementById('btndelete').addEventListener('click', function() {
            Livewire.emit('');
        });
    </script>

    <style>
        .h-120 {
            height: 31rem;
        }
    </style>
</div>
