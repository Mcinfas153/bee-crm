<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {

        $user = User::find(2);

        $data = [
            'intent' => $user->createSetupIntent()
        ];

        return view('subscriptions.payment')->with($data);
    }

    public function store(Request $request) {
        
    }
}
