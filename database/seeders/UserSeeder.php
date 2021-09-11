<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'user_id' => 1,
            'user_name' => '名前1',
            'email' => 'hoge1@hoge',
            'password' => 'hogehoge',
        ],
        [
            'user_id' => 2,
            'user_name' => '名前2',
            'email' => 'hoge2@hoge',
            'password' => 'hogehoge',
        ],
        [
            'user_id' => 3,
            'user_name' => '名前3',
            'email' => 'hoge3@hoge',
            'password' => 'hogehoge',
        ],
        [
            'user_id' => 4,
            'user_name' => '名前4',
            'email' => 'hoge4@hoge',
            'password' => 'hogehoge',
        ],
        [
            'user_id' => 5,
            'user_name' => '名前5',
            'email' => 'hoge4@hoge',
            'password' => 'hogehoge',
        ]
        );
    }
}
