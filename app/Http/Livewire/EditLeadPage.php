<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditLeadPage extends Component
{

    public $leadID;
    public $lead;
    public $name;
    public $email;
    public $mobile;
    public $project;
    public $inquiry;
    public $country;
    public $lead_source;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'inquiry' => 'required',
        'project' => 'required',
    ];


    public function mount($id)
    {
        $this->leadID = $id;
        $this->lead = Lead::findorfail($this->leadID);
        $this->name = $this->lead->name;
        $this->email = $this->lead->email;
        $this->mobile = $this->lead->mobile;
        $this->project = $this->lead->project;
        $this->inquiry = $this->lead->inquiry;
        $this->country = $this->lead->country;
        $this->lead_source = $this->lead->lead_source;
    }

    public function render()
    {
        if (Auth::user()->cannot('view', $this->lead)) {
            abort(403);
        }
        return view('livewire.edit-lead-page')->layout('layouts.app', [
            'title' => 'Edit Lead'
        ]);

    }

    public function editLead()
    {
        if (Auth::user()->cannot('update', $this->lead)) {
            abort(403);
        }

        $this->validate();

        try{

        $lead = Lead::find($this->leadID);
        $lead->name = $this->name;
        $lead->email = $this->email;
        $lead->mobile = $this->mobile;
        $lead->inquiry = $this->inquiry;
        $lead->country = $this->country;
        $lead->lead_source = $this->lead_source;
        $lead->project = $this->project;
        $lead->save();

        toast(''.config('msg.304').'','success');
        return redirect()->to('/all-leads');    

        } catch(Exception $ex){

            session()->flash('title', 'Failed');
            session()->flash('message',''.config('msg.100').'');
            session()->flash('alertType', 'danger');

        }
    }
}
