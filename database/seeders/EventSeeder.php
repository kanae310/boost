<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->truncate();

        DB::table('events')->insert([
            'event_id' => 1,
            'event_name' => 'イベント1',
            'explain' => 'イベント1の説明',
            'application_period' => '2021-09-11',
            'start_time' => '2021-09-12 11:00:00',
            'end_time' => '2021-09-12 13:00:00',
            'location' => 'オンライン',
            'category_id' => 1,
            'host_user_id' => 1,
            'discord_url' => 'hoge1@hoge',
        ],
        [
            'event_id' => 2,
            'event_name' => 'イベント2',
            'explain' => 'イベント2の説明',
            'application_period' => '2021-09-12',
            'start_time' => '2021-09-12 11:00:00',
            'end_time' => '2021-09-12 13:00:00',
            'location' => 'オンライン',
            'category_id' => 2,
            'host_user_id' => 2,
            'discord_url' => 'hoge2@hoge',
        ],
        [
            'event_id' => 3,
            'event_name' => 'イベント3',
            'explain' => 'イベント3の説明',
            'application_period' => '2021-09-13',
            'start_time' => '2021-09-12 11:00:00',
            'end_time' => '2021-09-12 13:00:00',
            'location' => 'オンライン',
            'category_id' => 3,
            'host_user_id' => 3,
            'discord_url' => 'hoge2@hoge',
        ],
        [
            'event_id' => 4,
            'event_name' => 'イベント4',
            'explain' => 'イベント4の説明',
            'application_period' => '2021-09-14',
            'start_time' => '2021-09-12 11:00:00',
            'end_time' => '2021-09-12 13:00:00',
            'location' => 'オンライン',
            'category_id' => 3,
            'host_user_id' => 3,
            'discord_url' => 'hoge3@hoge',
        ],
        [
            'event_id' => 5,
            'event_name' => 'イベント5',
            'explain' => 'イベント5の説明',
            'application_period' => '2021-09-15',
            'start_time' => '2021-09-12 11:00:00',
            'end_time' => '2021-09-12 13:00:00',
            'location' => 'オンライン',
            'category_id' => 4,
            'host_user_id' => 5,
            'discord_url' => 'hoge3@hoge',
        ],
        );
    }
}
