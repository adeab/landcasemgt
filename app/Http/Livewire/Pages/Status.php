<?php

namespace App\Http\Livewire\Pages;

use App\Models\LandCase;
use Livewire\Component;

class Status extends Component
{
    public $case_number;
    public $case_type;

    protected $queryString =['case_number', 'case_type'];

    public function mount()
    {
        // $this->case = ;
    }
    public function render()
    {

        return view('livewire.pages.status', [
            'case'=> LandCase::where('number',$this->case_number)->where('case_type_id', $this->case_type)->with('people')->first()
        ]);
    }
    public function gotohome(){
        return redirect()->to('/');
    }
}
