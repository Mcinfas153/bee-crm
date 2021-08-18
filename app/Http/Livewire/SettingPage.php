<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SettingPage extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.setting-page',[
            'user' => $user
        ])->layout('layouts.app',[
            'title' => 'Settings'
        ]);
    }
}
