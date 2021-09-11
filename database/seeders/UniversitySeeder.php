<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->truncate();

        DB::table('universities')->insert([
            [
                'university_id' => 1,
                'prefectures' => '東京',
                'university_name' => '東京大学',
            ],
            [
                'university_id' => 2,
                'prefectures' => '京都',
                'university_name' => '京都大学',
            ],
            [
                'university_id' => 3,
                'prefectures' => '福岡',
                'university_name' => '九州工業大学',
            ],
            [
                'university_id' => 4,
                'prefectures' => '北海道',
                'university_name' => '北海道大学',
            ],
            [
                'university_id' => 5,
                'prefectures' => '石川',
                'university_name' => '金沢工業大学',
            ],
        ]
    );
    }
}
