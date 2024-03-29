
    <div id="divTraductor" class="text-gray-600 bg-white rounded-lg" style="box-shadow: 0 1px 4px 0 rgb(0 0 0 / 37%);" x-data="{ open: false }">
        <div class="grid h-10 grid-cols-2 mt-1 auto-cols-auto">
            <div class="flex mt-2">
                <div class="ml-4 mr-3">
                    DETECTAR IDIOMA 
                </div>
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
        <div class="grid justify-center grid-cols-2">
            <div class="grid col-span-2 justify-center p-8 {{ !$file ? 'block' : 'hidden' }}">
                <h1 class="font-sans text-xl text-center">Selecciona un documento</h1>
                <p class="font-serif text-center text-gray-400">Sube un archivo .docx, .pdf, .pptx o .xlsx</p>
                <div class="py-5 text-center">
                 @if (Auth::user()->HasRole(['premium']))
                       <label
                        class="inline-block px-4 py-2 text-sm leading-5 text-center text-white bg-indigo-500 border border-indigo-500 rounded hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                     
                        <input type="file" wire:model="file" name="archivo" id="archivo" style="display: none">
                        Subir documento
                    </label>
                     @else
                     <label
                     class="inline-block px-4 py-2 text-sm leading-5 text-center text-white bg-indigo-500 border border-indigo-500 rounded hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                  
                     <button  onclick="mostrarPublicidad();">
                     Subir documento</button>
                 </label> 
                     @endif
                       
                   
                </div>
            </div>
            <div class="grid col-span-2 justify-center p-5 lg:p-10 {{ $file ? 'block' : 'hidden' }}">
                <div class="grid w-full grid-cols-4 p-8 bg-gray-200 lg:grid-cols-6 rounded-xl">
                    <div class="col-span-1">
                        <i class="px-4 text-3xl fa-solid fa-file"></i>
                    </div>
                    <div class="col-span-2 lg:col-span-4" wire:ignore>
                        <p id="filename" class="font-sans text-xl">Cargando...</p>
                        <p id="filestore" class="text-gray-300 text-md">12 kB</p>
                    </div>
                    <div class="col-span-1 pl-5 rounded-full lg:pl-10">
                        <button class="p-3 bg-transparent rounded-full hover:bg-gray-300 w-14 h-14" wire:click="cleanInput"
                            title="Borrar archivo">
                            <i class="rounded-full fa-solid fa-x"></i>
                        </button>
                    </div>
                </div>
                <div class="grid justify-end mt-5">
                    <button id="translate-document"
                        class="inline-block px-4 py-2 text-sm leading-5 text-center text-white bg-indigo-500 border border-indigo-500 rounded hover:text-gray-200 hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                        Traducir
                    </button>
                </div>
            </div>
        </div> 
    </div>

