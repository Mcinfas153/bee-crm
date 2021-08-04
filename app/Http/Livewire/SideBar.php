<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SideBar extends Component
{
    public function render()
    {
        return view('livewire.side-bar');
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->to('/');
    }
}
