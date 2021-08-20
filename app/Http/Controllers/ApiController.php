<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\LeadTimeline;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\Console\Input\Input;

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

        DB::beginTransaction();

        try{

            $lead = Lead::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'inquiry' => $request->input('inquiry'),
                'project' => $request->input('project'),
                'ip_address' => $request->input('ip_address'),
            ]);
    
            $leadTimeline = LeadTimeline::create([
                'type' => config('leadtimelinetypes.create'),
                'message' => config('leadtimelinetypes.createMsg'),
                'lead_id' => $lead->id,
                'created_by' => $user->id
            ]);

            DB::commit();

            return response()->json([
                $lead
            ], 201);

        } catch(Exception $ex) {

            DB::rollBack();
            return response()->json([
                'msg' => 'Something went wrong'
            ]);

        }       
    }
}
