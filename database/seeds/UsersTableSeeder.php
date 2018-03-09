<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert(['nickname' => "Anbieter$i", 'type' => 'vendor',]);
        }
        for ($i = 0; $i < 15; $i++) {
            DB::table('users')->insert(['nickname' => "Nachfrager$i", 'type' => 'supplier',]);
        }
    }
}
