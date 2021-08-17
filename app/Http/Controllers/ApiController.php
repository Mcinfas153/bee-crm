<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function saveLead(Request $request)
    {
        $header = $request->header('Authorization');
        
        if(isset($header)) {

            $lead = new Lead();
            $lead->name = $request->input('name');
            $lead->email = $request->input('email');
            $lead->mobile = $request->input('mobile');
            $lead->inquiry = $request->input('inquiry');
            $lead->project = $request->input('project');
            $lead->contact_time = $request->input('contact_time');
            $lead->country = $request->input('country');
            $lead->created_by = $request->input('created_by');
            $lead->save();
           
        } else {
            return response()->json([
                'msg' => 'Authorization code not found'
            ], 206);
        }        
    }
}
