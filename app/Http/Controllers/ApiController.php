<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ApiController extends Controller
{
    public function index()
    {
        $hello = 'Hello,World!';

        return response()->json([
            'message' => 'ok',
            'data' => $hello
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function user()
    {
        $hello_array = ['中尾', 'tanaka', 'takarada'];

        // key1で60秒でキャッシュを作成する
        Redis::set('key1', json_encode($hello_array,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
        Redis::expire("key1", 60);

        return response()->json([
            'message' => 'ok',
            'data' => $hello_array
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}
