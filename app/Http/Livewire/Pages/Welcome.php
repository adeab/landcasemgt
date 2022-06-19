<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\CaseType;

class Welcome extends Component
{
    public $case_number = '';
    public $types;
    public $case_type_id;
    public $showForm = true;

    public function mount(){
        $this->types= CaseType::all();

    }
    public function render()
    {
        return view('livewire.pages.welcome');
    }
    public function getCase()
    {
        return redirect()->to('/status?case_number='.$this->case_number.'&case_type='.$this->case_type_id);
    }
}
