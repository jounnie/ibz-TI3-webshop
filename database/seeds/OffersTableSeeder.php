<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert(['price' => 10000, 'user_id' => 1, 'advertisement_id' => 1]);
        DB::table('offers')->insert(['price' => 32000, 'user_id' => 1, 'advertisement_id' => 2]);
        DB::table('offers')->insert(['price' => 54321, 'user_id' => 2, 'advertisement_id' => 2]);
    }
}
