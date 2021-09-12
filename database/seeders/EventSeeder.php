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
                'event_img' => 'https://images.pexels.com/photos/442576/pexels-photo-442576.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/868483/pexels-photo-868483.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/3621104/pexels-photo-3621104.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/6203512/pexels-photo-6203512.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/4778662/pexels-photo-4778662.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/4691555/pexels-photo-4691555.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/7900283/pexels-photo-7900283.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/544961/pexels-photo-544961.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/9158795/pexels-photo-9158795.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
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
                'event_img' => 'https://images.pexels.com/photos/6925378/pexels-photo-6925378.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260',
                'created_at' => '2021-09-10 20:00:00',
            ],
        ]
        );
    }
}
