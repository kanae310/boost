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
                'university_id' => 1,
                'profile_img' => 'hogehoge',
            ],
            [
                'user_detail_id' => 2,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'user2hoge',
            ],
            [
                'user_detail_id' => 3,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'user3hoge',
            ],
            [
                'user_detail_id' => 4,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 3,
                'profile_img' => 'user4hoge',
            ],
            [
                'user_detail_id' => 5,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 2,
                'profile_img' => 'user5hoge',
            ],
            [
                'user_detail_id' => 6,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 5,
                'profile_img' => 'user6hoge',
            ],
            [
                'user_detail_id' => 7,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'user7hoge',
            ],
            [
                'user_detail_id' => 8,
                'gender' => 'M',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'user8hoge',
            ],
            [
                'user_detail_id' => 9,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'user9hoge',
            ],
            [
                'user_detail_id' => 10,
                'gender' => 'F',
                'birthday' => '2000-01-01',
                'university_id' => 4,
                'profile_img' => 'user10hoge',
            ],
        ]
    );
    }
}
