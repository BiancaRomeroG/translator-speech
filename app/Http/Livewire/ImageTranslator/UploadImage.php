<?php

namespace App\Http\Livewire\ImageTranslator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImage extends Component
{
    use WithFileUploads;

    public $file, $lang_output = 'en';
    public $languages;
    public $lang_input = 'es';

    protected $listeners = [
        'translateImage',
    ];

    public function render()
    {
        return view('livewire.image-translator.upload-image');
    }

    public function translateImage() {
        try {
            $file = $this->file->store('public');
            $url = Storage::url($file);



            # Remover el primer "/" para public path
            $sub_url = substr($url, 1, strlen($url));
            $file = fopen(public_path($sub_url), 'r');

            $response = Http::attach("image", $file, "jpg")
                ->post(
                    'https://aitranslator-api.azurewebsites.net/api/ImgTranslator?lang=' . $this->lang_output,
                    [
                        'image' => $file,
                    ]
                );

            $this->emit('return-json', $response->body());

            DB::commit();
        } catch (\Throwable $th) {
            $this->emit('throwable', $th);

            DB::rollBack();
        }
        
    }
}
