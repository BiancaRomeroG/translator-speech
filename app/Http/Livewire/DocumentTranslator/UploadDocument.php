<?php

namespace App\Http\Livewire\DocumentTranslator;

use App\Http\Languages;
use App\Models\Record;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDocument extends Component
{
    use WithFileUploads;

    public $file, $lang_output = 'en';
    public $languages;
    public $lang_input = 'es';
    
    

    protected $listeners = [
        'cleanInput',
        'translateDocument',
        'deleteRegister',
        'saveFile',

    ];

    public function render()
    {
        return view('livewire.document-translator.upload-document');
    }

    # Guardar y limpiar File
    public function saveFile($record_id, $url)
    {
        $record = Record::findOrFail($record_id);

        $record->path_file_output = $url;
        $record->lang_input = ucfirst($this->languages[$this->lang_input]["name"]);
        $record->lang_output = ucfirst($this->languages[$this->lang_output]["name"]);
        $record->save();
        
        $this->file = null;
        $this->emit('clearInput');
        
        $this->emit('mount');
    }

    public function translateDocument($filename, $extension)
    {
        try {
            $file = $this->file->storeAs('public', $filename);
            
            $url = Storage::url($file);

            $record = Record::create([
                'path_file_input' => $url,
                'id_user' => Auth::user()->id,
                'extension' => $extension,
            ]);
            

            # Remover el primer "/" para public path
            $sub_url = substr($url, 1, strlen($url));
            $file = fopen(public_path($sub_url), 'r');

            $response = Http::attach($filename, $file, $filename)
                ->post(
                    'https://aitranslator-api.azurewebsites.net/api/DocTranslator?userId=' . Auth::user()->id . '&lang=' . $this->lang_output,
                    [
                        'document' => $file,
                    ]
                );

            $this->emit('return-json', $response->body(), $record->id);
           

            DB::commit();
        } catch (\Throwable $th) {

            DB::rollBack();
            $this->emit('throwable-error', $th);
        }
    }

    public function deleteRegister($record_id)
    {
        $record = Record::findOrFail($record_id);

        $record->delete();
    }

    public function cleanInput() {
        $this->file = '';
        $this->emit('clearInput');
    }

}
