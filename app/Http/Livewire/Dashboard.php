<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use App\Models\LeadStatus;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{

    public function mount()
    {

    }

    public function render()
    {
        $todayLeadSql = "SELECT 
            *
            FROM
        leads
            WHERE
        created_by = ".Auth::user()->id."
            AND 
        convert_tz(created_at, '".config('application.mySQLTimezone')."', '".config('application.localTimezone')."') 
            BETWEEN 
                DATE_FORMAT(CONCAT(DATE(convert_tz(NOW(), '".config('application.mySQLTimezone')."', '".config('application.localTimezone')."')), ' 00:00:00'), '%Y-%m-%d %H:%i:%s')
                        AND 
                DATE_FORMAT(CONCAT(DATE(convert_tz(NOW(), '".config('application.mySQLTimezone')."', '".config('application.localTimezone')."')), ' 23:59:59'), '%Y-%m-%d %H:%i:%s')";
                
        
        $todayLeads = DB::select($todayLeadSql);
        $followupLeads = Lead::where([['status', config('leadstatus.following')],['created_by', Auth::user()->id]])->count();
        $notInterestedLeads = Lead::where([['status', config('leadstatus.not_interested')],['created_by', Auth::user()->id]])->count();
        $closeLeads = Lead::where([['status', config('leadstatus.closed')],['created_by', Auth::user()->id]])->count();
        $lineChart = Lead::select(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"),DB::raw('max(created_at) as createdAt'))
        ->whereMonth('created_at', date('m'))
        ->where('created_by', Auth::user()->id)
        ->groupBy('date')
        ->orderBy('createdAt')
        ->get();

        return view('livewire.dashboard', compact(['todayLeads','followupLeads','notInterestedLeads','closeLeads','lineChart']))->layout('layouts.app',[
            'title' => 'Dashboard'
        ]);;
    }
}
