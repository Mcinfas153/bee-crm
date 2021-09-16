<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AllLeadsPage extends Component
{
    public function render()
    {
        return view('livewire.all-leads-page')->layout('layouts.app', [
            'title' => 'All Leads'
        ]);
    }
}
