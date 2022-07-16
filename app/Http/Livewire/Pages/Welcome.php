<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\CaseType;
use Carbon\Carbon;

class Welcome extends Component
{
    // public $case_number = '';
    // public $types;
    // public $case_type_id;
    // public $showForm = true;

    // public $today;

    // public function mount(){
    //     $this->types= CaseType::all();

    //     $now = Carbon::now();
    //     // $this->today = Carbon::now()->format("l").", ".$now->format("M").", ".$now->year;
    //     $this->today = $now->format('l, F Y');

    // }
    public function render()
    {
        return view('livewire.pages.welcome');
    }
    // public function getCase()
    // {
    //     return redirect()->to('/status?case_number='.$this->case_number.'&case_type='.$this->case_type_id);
    // }
    public function gotologin(){
        return redirect()->to('/login');
    }
    public function gotocasesearch(){
        return redirect()->to('/search-case');
    }
}
