<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{

    public $fullname;
    public $email;
    public $password;
    public $confirmPassword;
    public $agreed;
    public $statusCode;

    protected $rules = [
        'fullname' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'confirmPassword' => 'same:password',
        'agreed' => 'required',
    ];

    protected $messages = [
        'agreed.required' => 'You shoud agree with our terms & conditions.',
    ];

    public function register()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->fullname;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = config('usertypes.user');
        $user->save();
        session()->flash('message', 'User successfully created. Please login with your account now');
        return redirect()->to('/login');
    }

    public function render()
    {
        return view('livewire.register')->layout('layouts.guest',['title' => 'Register']);
    }
}
