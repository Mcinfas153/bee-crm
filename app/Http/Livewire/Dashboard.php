<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public function render()
    {
        $todayLeads = Lead::where('created_by', Auth::user()->id)->whereDate('created_at', Carbon::today())->count();
        $followupLeads = Lead::where([['status', config('leadstatus.following')],['created_by', Auth::user()->id]])->count();
        $notInterestedLeads = Lead::where([['status', config('leadstatus.not_interested')],['created_by', Auth::user()->id]])->count();
        $closeLeads = Lead::where([['status', config('leadstatus.closed')],['created_by', Auth::user()->id]])->count();
        $lineChart = Lead::select(DB::raw("COUNT(*) as count"), DB::raw("DATE(created_at) as date"),DB::raw('max(created_at) as createdAt'))
        ->whereMonth('created_at', date('m'))
        ->where('created_by', Auth::user()->id)
        ->groupBy('date')
        ->orderBy('createdAt')
        ->get();

        //dd($lineChart);

        return view('livewire.dashboard', compact(['todayLeads','followupLeads','notInterestedLeads','closeLeads','lineChart']))->layout('layouts.app',[
            'title' => 'Dashboard'
        ]);;
    }
}
