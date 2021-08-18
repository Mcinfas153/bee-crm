<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('company_categories')->insert(
            ['name' => 'Arts, Entertainment and Recreation'],
            ['name' => 'Accommodation and Food Services'],
            ['name' => 'Finance and Insurance'],
            ['name' => 'Agriculture, Forestry, Fishing and Hunting'],
            ['name' => 'Utilities'],
            ['name' => 'Other Services'],
            ['name' => 'Healthcare and Social Assistance'],
            ['name' => 'Transportation and Warehousing'],
            ['name' => 'Professional, Scientific and Technical Services'],
            ['name' => 'Construction'],
            ['name' => 'Mining'],
            ['name' => 'Educational Services'],
            ['name' => 'Real Estate and Rental and Leasing'],
            ['name' => 'Retail Trade'],
            ['name' => 'Administration, Business Support and Waste Management Services'],
            ['name' => 'Information'],
            ['name' => 'Manufacturing'],
            ['name' => 'Advisory and Financial Services'],
            ['name' => 'Technology'],
            ['name' => 'Online Retail'],
        ); 
    }
}
