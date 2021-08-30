<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Utype;
use Livewire\Component;

class UserTable extends Component
{

    public $name;
    public $email;
    public $password;
    public $utype;
    public $repassword;

     protected $rules = [
         'name' => 'required|min:6',
         'email' => 'required|email',
         'password' => 'required|min:8',
         'repassword' => 'same:password',
         'utype' => 'required'
     ];

     protected $listeners = ['newPost'];

    public function render()
    {
        $users = User::orderBy('id', 'DESC')->get();
        $userTypes = Utype::all();
       
         return view('livewire.user-table',[
             'users' => $users,
             'utypes' => $userTypes
         ])->layout('layouts.app',[
             'title' => 'Users'
         ]);
    }

    public function goToAddUsers()
    {
        return redirect()->to('/add-user');
    }

}
