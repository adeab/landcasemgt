<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Casestat extends Component
{
    public $numberofcases;
    public $filter;
    public function mount(){
        $this->numberofcases=20;
    }
    public function updatenumber(){
        $this->numberofcases=rand(10,100);
    }
    public function render()
    {
        return view('livewire.components.casestat');
    }

}
