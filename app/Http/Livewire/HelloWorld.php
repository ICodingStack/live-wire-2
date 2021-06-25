<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name ="ALi";
    public $last ="Meri";
    public $loud =false;
    public $gretting =["hi"];
    public function mount(){
        $this->name ="Chigo";
    }
    public function updatedName(){
        $this->name=strtoupper($this->name);
    }
//    public function resetName($name = 'bingo'){
//        $this->name =$name;
//    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
