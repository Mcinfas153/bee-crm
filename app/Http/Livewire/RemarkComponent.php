<?php

namespace App\Http\Livewire;

use App\Http\Controllers\LeadTimelineController;
use App\Models\Remark;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RemarkComponent extends Component
{

    public $creator;
    public $message;
    public $class;

    public function render()
    {
        return view('livewire.remark-component');
    }
    
}
