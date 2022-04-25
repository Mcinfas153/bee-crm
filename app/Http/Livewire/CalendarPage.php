<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalendarPage extends Component
{
    public function render()
    {
        return view('livewire.calendar-page')->layout('layouts.app',[
            'title' => 'Calendar App'
        ]);;
    }
}
