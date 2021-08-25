<?php

namespace App\Http\Controllers;

use App\Models\Remark;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RemarkController extends Controller
{
    public function addRemark(Request $request)
    {
        $request->validate([
            'remark' => 'required'
        ]);

        DB::beginTransaction();

        try{

            $remark = new Remark();
            $remark->message = $request->input('remark');
            $remark->lead_id = (int)$request->input('lead_id');
            $remark->created_by = Auth::user()->id;
            $remark->save();

            $type = config('leadtimelinetypes.remark');
            $message = config('leadtimelinetypes.remarkMsg');
            $timeline = new LeadTimelineController();
            $timeline->addItem($type, $message, $request->input('lead_id'));

            DB::commit();

            toast(''.config('msg.301').'','success');
            return back();

        } catch(Exception $ex) {

            throw $ex;

            DB::rollBack();

            session()->flash('title', 'Failed');
            session()->flash('message', ''.config('msg.100').'');
            session()->flash('alertType', 'danger');
            
        }
    }
}
