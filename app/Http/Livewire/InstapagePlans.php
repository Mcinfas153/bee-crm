<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InstapagePlans extends Component
{
    public function render()
    {
        return view('livewire.instapage-plans')->layout('layouts.app', [
            'title' => 'Instapage Plans'
        ]);
    }
}
