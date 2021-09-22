<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanyCategorySeeder::class);      
        $this->call(CountrySeeder::class);  
        $this->call(LeadStatusSeeder::class);
        $this->call(LeadTimelineTypeSeeder::class);
        $this->call(PlanSeeder::class);
        $this->call(UtypesSeeder::class);
    }

}
