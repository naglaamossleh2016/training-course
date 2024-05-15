<?php

namespace App\Livewire;

use Livewire\Component;

class PollComponent extends Component
{
    public $count=0;
    public function refreshSubscribers(){
     $this->count++;
    }
    public function render()
    {
        return view('livewire.poll-component');
    }
}
