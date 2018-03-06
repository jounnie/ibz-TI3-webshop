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
        DB::table('users')->insert(['nickname' => 'vendor1', 'type' => 'vendor',]);
        DB::table('users')->insert(['nickname' => 'vendor2', 'type' => 'vendor',]);
        DB::table('users')->insert(['nickname' => 'supplier1', 'type' => 'supplier',]);
        DB::table('users')->insert(['nickname' => 'supplier2', 'type' => 'supplier',]);
    }
}
