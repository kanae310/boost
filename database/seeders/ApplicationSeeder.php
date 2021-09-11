<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->truncate();

        DB::table('applications')->insert([
            [
                'user_id' => 1,
                'event_id' => 1
            ],
            [
                'user_id' => 2,
                'event_id' => 4
            ],
            [
                'user_id' => 3,
                'event_id' => 1
            ],
            [
                'user_id' => 5,
                'event_id' => 6
            ],
            [
                'user_id' => 6,
                'event_id' => 2
            ],
            [
                'user_id' => 7,
                'event_id' => 4
            ],
            [
                'user_id' => 8,
                'event_id' => 5
            ],
            [
                'user_id' => 9,
                'event_id' => 8
            ],
        ]
    );
    }
}
