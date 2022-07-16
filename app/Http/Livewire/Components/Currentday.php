<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Carbon\Carbon;

class Currentday extends Component
{
    public $today;
    public function mount(){
        $now = Carbon::now();
        $this->today = $now->format('l, F Y');

    }
    public function render()
    {
        return view('livewire.components.currentday');
    }
}
