<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_details')->truncate();

        DB::table('user_details')->insert([
            [
                'user_detail_id' => 1,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 1,
                'profile_img' => 'user1@hoge',
            ],
            [
                'event_active_id' => 2,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_code' => 2,
                'profile_img' => 'user2@hoge',
            ],
            [
                'event_active_id' => 3,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 2,
                'profile_img' => 'user3@hoge',
            ],
            [
                'event_active_id' => 4,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 3,
                'profile_img' => 'user4@hoge',
            ],
            [
                'event_active_id' => 5,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 2,
                'profile_img' => 'user5@hoge',
            ],
            [
                'event_active_id' => 6,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_code' => 5,
                'profile_img' => 'user6@hoge',
            ],
            [
                'event_active_id' => 7,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_code' => 4,
                'profile_img' => 'user7@hoge',
            ],
            [
                'event_active_id' => 8,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_code' => 4,
                'profile_img' => 'user8@hoge',
            ],
            [
                'event_active_id' => 9,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 4,
                'profile_img' => 'user9@hoge',
            ],
            [
                'event_active_id' => 10,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_code' => 4,
                'profile_img' => 'user10@hoge',
            ],
        ]
    );
    }
}
