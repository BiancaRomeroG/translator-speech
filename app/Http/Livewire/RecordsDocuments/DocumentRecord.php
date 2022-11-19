<?php

namespace App\Http\Livewire\RecordsDocuments;

use App\Models\Record;
use Livewire\Component;


class DocumentRecord extends Component
{
    public $recordsDocuments;

    public function mount()
    {
        $this->recordsDocuments = Record::where('id_user', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.records-documents.document-record');
    }
}
