<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
    public function index()
    {
        $hello = 'Hello,World!';

        return view('index', ['hello' => $hello]);
    }

    public function user()
    {
        $hello_array = ['nakao', 'tanaka', 'takarada'];

        // key1で60秒でキャッシュを作成する
        Redis::set('key1', $hello_array);
        Redis::expire("key1", 60);

        return view('user', ['hello_array' => $hello_array]);
    }
}
