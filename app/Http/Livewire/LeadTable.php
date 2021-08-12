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

        $allLeads = Lead::orderBy('id', 'DESC')->get();
        foreach($allLeads as $lead){
            if (Auth::user()->can('view', $lead)) {
                $leads[] = $lead;
            }
        }
         
        return view('livewire.lead-table',['leads' => $leads])->layout('layouts.app',[
            'title' => 'Leads'
        ]);
    }
}
