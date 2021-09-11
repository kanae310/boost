<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_actives')->truncate();

        DB::table('event_actives')->insert([
            'event_active_id' => 1,
        ],
        [
            'event_active_id' => 2,
        ],
        [
            'event_active_id' => 4,
        ],
        [
            'event_active_id' => 5,
        ],
    );
    }
}
