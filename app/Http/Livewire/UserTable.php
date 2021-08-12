<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $users = DB::table('users')->get();
        $userTypes = DB::table('utype')->get();
        return view('livewire.user-table',[
            'users' => $users,
            'utypes' => $userTypes
        ])->layout('layouts.app',[
            'title' => 'Users'
        ]);
    }
}
