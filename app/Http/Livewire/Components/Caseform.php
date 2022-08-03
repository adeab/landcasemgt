<?php

namespace App\Http\Livewire\Components;

use App\Models\CaseStatus;
use App\Models\CaseType;
use App\Models\LandCase;
use App\Models\People;
use Livewire\Component;

class Caseform extends Component
{
    public $title;
    public $number;
    public $description;
    public $types;
    public $case_type_id;
    public $fiscal_year;
    public $statuses;
    public $case_status_id;
    public $next_date;

    public $plaintiffs;
    public $defendants;

    protected $rules=[
        'number'=>'required',
        'description'=>'',
        'title'=>'',
        'case_type_id'=>'required|numeric',
        'case_status_id'=>'required|numeric',
        'plaintiffs'=>'',
        'defendants'=>'',
        'fiscal_year'=>'required|numeric',
        'next_date'=> 'required'
    ];

    public function mount(){
        $this->types= CaseType::all();
        $this->statuses= CaseStatus::all();
        $this->plaintiffs = [
            [
            'name'=>'',
            'mobile'=>'',
            'address'=>'',
            'email'=>'',
            'involvedAs'=>'plaintiff',
            'guardian'=>''
            ]
        ];
        $this->defendants = [
            [
            'name'=>'',
            'mobile'=>'',
            'address'=>'',
            'email'=>'',
            'involvedAs'=>'defendant',
            'guardian'=>''
            ]
        ];

    }

    public function submit(){
        $validate_data = $this->validate();
        $caseid = LandCase::create($validate_data)->id;
        foreach (array_merge($this->plaintiffs, $this->defendants)  as $person) {
            $person['land_case_id']=$caseid;
            People::create($person);
        }
        $this->emitUp('setMessage', 'মামলাটি নিবন্ধিত হয়েছে!');
        $this->emitUp('switchMode');


    }
    public function addPlaintiff(){
        $this->plaintiffs[] =
            [
            'name'=>'',
            'mobile'=>'',
            'address'=>'',
            'email'=>'',
            'involvedAs'=>'plaintiff',
            'guardian'=>''
            ];
    }
    public function rmvPlaintiff($index){
        unset($this->plaintiffs[$index]);
        array_values($this->plaintiffs);
    }
    public function addDefendants(){
        $this->defendants[] =
            [
            'name'=>'',
            'mobile'=>'',
            'address'=>'',
            'email'=>'',
            'involvedAs'=>'defendant',
            'guardian'=>''
            ];
    }
    public function rmvDefendants($index){
        unset($this->defendants[$index]);
        array_values($this->defendants);
    }
    public function render()
    {
        return view('livewire.components.caseform')
        ->layout('layouts.admin');
    }
}
