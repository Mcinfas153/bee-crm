<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LeadPage extends Component
{

    public $leadId;

    public function render()
    {
        $lead = Lead::find($this->leadId);
        $classes = ['danger', 'success', 'primary', 'warning', 'info'];

        if (Auth::user()->cannot('view', $lead)) {
            abort(403);
        }

        return view('livewire.lead-page',[
            'lead' => $lead,
            'classes' =>$classes
        ])->layout('layouts.app',[
            'title' => 'Lead Details'
        ]);
    }

    public function mount($id)
    {
        $this->leadId = $id;
    }
}
