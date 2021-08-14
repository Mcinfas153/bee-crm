<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProfilePage extends Component
{

    public function render()
    {
        return view('livewire.profile-page')->layout('layouts.app',[
            'title' => 'Profile'
        ]);
    }
}
