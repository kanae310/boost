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
            [
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
            ],
            [
                'user_id' => 6,
                'user_name' => '名前6',
                'email' => 'hoge6@hoge',
                'password' => 'hogehoge',
            ],
            [
                'user_id' => 7,
                'user_name' => '名前7',
                'email' => 'hoge7@hoge',
                'password' => 'hogehoge',
            ],
            [
                'user_id' => 8,
                'user_name' => '名前8',
                'email' => 'hoge8@hoge',
                'password' => 'hogehoge',
            ],
            [
                'user_id' => 9,
                'user_name' => '名前9',
                'email' => 'hoge9@hoge',
                'password' => 'hogehoge',
            ],
            [
                'user_id' => 10,
                'user_name' => '名前10',
                'email' => 'hoge10@hoge',
                'password' => 'hogehoge',
            ],
        ]);
    }
}
