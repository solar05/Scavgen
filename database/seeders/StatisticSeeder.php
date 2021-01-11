<?php

namespace Database\Seeders;

use Brick\Math\BigInteger;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statistics')->insert([
            'legendary' => 0,
            'epic' => 0,
            'rare' => 0,
            'uncommon' => 0,
            'common' => 0
        ]);
    }
}
