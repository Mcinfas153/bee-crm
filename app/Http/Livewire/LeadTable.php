<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;

class LeadTable extends Component
{
    public function render()
    {
        $leads = Lead::orderBy('id', 'DESC')->paginate(300);
        return view('livewire.lead-table',['leads' => $leads])->layout('layouts.app',[
            'title' => 'Leads'
        ]);
    }
}
