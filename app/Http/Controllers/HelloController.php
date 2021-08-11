<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use DB;

class HelloController extends Controller
{
    public function index()
    {
        $hello = 'Hello,World!';

        return view('index', ['hello' => $hello]);
    }

    public function user()
    {
        $users = DB::select("SELECT * FROM users");
        $hello_array = [];
        foreach ($users as $user){
            $hello_array[] = $user->user_name;
        }

        // key1で60秒でキャッシュを作成する
        Redis::set('key1', json_encode($hello_array,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        Redis::expire("key1", 60);

        return view('user', ['hello_array' => $hello_array]);
    }
}
