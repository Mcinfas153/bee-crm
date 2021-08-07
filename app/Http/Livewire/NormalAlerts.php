<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NormalAlerts extends Component
{

    public $title;
    public $type;
    public $message;

    public function render()
    {
        return view('livewire.normal-alerts');
    }
}
