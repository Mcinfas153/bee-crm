<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentPage extends Component
{
    public function render()
    {
        if (Auth::user()->cannot('adminView', App\Models\User::class)) {
            abort(403);
        }

        $data = [
            'intent' => Auth::user()->createSetupIntent()
        ];
        return view('livewire.payment-page', [
            'data' => $data
        ])->layout('layouts.app', [
            'title' => 'Checkout'
        ]);
    }
}
