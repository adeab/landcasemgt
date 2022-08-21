<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Liststaff extends Component
{
    use WithPagination;

    public function render()

    {
        return view('livewire.pages.liststaff', [
            'staffs' => User::where('user_type', 'staff')->orderBy('created_at', 'DESC')->paginate(10)
        ])
        ->layout('layouts.admin');
    }
}
