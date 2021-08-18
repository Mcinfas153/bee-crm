<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class LeadTable extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render(User $user, Lead $lead)
    {

        $leads = Lead::orderBy('id', 'DESC')->get();
        return view('livewire.lead-table',['leads' => $leads])->layout('layouts.app',[
            'title' => 'Leads'
        ]);
    }
}
