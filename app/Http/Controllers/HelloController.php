<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HelloController extends Controller
{
    public function index()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        // key1で60秒でキャッシュを作成する
        Redis::set('key1', 'こんにちは');
        Redis::expire("key1", 60);

        return view('index', compact('hello', 'hello_array'));
    }

    public function getKey()
    {
        $hello = Redis::get('key1');
        $hello_array = [''];

        return view('index', compact('hello', 'hello_array'));
    }

    public function getUsers()
    {
        $hello = 'Hello,World!';
        $hello_array = ['Hello', 'こんにちは', 'ニーハオ'];

        // key1で60秒でキャッシュを作成する
        Redis::set('key1', 'こんにちは');
        Redis::expire("key1", 60);

        return view('index', compact('hello', 'hello_array'));
    }
}
