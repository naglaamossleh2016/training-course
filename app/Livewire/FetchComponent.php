<?php

namespace App\Livewire;
use Illuminate\Support\Facades\http;
use Livewire\Component;

class FetchComponent extends Component
{
    public $name;
    public function clicked(){
      $data=HTTP::get('https://api.github.com/users/naglaamossleh2016');
      $this->name=$data['name'];
    }
    public function render()
    {
        return view('livewire.fetch-component');
    }
}
