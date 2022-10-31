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

    public $file, $lang = 'en';
    public $languages;

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
        $record->save();

        $this->file = null;
        $this->emit('clearInput');
    }

    public function translateDocument($filename)
    {

        try {
            $file = $this->file->storeAs('public', $filename);
            $url = Storage::url($file);

            $record = Record::create([
                'path_file_input' => $url,
                'id_user' => Auth::user()->id,
            ]);

            # Remover el primer "/" para public path
            $sub_url = substr($url, 1, strlen($url));
            $file = fopen(public_path($sub_url), 'r');

            $response = Http::attach($filename, $file, $filename)
                ->post(
                    'https://aitranslator-api.azurewebsites.net/api/DocTranslator?userId=' . Auth::user()->id . '&lang=' . $this->lang,
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
