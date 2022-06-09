<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Welcome extends Component
{
    public $case_number = '';
    public function render()
    {
        return view('livewire.pages.welcome');
    }
    public function getCase()
    {
        return redirect()->to('/status/'.$this->case_number);
    }
}