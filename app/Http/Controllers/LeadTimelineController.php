<?php

namespace App\Http\Controllers;

use App\Models\LeadTimeline;
use Illuminate\Support\Facades\Auth;

class LeadTimelineController extends Controller
{
    
    public function addItem($type, $message, $leadId)
    {
        $leadTimeline = new LeadTimeline();
        $leadTimeline->type = $type;
        $leadTimeline->message = $message;
        $leadTimeline->lead_id = $leadId;
        $leadTimeline->created_by = Auth::user()->id;
        $leadTimeline->save();
    }
}
