<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddUserPage extends Component
{

    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function render()
    {
        return view('livewire.add-user-page')->layout('layouts.app',[
            'title' => 'Add User'
        ]);
    }

    public function incrementPostCount()
    {
        dd('Add user page');
    }
}
