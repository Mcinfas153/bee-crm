<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\Models\User;
use Livewire\WithPagination;
use App\Http\Controllers\LeadTimelineController;
use Illuminate\Support\Facades\Auth;

class LeadTable extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render(User $user, Lead $lead)
    {
        $leads = Lead::orderBy('id', 'DESC')->limit(300)->get();
        $users = User::where('created_by', Auth::user()->id)->get();
        return view('livewire.lead-table',[
            'leads' => $leads,
            'users' => $users,
            ])->layout('layouts.app',[
            'title' => 'Latest Leads'
        ]);
    }

    public function makeCall($leadId)
    {
        $type = config('leadtimelinetypes.call');
        $message = config('leadtimelinetypes.callMsg');
       $timeline = new LeadTimelineController();
       $timeline->addItem($type, $message, $leadId);
    }

    public function sentEmail($leadId)
    {
        $type = config('leadtimelinetypes.mail');
        $message = config('leadtimelinetypes.mailMsg');
       $timeline = new LeadTimelineController();
       $timeline->addItem($type, $message, $leadId);
    }
}
