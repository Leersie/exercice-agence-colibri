<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6|max:30'
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $this->validate();
        Auth::attempt(["email"=>$this->email, "password" =>$this->password]);
    }
}
