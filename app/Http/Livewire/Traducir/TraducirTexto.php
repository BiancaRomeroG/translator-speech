<?php

namespace App\Http\Livewire\Traducir;

use Livewire\Component;
use Stichoza\GoogleTranslate\GoogleTranslate;


class TraducirTexto extends Component
{
    public $text1;
    public $text2;
    public $idioma2;

    public function mount(){
        $this->text1 = "";
        $this->text2 = "";
        $this->idioma2 = "";
    }
    public function traducirTexto(){
        $lang = new GoogleTranslate();
        $this->textArea2 = $lang->setSource()->setTarget($this->idioma2)->translate($this->textArea1);
    }

    public function render()
    {
    
        return view('livewire.traducir.traducir-texto');
    }
}
