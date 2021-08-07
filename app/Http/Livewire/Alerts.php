<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alerts extends Component
{
    public $title;
    public $icon;

    public function render()
    {
        return view('livewire.alerts');
    }
}
