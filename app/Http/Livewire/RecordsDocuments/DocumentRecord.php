<?php

namespace App\Http\Livewire\RecordsDocuments;

use App\Http\Livewire\DocumentRecord as LivewireDocumentRecord;
use App\Models\Record;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class DocumentRecord extends Component
{
    public $recordsDocuments;
    
    protected $listeners = ['mount'];

    public function mount()
    {
        $this->recordsDocuments = Record::where('id_user', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.records-documents.document-record');
    }

    public function deleteOneDocumentRecord($id){
        $record = Record::find($id);
        $record->delete();
        DocumentRecord::mount();
    }

    public function deleteAllDocumentRecord(){
        DB::table('records')->where('id_user', auth()->user()->id)->delete();
        DocumentRecord::mount();
    }

    public static function reRender() {
        LivewireDocumentRecord::mount();
    }
}
