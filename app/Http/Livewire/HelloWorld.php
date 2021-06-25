<?php

namespace App\Http\Livewire;

use App\contact;
use Livewire\Component;

class HelloWorld extends Component
{
    public $contacts;
    public function mount(){
      $this->contacts =contact::all();
    }
    public function remove($name){

       contact::whereName($name)->first()->delete();
        $this->contacts =contact::all();
    }
//    public $name ="ALi";
//    public $last ="Meri";
//    public $loud =false;
//    public $gretting =["hi"];
//    public function mount(){
//        $this->name ="Chigo";
//    }
//    public function updatedName(){
//        $this->name=strtoupper($this->name);
//    }
//    public function resetName($name = 'bingo'){
//        $this->name =$name;
//    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
