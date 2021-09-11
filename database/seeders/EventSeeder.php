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
            [
                'event_id' => 1,
                'event_name' => 'イベント1',
                'description' => 'イベント1の説明',
                'application_period' => '2021-09-11',
                'start_time' => '2021-09-12 11:00:00',
                'end_time' => '2021-09-12 13:00:00',
                'location' => 'オンライン',
                'category_id' => 1,
                'host_user_id' => 1,
                'discord_url' => 'hoge1@hoge',
                'created_at' => '2021-09-10 11:00:00',
            ],
            [
                'event_id' => 2,
                'event_name' => 'イベント2',
                'description' => 'イベント2の説明',
                'application_period' => '2021-09-12',
                'start_time' => '2021-09-12 11:00:00',
                'end_time' => '2021-09-12 13:00:00',
                'location' => 'オンライン',
                'category_id' => 2,
                'host_user_id' => 2,
                'discord_url' => 'hoge2@hoge',
                'created_at' => '2021-09-10 12:00:00',
            ],
            [
                'event_id' => 3,
                'event_name' => 'イベント3',
                'description' => 'イベント3の説明',
                'application_period' => '2021-09-13',
                'start_time' => '2021-09-12 11:00:00',
                'end_time' => '2021-09-12 13:00:00',
                'location' => 'オンライン',
                'category_id' => 3,
                'host_user_id' => 3,
                'discord_url' => 'hoge3@hoge',
                'created_at' => '2021-09-10 13:00:00',
            ],
            [
                'event_id' => 4,
                'event_name' => 'イベント4',
                'description' => 'イベント4の説明',
                'application_period' => '2021-09-14',
                'start_time' => '2021-09-12 11:00:00',
                'end_time' => '2021-09-12 13:00:00',
                'location' => 'オンライン',
                'category_id' => 3,
                'host_user_id' => 3,
                'discord_url' => 'hoge4@hoge',
                'created_at' => '2021-09-10 14:00:00',
            ],
            [
                'event_id' => 5,
                'event_name' => 'イベント5',
                'description' => 'イベント5の説明',
                'application_period' => '2021-09-15',
                'start_time' => '2021-09-12 11:00:00',
                'end_time' => '2021-09-12 13:00:00',
                'location' => 'オンライン',
                'category_id' => 4,
                'host_user_id' => 5,
                'discord_url' => 'hoge5@hoge',
                'created_at' => '2021-09-10 15:00:00',

            ],
            [
                'event_id' => 6,
                'event_name' => 'イベント6',
                'description' => 'イベント6の説明',
                'application_period' => '2021-09-11',
                'start_time' => '2021-09-12 15:00:00',
                'end_time' => '2021-09-12 17:00:00',
                'location' => 'オンライン',
                'category_id' => 1,
                'host_user_id' => 2,
                'discord_url' => 'hoge6@hoge',
                'created_at' => '2021-09-10 16:00:00',
            ],
            [
                'event_id' => 7,
                'event_name' => 'イベント7',
                'description' => 'イベント7の説明',
                'application_period' => '2021-09-12',
                'start_time' => '2021-09-12 13:00:00',
                'end_time' => '2021-09-12 15:00:00',
                'location' => 'オンライン',
                'category_id' => 2,
                'host_user_id' => 4,
                'discord_url' => 'hoge7@hoge',
                'created_at' => '2021-09-10 17:00:00',
            ],
            [
                'event_id' => 8,
                'event_name' => 'イベント8',
                'description' => 'イベント8の説明',
                'application_period' => '2021-09-13',
                'start_time' => '2021-09-12 13:00:00',
                'end_time' => '2021-09-12 15:00:00',
                'location' => 'オンライン',
                'category_id' => 5,
                'host_user_id' => 3,
                'discord_url' => 'hoge8@hoge',
                'created_at' => '2021-09-10 18:00:00',
            ],
            [
                'event_id' => 9,
                'event_name' => 'イベント9',
                'description' => 'イベント9の説明',
                'application_period' => '2021-09-14',
                'start_time' => '2021-09-12 13:00:00',
                'end_time' => '2021-09-12 15:00:00',
                'location' => 'オンライン',
                'category_id' => 4,
                'host_user_id' => 7,
                'discord_url' => 'hoge9@hoge',
                'created_at' => '2021-09-10 19:00:00'
            ],
            [
                'event_id' => 10,
                'event_name' => 'イベント10',
                'description' => 'イベント10の説明',
                'application_period' => '2021-09-15',
                'start_time' => '2021-09-12 13:00:00',
                'end_time' => '2021-09-12 15:00:00',
                'location' => 'オンライン',
                'category_id' => 5,
                'host_user_id' => 5,
                'discord_url' => 'hoge10@hoge',
                'created_at' => '2021-09-10 20:00:00',
            ],
        ]
        );
    }
}
