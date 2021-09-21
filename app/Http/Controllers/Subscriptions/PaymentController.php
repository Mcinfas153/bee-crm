<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
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
            
            $request->user()->newSubscription('default', $plan->stripe_id)->create($request->token);
    
            toast(''.config('msg.200').'','success');

            return redirect('/dashboard');
    }

    public function unsubscribe()
    {
        if (Auth::user()->cannot('adminView', User::class)) {
            abort(403);
        }

        Auth::user()->subscription('default')->cancelNowAndInvoice();

        toast(''.config('msg.201').'','success');

        return redirect('/invoices');
    }
}
