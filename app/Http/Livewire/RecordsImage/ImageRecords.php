<?php

namespace App\Http\Livewire\RecordsImage;

use App\Models\Records_image;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ImageRecords extends Component
{

    protected $listeners = ['renderImageRecord'];

    public $recordsImages;

    public function mount()
    {
        $this->recordsImages = Records_image::where('id_user', auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.records-image.image-records');
    }

    public function deleteOneImageRecord($id){
        $record = Records_image::find($id);
        $record->delete();
        ImageRecords::mount();
    }

    public function deleteAllImageRecord(){
        DB::table('records_images')->where('id_user', auth()->user()->id)->delete();
        ImageRecords::mount();
    }

    public function renderImageRecord(){
        ImageRecords::mount();
    }
}
