<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Casemgt extends Component
{
    public $list_mode = true;

    protected $listeners = ['switchMode' => 'switchMode'];

    public function render()
    {
        return view('livewire.pages.casemgt');
    }
    public function switchMode(){
        $this->list_mode=!$this->list_mode;
    }
}
