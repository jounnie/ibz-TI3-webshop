<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisements')->insert(['description' => 'Super Skunk', 'amount' => 2.4, 'quality' => 1, 'deliveryDate' => '2018-04-01', 'user_id' => 4, 'status' => 'new']);
        DB::table('advertisements')->insert(['description' => 'Purple Haze', 'amount' => 5, 'quality' => 3, 'deliveryDate' => '2018-05-14', 'user_id' => 4, 'status' => 'new']);
        DB::table('advertisements')->insert(['description' => 'Lemon Haze', 'amount' => 4.7, 'quality' => 5, 'deliveryDate' => '2018-07-01', 'user_id' => 4, 'status' => 'new']);
        DB::table('advertisements')->insert(['description' => 'Master Kush', 'amount' => 8, 'quality' => 8, 'deliveryDate' => '2018-09-23', 'user_id' => 3, 'status' => 'new']);
        DB::table('advertisements')->insert(['description' => 'Purple Bud', 'amount' => 1.5, 'quality' => 10, 'deliveryDate' => '2018-02-01', 'user_id' => 3, 'status' => 'new']);
    }
}
