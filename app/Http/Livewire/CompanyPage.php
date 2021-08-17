<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompanyPage extends Component
{
    public function render()
    {
        return view('livewire.company-page')->layout('layouts.app',[
            'title' => 'Company Profile'
        ]);
    }
}
