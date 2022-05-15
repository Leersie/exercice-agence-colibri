<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Inscription extends Component
{
    public $name;
    public $email;
    public $password;

    public $loginError;

    protected $rules = [
        'name' => 'required|min:4|max:50',
        'email' => 'required|email',
        'password' => 'required|min:6|max:30'
    ];

    public function render()
    {
        return view('livewire.inscription');
    }

    public function register(){
        $this->validate();
        $user = User::create([
            'name' =>$this->name,
            'email' => $this->email,
            'password' => $this->password,
            ]);
        Auth::loginUsingId($user['id']);
        Redirect::route("contact");
    }
}
