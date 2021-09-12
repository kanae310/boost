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
        ->select('discord_url','event_id')
        ->where('event_id', '=', $event_id)
        ->get();

        return $res_data;
    }

    // 申し込んだイベント一覧
    public function appliedShow()
    {
        $user_id = Auth::id();
        $now = date("Y-m-d H:i:s");

        $applied_show = DB::table('applications')
                ->join('events', 'events.event_id', '=', 'applications.event_id')
                ->join('event_actives', 'events.event_id', '=', 'event_active_id')
                ->join('users', 'id', '=', 'user_id')
                ->select('events.event_id', 'event_name', 'application_period', 'location', 'host_user_id', 'category_id')
                ->where('id', '=', $user_id)
                ->where('end_time', '>', $now)
                ->get();

        return $applied_show;
    }

    // 投稿したイベント一覧
    public function postShow()
    {
        $user_id = Auth::id();

        $post_show = DB::table('events')
                ->join('users', 'host_user_id', '=', 'id')
                ->join('event_actives', 'event_id', '=', 'event_active_id')
                ->select('event_id', 'event_name', 'application_period', 'location', 'host_user_id', 'category_id')
                ->where('id', '=', $user_id)
                ->get();
        dd($post_show);
        return $post_show;
    }

    // 過去に参加したイベント一覧
    public function pastAppliedShow()
    {
        $user_id = Auth::id();
        $now = date("Y-m-d H:i:s");

        $past_applied_show = DB::table('applications')
                ->join('events', 'events.event_id', '=', 'applications.event_id')
                ->join('event_actives', 'events.event_id', '=', 'event_active_id')
                ->join('users', 'id', '=', 'user_id')
                ->select('events.event_id', 'event_name', 'application_period', 'location', 'host_user_id', 'category_id')
                ->where('id', '=', $user_id)
                ->where('end_time', '<', $now)
                ->get();
        dd($past_applied_show);
        return $past_applied_show;
    }
}
