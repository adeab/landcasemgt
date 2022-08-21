<?php

namespace App\Http\Livewire\Components;

use App\Models\LandCase;
use Livewire\Component;
use App\Models\CaseStatus;
use App\Models\CaseType;
use Livewire\WithPagination;

class Caselist extends Component
{
    public $search;
    public $selected_types;
    public $selected_statuses;
    public $types;

    public $statuses;
    use WithPagination;

    public function showVal(){
        // dd($this->selected_types);
        dd(count(array_filter($this->selected_types,function($a) {return $a==false;})));
    }

    public function mount(){
        $this->types= CaseType::all();
        $this->statuses= CaseStatus::all();

    }
    public function render()
    {
        // $key = $this->search;
        $cases = Landcase::query()->orderBy('created_at', 'DESC');

        $cases->where(function ($query) {
            $key = $this->search;
            $query
              ->where('number', 'like', '%'.$this->search.'%')
              ->orWhere('title', 'like', '%'.$this->search.'%')
              ->orWhereHas('status', function ($query) use ($key) {
                $query->where('title', 'like', $key.'%');
                })
              ->orWhereHas('type', function ($query) use ($key) {
                  $query->where('name', 'like', $key.'%');
              });
            });

        if($this->selected_types){

            $hasFalse = count(array_filter($this->selected_types,function($a) {return $a==false;}));
            if(count($this->selected_types) != $hasFalse ){
                $ids= $this->selected_types;
                $cases->whereHas('type', function ($query) use ($ids){
                $query->whereIn('id', $ids);
             });
            }
            // else{
            //     $allids= $this->all_types;
            //     $cases->whereHas('type', function ($query) use ($allids){
            //     $query->whereIn('id', $allids);
            //  });
            // }

        }
        if($this->selected_statuses){

            $hasFalse = count(array_filter($this->selected_statuses,function($a) {return $a==false;}));
            if(count($this->selected_statuses) != $hasFalse ){
                $ids= $this->selected_statuses;
                $cases->whereHas('status', function ($query) use ($ids){
                $query->whereIn('id', $ids);
             });
            }
            // else{
            //     $allids= $this->all_statuses;
            //     $cases->whereHas('status', function ($query) use ($allids){
            //     $query->whereIn('id', $allids);
            //  });
            // }

        }



        // $ids= ['7'];
        //     $cases->whereHas('type', function ($query) use ($ids){
        //         $query->whereIn('id', $ids);
        //     });

            // dd($cases);

        return view('livewire.components.caselist', [
            'allcases' => $cases->paginate(10),

        ]);


    }
    public function gotocase($case_number, $case_type_id)
    {
        return redirect()->to('/status?case_number='.$case_number.'&case_type='.$case_type_id);
    }
}
