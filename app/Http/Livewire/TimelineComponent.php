<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TimelineComponent extends Component
{

    public $icon;
    public $class;
    public $time;
    public $message;
    public $creator;

    public function render()
    {
        return view('livewire.timeline-component');
    }
}
