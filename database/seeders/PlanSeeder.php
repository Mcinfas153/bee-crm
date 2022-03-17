<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Plan::truncate();

        DB::table('plans')->insert([
            //live
            //  ['title' => 'Silver', 'identifier' => 'silver', 'stripe_id' => 'price_1JU3RSCJCY25ow47MUkzLDVM', 'price' => 500, 'accounts_count' => 10],
            //  ['title' => 'Gold', 'identifier' => 'gold', 'stripe_id' => 'price_1JU3RsCJCY25ow47D8gt6jPh', 'price' => 1000, 'accounts_count' => 30],
            //  ['title' => 'Diamond', 'identifier' => 'diamond', 'stripe_id' => 'price_1JU3SDCJCY25ow477u3Psuvh', 'price' => 10000, 'accounts_count' => 100],
            //  ['title' => 'Platinum', 'identifier' => 'platinum', 'stripe_id' => 'price_1JU3SZCJCY25ow47eajS0FKi', 'price' => 20000, 'accounts_count' => 300]

            //local
            ['title' => 'Silver', 'identifier' => 'silver', 'stripe_id' => 'price_1JU8IjCJCY25ow475YVOVUBp', 'price' => 500, 'accounts_count' => 10],
            ['title' => 'Gold', 'identifier' => 'gold', 'stripe_id' => 'price_1JU8J0CJCY25ow47vCwIDezk', 'price' => 1000, 'accounts_count' => 30],
            ['title' => 'Diamond', 'identifier' => 'diamond', 'stripe_id' => 'price_1JU8JGCJCY25ow47H925jbE0', 'price' => 10000, 'accounts_count' => 100],
            ['title' => 'Platinum', 'identifier' => 'platinum', 'stripe_id' => 'price_1JU8JZCJCY25ow47RkcBd4Mr', 'price' => 20000, 'accounts_count' => 300]
        ]);
    }
}
