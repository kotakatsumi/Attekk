<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '11',
            'year' => '2024',
            'month' => '1',
            'day' => '18',
            'check_in' => '2024-01-18 09:00:00',
        ];
        DB::table('times')->insert($param);
    }
}
