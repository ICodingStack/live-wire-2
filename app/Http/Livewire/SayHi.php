<?php

namespace App\Http\Livewire;

use App\contact;
use Livewire\Component;

class SayHi extends Component
{
   public $contact;
   public function mount(contact $contact){
       $this->contact =$contact;
   }


    public function render()
    {
        return view('livewire.say-hi');
    }
}
