<?php

namespace Database\Seeders;

use App\Models\Utype;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Utype::truncate();
        
        DB::table('utypes')->insert([
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'User'],
        ]);
    }
}
