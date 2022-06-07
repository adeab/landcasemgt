<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Status extends Component
{
    public $case;

    public function mount($casenumber)
    {
        $this->case = $casenumber;
    }
    public function render()
    {
        return view('livewire.pages.status');
    }
    public function gotohome(){
        return redirect()->to('/');
    }
}
