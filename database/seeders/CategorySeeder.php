<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'category_name' => 'ゲーム',
            ],
            [
                'category_id' => 2,
                'category_name' => 'エクササイズ',
            ],
            [
                'category_id' => 3,
                'category_name' => 'スポーツ',
            ],
            [
                'category_id' => 4,
                'category_name' => '勉強',
            ],
            [
                'category_id' => 5,
                'category_name' => '地域限定',
            ],
        ]
    );
    }
}
