<?php

namespace App\Http\Livewire;

use App\Http\Controllers\LeadTimelineController;
use App\Models\Remark;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RemarkComponent extends Component
{

    public $remarks;
    public $leadId;
    public $remark;

    protected $rules = [
        'remark' => 'required',
    ];

    public function render()
    {
        $classes = ['danger', 'success', 'primary', 'warning', 'info'];
        return view('livewire.remark-component', compact('classes'));
    }
    
    public function mount()
    {
        $this->remarks = Remark::where('lead_id', $this->leadId)->orderBy('created_at','desc')->get();
    }

    public function addRemark(Request $request)
    {

        $this->validate();

        DB::beginTransaction();

        try{

            $remark = new Remark();
            $remark->message = $this->remark;
            $remark->lead_id = $this->leadId;
            $remark->created_by = Auth::user()->id;
            $remark->save();

            $type = config('leadtimelinetypes.remark');
            $message = config('leadtimelinetypes.remarkMsg');
            $timeline = new LeadTimelineController();
            $timeline->addItem($type, $message, $this->leadId);

            DB::commit();

            $this->remarks->prepend($remark);

            session()->flash('title', 'Success');
            session()->flash('message', ''.config('msg.301').'');
            session()->flash('alertType', 'success');

        } catch(Exception $ex) {

            throw $ex;

            DB::rollBack();

            session()->flash('title', 'Failed');
            session()->flash('message', ''.config('msg.100').'');
            session()->flash('alertType', 'danger');
            
        }
    }
}
