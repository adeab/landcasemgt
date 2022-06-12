<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Caseform extends Component
{
    public $title;
    public $number;
    public $description;



    public function submit(){
        // $validate_data = $this->validate();
    }
    public function render()
    {
        return view('livewire.components.caseform');
    }
}
