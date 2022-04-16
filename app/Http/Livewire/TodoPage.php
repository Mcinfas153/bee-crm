<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TodoPage extends Component
{
    public function render()
    {
        return view('livewire.todo-page')->layout('layouts.app',[
            'title' => 'Todo App'
        ]);
    }
}
