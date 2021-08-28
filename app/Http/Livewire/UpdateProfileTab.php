<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfileTab extends Component
{
    
    public $name;
    public $photo;
    use WithFileUploads;

    protected $rules = [
        'name' => 'required|min:6',
    ];

    public function mount()
    {
        $this->name = Auth::user()->name;
    }

    public function render()
    {
        return view('livewire.update-profile-tab');
    }

    public function updateUser()
    {
        $this->validate();
        $user = User::find(Auth::user()->id);
        if($this->photo){
            $fileName = storeImage($this->photo);
            $user->profile_url = $fileName;
        }                
        $user->name = $this->name;        
        $user->save();
        toast(''.config('msg.7').'','success');
        return redirect()->to('/profile');
    }
}
