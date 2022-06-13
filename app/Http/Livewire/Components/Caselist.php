<?php

namespace App\Http\Livewire\Components;

use App\Models\LandCase;
use Livewire\Component;

class Caselist extends Component
{
    public $allcases;
    public function render()
    {
        $this->allcases= LandCase::all();
        return view('livewire.components.caselist');
    }
}
