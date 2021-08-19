<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lead_status')->insert([
            ['name' => 'Unopened', 'class_color' => 'secondary'],
            ['name' => 'Opened', 'class_color' => 'info'],
            ['name' => 'Following', 'class_color' => 'primary'],
            ['name' => 'Interested', 'class_color' => 'warning'],
            ['name' => 'Not Interested', 'class_color' => 'danger'],
            ['name' => 'Closed', 'class_color' => 'success'],
        ]);
    }
}
