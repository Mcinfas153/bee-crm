<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use Livewire\Component;

class PlansPage extends Component
{
    public function render()
    {
        $plans = Plan::all();
        $class = ['bg-success','bg-danger'];
        return view('livewire.plans-page',[
            'plans' => $plans,
            'class' => $class
        ])->layout('layouts.app',[
            'title' => 'Plans'
        ]);
    }
}
