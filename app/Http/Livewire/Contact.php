<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Contact extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $subject;
    public $msg;

    protected $rules = [
        'email' => 'required|email',
        'firstname' => "required",
        'lastname' => "required",
        "subject" => "required",
        "msg" => "required"
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function contact(){
        $this->validate();
        \App\Models\Contact::create([
            'email' => $this->email,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            "subject" => $this->subject,
            "message" => $this->msg
        ]);
    }
}
