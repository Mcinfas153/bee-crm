<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.login')->layout('layouts.guest',['title' => 'Login']);
    }

    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        
        if (Auth::attempt($credentials)) {
            
            session()->regenerate();

            return redirect()->intended('dashboard');

        } else {

            session()->flash('message', 'Your email or password didn\'t match with our database');
            session()->flash('alertType', 'alert-danger');

        }
    }
}
