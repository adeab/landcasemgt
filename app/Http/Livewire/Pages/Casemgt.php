<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Casemgt extends Component
{
    public $list_mode = true;
    public $message ='';

    protected $listeners = ['switchMode' => 'switchMode', 'setMessage'=>'setMessage'];

    public function render()
    {
        return view('livewire.pages.casemgt');
    }
    public function switchMode(){
        $this->list_mode=!$this->list_mode;
    }
    public function setMessage($message){
        $this->message=$message;
    }
    public function rmvMsg(){
        $this->message='';
    }
}
