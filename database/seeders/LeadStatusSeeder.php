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
        DB::table('lead_status')->insert(
            ['name' => 'Un open'],
            ['name' => 'Open'],
            ['name' => 'Following'],
            ['name' => 'Interested'],
            ['name' => 'Not Interested'],
            ['name' => 'Closed'],
        );
    }
}
