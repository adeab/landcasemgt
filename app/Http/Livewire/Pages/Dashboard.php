<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.pages.dashboard')
        ->layout('layouts.admin');
    }
     public function gotohome(){
        return redirect('/');
    }
}
