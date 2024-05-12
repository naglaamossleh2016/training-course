<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class UploadFile extends Component
{
    use WithFileUploads;
    
    public $photo;
    public function rules(){
       return ['photo'=>'image'];
    }
    public function submit(){
        $this->validate();
        $this->photo->storeAs('photos','hello.jpg');
    }
    public function download()
    {
        return Storage::disk('local.photos')->download('hello.jpg');
    }
    public function render()
    {
        return view('livewire.upload-file');
    }

}
