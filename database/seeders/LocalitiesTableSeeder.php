<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //Empty the table first
        DB::table('localities')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        DB::table('localities')->insert([
            ['postal_code'=>'1070','locality'=>'Belgium, Brussels'],
            ['postal_code'=>'1000','locality'=>'Belgium, Brussels'],
            ['postal_code'=>'1080','locality'=>'Belgium, Brussels'],
            ['postal_code'=>'1090','locality'=>'Belgium, Brussels'],
            ['postal_code'=>'1060','locality'=>'Belgium, Brussels'],
            ['postal_code'=>'1070','locality'=>'Belgium, Brussels'],
        ]);
    }
}
