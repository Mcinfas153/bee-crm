<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Utype;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AddUserPage extends Component
{

    public $name;
    public $email;
    public $password;
    public $utype;
    public $repassword;
    public $agreed;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|min:8',
        'repassword' => 'same:password',
        'agreed' => 'required',
    ];

    protected $messages = [
        'utype.required' => 'User type is required.',
        'agreed.required' => 'You shoud agree with our terms & conditions',
    ];

    public function mount(){
        $this->utype = "3";
     }     

    public function render()
    {

        $userTypes = Utype::all();

        return view('livewire.add-user-page',[
            'utypes' => $userTypes
        ])->layout('layouts.app',[
            'title' => 'Add User'
        ]);
    }

    public function addUser()
    {
        $this->validate();

        $totalUsers = User::where('created_by', Auth::user()->id)->count();

        $currentPlan = Auth::user()->activatedPlans->last()->plan;
        
        if($totalUsers >= $currentPlan->accounts_count){
            session()->flash('title', 'Failed');
            session()->flash('message',''.config('msg.10').'');
            session()->flash('alertType', 'danger');
            return back();
        }

        if(User::where('email',$this->email)->count() != 0){
            session()->flash('title', 'Failed');
            session()->flash('message',''.config('msg.2').'');
            session()->flash('alertType', 'danger');
            return back();           
        }

        try{

            $user = new User();
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = Hash::make($this->password);
            $user->utype = (int)$this->utype;
            $user->remember_token = Str::random(10);
            $user->auth_code = Str::random(20);
            $user->created_by = Auth::user()->id;
            $user->save();
            toast(''.config('msg.6').'','success');
            return redirect()->to('/users');

        } catch(Exception $ex){

            throw $ex;

            session()->flash('title', 'Failed');
            session()->flash('message',''.config('msg.100').'');
            session()->flash('alertType', 'danger');

        }
    }
}
