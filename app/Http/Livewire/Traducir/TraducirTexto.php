<?php

namespace App\Http\Livewire\Traducir;

use App\Models\recordText;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Termwind\Components\Dd;

class TraducirTexto extends Component
{
    public $path_file_input;
    public $path_file_output;
    public $language_input;
    public $language_output;

    public $idioma2;
    public $recordText;
    protected $listeners = ['saveHistorial','deleteAllRecord'];


    public function mount(){
        $this->text1 = "";
        $this->text2 = "";
        $this->idioma2 = "";
        $this->recordText = recordText::where('id_user', auth()->user()->id)->get();
    }

    public function saveHistorial($input_text, $output_text, $input_language, $output_language, $idiom_input, $idiom_output){
        //dd($input_text,$output_text,$input_language,$output_language);
        recordText::create([
            'path_file_input' => $input_text,
            'path_file_output' => $output_text,
            'language_input' => $input_language,
            'language_output' => $output_language,
            'idiom_input' => $idiom_input,
            'idiom_output' => $idiom_output,
            'id_user' => auth()->user()->id

        ]);
        $this->recordText = recordText::where('id_user', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.traducir.traducir-texto');
    }

    public function deleteAllRecord()
    {
        DB::table('record_texts')->where('id_user', auth()->user()->id)->delete();
        TraducirTexto::mount(); 
    }

    public function deleteOneRecord($id)
    {
        $record = recordText::find($id);
        $record->delete();
        TraducirTexto::mount();
    }
}
