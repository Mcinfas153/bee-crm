<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Utype;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserTable extends Component
{
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
}
