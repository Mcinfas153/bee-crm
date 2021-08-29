<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LandingPagePlans extends Component
{
    public function render()
    {
        return view('livewire.landing-page-plans')->layout('layouts.app',[
            'title' => 'Landing Page Plans'
        ]);
    }
}
