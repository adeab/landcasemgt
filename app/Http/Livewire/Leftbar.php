<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Leftbar extends Component
{
    public function render()
    {
        return view('livewire.leftbar');
    }
    public function gotohome(){
        return redirect()->to('/');
    }
    public function gotopage($routename){
        return redirect()->route($routename);
    }

}
