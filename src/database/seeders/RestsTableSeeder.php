<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'time_id' => '28',
            'break_in' => '2024-01-18 09:51:41',
            'break_out' => '2024-01-18 09:56:00',
        ];
        DB::table('rests')->insert($param);
    }
}
