<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadTimeline;
use App\Models\User;
use DataTables;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    //
    public function getLeads(Request $request)
    {
        if(Auth::user()->utype == config('usertypes.admin')){

            $whereField= 'leads.created_by';

        } else{
            
            $whereField= 'leads.assign_to';

        }

        if ($request->ajax()) {
            $data = DB::table('leads')
            ->leftJoin('users', 'users.id', '=', 'leads.assign_to')
            ->where($whereField, Auth::user()->id)
            ->select('leads.*','users.name as assign_user')            
            ->orderByDesc('leads.created_at')
            ->get();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="/edit-lead/'.$row->id.'" class="edit btn btn-success btn-sm btn-block mb-2"><i class="fas fa-edit"></i> Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm btn-block" onClick="deleteLead()"><i class="fas fa-times"></i> Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function assignLead(Request $request)
    {
        DB::beginTransaction();

        try{

            $leads = $request->input('leads');

            foreach($leads as $lead){

                $lead = Lead::find((int)$lead);

                $lead->assign_to = (int)$request->user;

                $lead->save();
                
                $leadTimeline = new LeadTimeline();
                
                $leadTimeline->type = config('leadtimelinetypes.assign');

                $leadTimeline->message = config('leadtimelinetypes.assignMsg') . ' to '.$lead->assignUser->name;

                $leadTimeline->lead_id = $lead->id;

                $leadTimeline->created_by = Auth::user()->id;

                $leadTimeline->save();
                
                DB::commit();

                $status = 201;

                $msg = config('msg.300');

                sendMail(User::find($lead->assign_to)->email, $lead);

            }        

        } catch(Exception $ex) {

            throw $ex;

            DB::rollBack();

            $status = 500;

            $msg = config('msg.100');
        }

        return response()->json([
            'status' => $status,
            'msg' => $msg
        ]);
    }

    public function updateStatus(Request $request)
    {

        DB::beginTransaction();

        try {

            $lead = Lead::find((int)$request->input('leadId'));
            $lead->status = (int)$request->input('currentStatus');
            $lead->save();

            $leadTimeline = new LeadTimeline();
            $leadTimeline->type = config('leadtimelinetypes.statusUpdate');
            $leadTimeline->message = config('leadtimelinetypes.statusUpdateMsg').' to ' .$lead->leadStatus->name;
            $leadTimeline->lead_id = $lead->id;
            $leadTimeline->created_by = Auth::user()->id;
            $leadTimeline->save();

            DB::commit();

            toast(''.config('msg.302').'','success');

            return back();            

        } catch (Exception $ex){

            DB::rollBack();

            toast(''.config('msg.100').'','error');

            return back();

        }
    }
}
