<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
   public $name ="ALi";
    public function render()
    {
        return view('livewire.hello-world');
    }
}
