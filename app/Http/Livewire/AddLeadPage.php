<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddLeadPage extends Component
{

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
        'country' => 'required',
        'lead_source' => 'required',
    ];

    public function render()
    {
        return view('livewire.add-lead-page')->layout('layouts.app', [
            'title' => 'Add Lead'
        ]);
    }

    public function addLead()
    {

        $this->validate();

        try{
            
            $lead = new Lead();
            $lead->name = $this->name;
            $lead->email = $this->email;
            $lead->mobile = $this->mobile;
            $lead->inquiry = $this->inquiry;
            $lead->project = $this->project;
            $lead->country = $this->country;
            $lead->lead_source = $this->lead_source;
            $lead->project = $this->project;
            $lead->created_by = (Auth::user()->creator->id != 1) ? Auth::user()->creator->id : Auth::user()->id;
            $lead->save();
            toast(''.config('msg.303').'','success');
            return redirect()->to('/leads');

        } catch(Exception $ex){

            session()->flash('title', 'Failed');
            session()->flash('message',''.config('msg.100').'');
            session()->flash('alertType', 'danger');

        }
    }
}
