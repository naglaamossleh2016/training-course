<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;


class UploadFile extends Component
{
    use WithFileUploads;
    
    public $photo;
    public $disk = 'local';
    public function rules(){
       return ['photo'=>'image'];
    }
    public function submit(){
        $this->validate();
        $this->photo->storeAs(path:'local',name:'hello.jpg');
    }
    public function download()
    {
        if (Storage::disk('local')->exists('hello.jpg')) {
        return Storage::disk('local')->download('hello.jpg');
        }
        else{
            dd("not exist");
        }
    }
    public function render()
    {
        return view('livewire.upload-file');
    }

}
