<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $record = new \App\Models\Statistic();
        $record->save();
    }
}
