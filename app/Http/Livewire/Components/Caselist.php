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
        dd($this->selected_types);
    }

    public function mount(){
        $this->types= CaseType::all();
        $this->statuses= CaseStatus::all();
    }
    public function render()
    {
        $key = $this->search;
        $id = 7;
        $cases = Landcase::query()->orderBy('created_at', 'DESC');

        $cases
        ->where('number', 'like', '%'.$this->search.'%')
        ->orWhere('title', 'like', '%'.$this->search.'%')
        ->orWhere('title', 'like', '%'.$this->search.'%')
        ->orWhereHas('status', function ($query) use ($key) {
            $query->where('title', 'like', $key.'%');
        })
        ->orWhereHas('type', function ($query) use ($key) {
            $query->where('name', 'like', $key.'%');
        })
        ->whereHas('type', function ($query) use ($id){
            $query->where('id', $id);
        });


        // if($this->selected_types){
        //     $ids= $this->selected_types;
        //     $cases->whereHas('type', function ($query) use ($ids){
        //         $query->whereIn('id', $ids);
        //     });
        // }

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
