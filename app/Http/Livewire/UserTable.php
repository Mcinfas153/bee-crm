<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $users = DB::table('users')->where('created_by',1)->get();
        return view('livewire.user-table',[
            'users' => $users
        ])->layout('layouts.app',[
            'title' => 'Users'
        ]);
    }
}
