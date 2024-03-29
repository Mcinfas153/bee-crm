<?php

namespace Database\Seeders;

use App\Models\LeadTimelineType;
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
        LeadTimelineType::truncate();
        
        DB::table('lead_timeline_types')->insert([
            ['name' => 'call', 'icon' => 'fas fa-mobile-alt'],
            ['name' => 'mail', 'icon' => 'fas fa-envelope'],
            ['name' => 'remark', 'icon' => 'fas fa-pencil-alt'],
            ['name' => 'meeting', 'icon' => 'fas fa-handshake'],
            ['name' => 'create', 'icon' => 'fas fa-plus'],
            ['name' => 'open', 'icon' => 'fas fa-envelope-open'],
            ['name' => 'assign', 'icon' => 'fa fa-user'],
            ['name' => 'statusUpdate', 'icon' => 'fas fa-edit'],
        ]);
    }
}
