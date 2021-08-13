<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddUserPage extends Component
{

    public function render()
    {
        return view('livewire.add-user-page')->layout('layouts.app',[
            'title' => 'Add User'
        ]);
    }
}
