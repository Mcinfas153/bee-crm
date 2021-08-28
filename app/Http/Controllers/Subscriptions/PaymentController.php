<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function store(Request $request) {
       
            $this->validate($request, [
                'token' => 'required'
            ]);
    
            $plan = Plan::where('identifier', $request->plan)
                //->orWhere('identifier', 'silver')
                ->first();
            
            $request->user()->newSubscription($request->plan, $plan->stripe_id)->create($request->token);
    
            toast(''.config('msg.200').'','success');

            return redirect('/dashboard');
    }
}
