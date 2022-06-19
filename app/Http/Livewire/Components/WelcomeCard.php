<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use App\Models\CaseType;

class WelcomeCard extends Component
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
        return view('livewire.components.welcome-card');
    }
    public function getCase()
    {
        return redirect()->to('/status?case_number='.$this->case_number.'&case_type='.$this->case_type_id);
    }
}
