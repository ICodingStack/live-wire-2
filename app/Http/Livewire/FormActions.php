<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormActions extends Component
{
    public $name = "IBRA MERI";
    public function changeName($name ="Ali Meri"){
        $this->name =$name;
    }
    public function render()
    {
        return view('livewire.form-actions');
    }
}
