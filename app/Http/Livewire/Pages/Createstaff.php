<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class Createstaff extends Component
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $isSuccess;


    protected $rules=[
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required',
        'confirm_password'=>'required|same:password'
    ];



    public function submit(){

        $validate_data = $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'user_type' => 'staff'
        ]);


        $this->isSuccess = true;
        $this->reset('name', 'email', 'password', 'confirm_password');



        // $this->reset(['email','password','confirm_password']);


    }

    public function render()
    {
        return view('livewire.pages.createstaff')
        ->layout('layouts.admin');
    }
}
