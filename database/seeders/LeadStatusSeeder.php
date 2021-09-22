<?php

namespace Database\Seeders;

use App\Models\LeadStatus;
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
        LeadStatus::truncate();
        
        DB::table('lead_status')->insert([
            ['name' => 'unopened', 'class_color' => 'secondary'],
            ['name' => 'opened', 'class_color' => 'info'],
            ['name' => 'following', 'class_color' => 'primary'],
            ['name' => 'interested', 'class_color' => 'warning'],
            ['name' => 'not_interested', 'class_color' => 'danger'],
            ['name' => 'closed', 'class_color' => 'success'],
        ]);
    }
}
