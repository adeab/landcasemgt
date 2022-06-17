<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\CaseType;

class Welcome extends Component
{
    public $case_number = '';
    public $types;
    public $case_type_id;

    public function mount(){
        $this->types= CaseType::all();

    }
    public function render()
    {
        return view('livewire.pages.welcome');
    }
    public function getCase()
    {
        return redirect()->to('/status/'.$this->case_number);
    }
}
