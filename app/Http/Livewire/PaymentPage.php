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
