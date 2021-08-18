<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

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
            
        if(collect($user)->isEmpty()) {
            return response()->json([
                'msg' => 'User not found'
            ], 206);              
        }

        $lead = new Lead();
        $lead->name = $request->input('name');
        $lead->email = $request->input('email');
        $lead->mobile = $request->input('mobile');
        $lead->inquiry = $request->input('inquiry');
        $lead->project = $request->input('project');
        $lead->ip_address = $request->input('ip_address');
        // $lead->contact_time = $request->input('contact_time');
        // $lead->country = $request->input('country');
        $lead->created_by = $user->id;
        $lead->save();

        return response()->json([
           $lead
        ],201);
    }
}
