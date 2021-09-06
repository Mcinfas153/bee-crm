<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\LeadTimeline;
use App\Http\Controllers\LeadTimelineController;
use App\Models\LeadStatus;
use App\Models\Remark;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeadPage extends Component
{

    public $leadId;
    public $remarks;
    public $currentStatus;
    
    public function render()
    {
        $lead = Lead::find($this->leadId);        
        $classes = ['danger', 'success', 'primary', 'warning', 'info'];
        $status = LeadStatus::all();

        if (Auth::user()->cannot('view', $lead) || !$lead) {
            abort(403);
        }
        
        DB::beginTransaction();

        try{

            if($lead->status == config('leadstatus.unopened')){
                $lead->status = config('leadstatus.opened');
                $lead->save();

                $leadTimeline = new LeadTimeline();
                $leadTimeline->type = config('leadtimelinetypes.open');
                $leadTimeline->message = config('leadtimelinetypes.openMsg');
                $leadTimeline->lead_id = $lead->id;
                $leadTimeline->created_by = Auth::user()->id;
                $leadTimeline->save();
            }
            
            DB::commit();

            return view('livewire.lead-page',[
                'lead' => $lead,
                'classes' =>$classes,
                'allStatus' => $status
            ])->layout('layouts.app',[
                'title' => 'Lead Details'
            ]);

        } catch(Exception $ex){

            DB::rollBack();
            abort(404);

        }
        
    }

    public function mount($id)
    {
        $this->leadId = $id;
        $this->currentStatus = Lead::find($id)->status;
    }

    public function sentEmail($leadId)
    {
        $type = config('leadtimelinetypes.mail');
        $message = config('leadtimelinetypes.mailMsg');
        $timeline = new LeadTimelineController();
        $timeline->addItem($type, $message, $leadId);
    }

    public function makeCall($leadId)
    {
        $type = config('leadtimelinetypes.call');
        $message = config('leadtimelinetypes.callMsg');
       $timeline = new LeadTimelineController();
       $timeline->addItem($type, $message, $leadId);
    }
}
