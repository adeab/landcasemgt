<?php

namespace App\Http\Livewire\Components;

use App\Models\CaseType;
use App\Models\LandCase;
use Livewire\Component;

class Caseform extends Component
{
    public $title;
    public $number;
    public $description;
    public $types;
    public $selected_type;

    protected $rules=[
        'number'=>'required',
        'description'=>'',
        'title'=>'',
        'selected_type'=>'required|numeric'
    ];

    public function mount(){
        $this->types= CaseType::all();
    }

    public function submit(){
        $validate_data = $this->validate();
        $caseid = LandCase::create($validate_data)->id;
        dd($caseid);
    }
    public function render()
    {
        return view('livewire.components.caseform');
    }
}
