<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateCv extends Component
{
    public  $fullName;
    public $email;
    public $age;
    public $nationality;
    public $gender;
    public $terms =false;
    public $info;
    public $exp =[];
    public function render()
    {
        return view('livewire.create-cv');
    }
}
