<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Lead;
use Livewire\Component;
use WithPagination;

class LeadUi extends Component
{

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.lead-ui',[
            'leads' => Lead::paginate(10)
            ])->layout('layouts.app',[
                'title' => 'Leads'
            ]);
    }
}
