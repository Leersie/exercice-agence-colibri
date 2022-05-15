<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class login extends Component
{
    public $email;
    public $password;

    public $loginError;


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
        $user = User::where("email",$this->email)->where("password",$this->password)->first();

        if($user != null) {
            Auth::loginUsingId($user['id']);
            Redirect::route("contact");
        } else {
            $this->loginError = "Cet utilisateur n'existe pas";
        }
    }
}
