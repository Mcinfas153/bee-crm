<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DataboxComponent extends Component
{

    public $title;
    public $icon;
    public $count;
    public $class;

    public function render()
    {
        return view('livewire.databox-component');
    }
}
