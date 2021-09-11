<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_id',
    ];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function eventApply(int $event_id)
    {
        $user_id = Auth::id();

        DB::table('applications')->insert([
            'user_id' => $user_id,
            'event_id' => $event_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $res_data = DB::table('events')
                ->select('discord_url')
                ->where('event_id', '=', $event_id)
                ->get();

        return $res_data;
    }
}
