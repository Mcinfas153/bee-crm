<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadTimeline;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    //
    public function saveLead(Request $request)
    {
        $auth_code = $request->header('Authorization');
        
        if(!isset($auth_code)) {
            return response()->json([
                'msg' => 'Authorization code not found'
            ], 206);
        }

        $user = User::where('auth_code', $auth_code)->first();

        if (!$user->subscribed('default')) {
            return response()->json([
                'msg' => 'User not a subscriber'
            ], 206);
        }
            
        if(collect($user)->isEmpty()) {
            return response()->json([
                'msg' => 'User not found'
            ], 206);              
        }

        DB::beginTransaction();

        try{

            $lead = Lead::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'inquiry' => $request->input('inquiry'),
                'project' => ($request->input('project'))?$request->input('project') : '',
                'contact_time' => ($request->input('contact_time'))?$request->input('contact_time') : '',
                'country' => ($request->input('country'))?$request->input('country') : '',
                'ip_address' => ($request->input('ip_address'))?$request->input('ip_address') : '',
                'lead_source' => ($request->input('lead_source'))?$request->input('lead_source') : '',
                'created_by' => $user->id,
            ]);
    
            $leadTimeline = LeadTimeline::create([
                'type' => config('leadtimelinetypes.create'),
                'message' => config('leadtimelinetypes.createMsg'),
                'lead_id' => $lead->id,
                'created_by' => $user->id
            ]);

            sendMail($user->email, $lead);

            DB::commit();

            return response()->json([
                $lead
            ], 201);

        } catch(Exception $ex) {

            DB::rollBack();
            return response()->json([
                'msg' => $ex
            ]);

        }       
    }
}
