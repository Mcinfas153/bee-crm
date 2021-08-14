<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Bee CRM',
            'email' => 'superadmin@beecrm.com',
            'password' => Hash::make('makememine'),
            'utype' => config('usertypes.superAdmin'),
            'remember_token' => Str::random(10),
            'created_by' => 1
        ]);
    }
}
