<?php

namespace Database\Seeders;

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
        //
        DB::table('plans')->insert([
            ['title' => 'Silver', 'identifier' => 'silver', 'stripe_id' => 'price_1JQnwRCWPCrcSE80E5EaFTvq', 'price' => 300, 'accounts_count' => 10],
            ['title' => 'Gold', 'identifier' => 'gold', 'stripe_id' => 'price_1JQqwCCWPCrcSE80XAilQDcZ', 'price' => 800, 'accounts_count' => 30],
            ['title' => 'Diamond', 'identifier' => 'diamond', 'stripe_id' => 'price_1JTNgYCWPCrcSE80YgWDpyLz', 'price' => 10000, 'accounts_count' => 100]
        ]);
    }
}
