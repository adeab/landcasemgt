<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Navlogo extends Component
{
    public function render()
    {
        return view('livewire.components.navlogo');
    }
    public function gotohome(){
        return redirect()->to('/');
    }
}
