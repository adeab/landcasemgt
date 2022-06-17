<?php

namespace App\Http\Livewire\Components;

use App\Models\LandCase;
use Livewire\Component;
use Livewire\WithPagination;

class Caselist extends Component
{
    use WithPagination;
    // public $allcases;


    public function render()
    {
        return view('livewire.components.caselist', [
            'allcases' => LandCase::orderBy('created_at', 'DESC')->paginate(10),
        ]);
    }
}
