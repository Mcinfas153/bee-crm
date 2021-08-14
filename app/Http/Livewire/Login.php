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
            toast(''.config('msg.4').'','success');
            return redirect()->intended('dashboard');

        } else {

            session()->flash('title', 'Failed');
            session()->flash('message', ''.config('msg.5').'');
            session()->flash('alertType', 'danger');

        }
    }
}
