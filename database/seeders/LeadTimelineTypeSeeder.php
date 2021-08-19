<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadTimelineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lead_timeline_types')->insert([
            ['name' => 'call', 'icon' => 'fas fa-mobile-alt'],
            ['name' => 'mail', 'icon' => 'fas fa-envelope'],
            ['name' => 'remark', 'icon' => 'fas fa-pencil-alt'],
            ['name' => 'meeting', 'icon' => 'fas fa-handshake'],
        ]);
    }
}
