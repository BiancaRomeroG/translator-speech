<?php

namespace App\Http\Livewire\Traducir;

use App\Models\recordText;
use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;


class TraducirTexto extends Component
{
    public $path_file_input;
    public $path_file_output;
    public $language_input;
    public $language_output;
    public $idioma2;

    protected $listeners = ['saveHistorial'];


    public function mount(){
        $this->text1 = "";
        $this->text2 = "";
        $this->idioma2 = "";
    }

    public function saveHistorial($input_text, $output_text, $input_language, $output_language){
        //dd($input_text,$output_text,$input_language,$output_language);
        recordText::create([
            'path_file_input' => $input_text,
            'path_file_output' => $output_text,
            'language_input' => $input_language,
            'language_output' => $output_language,
            'id_user' => auth()->user()->id
        ]);
    }

    public function render()
    {
        return view('livewire.traducir.traducir-texto');
    }
}
