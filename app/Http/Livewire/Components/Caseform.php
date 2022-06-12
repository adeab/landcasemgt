<?php

namespace App\Http\Livewire\Components;

use App\Models\LandCase;
use Livewire\Component;

class Caseform extends Component
{
    public $title;
    public $number;
    public $description;

    protected $rules=[
        'number'=>'required',
        'description'=>'',
        'title'=>''
    ];

    public function submit(){
        $validate_data = $this->validate();
        LandCase::create($validate_data);
    }
    public function render()
    {
        return view('livewire.components.caseform');
    }
}
