<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SettingPage extends Component
{

    public $newPassword;
    public $confirmPassword;

    protected $rules = [
        'newPassword' => 'required|min:8',
        'confirmPassword' => 'required|same:newPassword',
    ];

    protected $messages = [
        'newPassword.required' => 'Password cannot be empty.',
        'newPassword.min:8' => 'Password should has minimum 6 characters',
        'confirmPassword.required' => 'Please enter a valid password',
        'confirmPassword.same' => 'Password should be same',
    ];

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.setting-page',[
            'user' => $user
        ])->layout('layouts.app',[
            'title' => 'Settings'
        ]);
    }

    public function changePassword()
    {
        $this->validate();
        $user = User::find(Auth::user()->id);
        
        if(collect($user)->isEmpty()){
            session()->flash('title', 'Failed');
            session()->flash('message', ''.config('msg.100').'');
            session()->flash('alertType', 'danger');
        }

        $user->password = Hash::make($this->newPassword);
        $user->save();
        toast(''.config('msg.9').'','success');
        return redirect()->to('/setting');
    }
}
