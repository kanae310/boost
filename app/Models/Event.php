<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_name',
        'description',
        'application_period',
        'start_time',
        'end_time',
        'location',
        'category_id',
        'host_user_id',
        // 'event_img',
        'discord_url',
    ];

    public function event_active()
    {
        return $this->hasOne('App\EventActive', 'event_active_id');
    }

    public function category()
    {
        return $this->belongsTo('App\EventActive');
    }

    public function application()
    {
        return $this->hasMany('App\Application');
    }

    public function categoryShow()
    {
        $category_show = DB::table('categories')
                        ->select('category_id', 'category_name')
                        ->get();

        return $category_show;
    }


    public function eventShow(int $category_id = null)
    {
        if ($category_id == null) {
            $event_show = DB::table('events')
                        ->join('event_actives', 'event_id', '=', 'event_active_id')
                        ->select('event_id', 'event_name', 'application_period', 'location', 'host_user_id','event_img', 'category_id')
                        ->get();
        }
        else {
            $event_show = DB::table('events')
                        ->join('event_actives', 'event_id', '=', 'event_active_id')
                        ->select('event_id', 'event_name', 'application_period', 'location', 'host_user_id','event_img', 'category_id')
                        ->where('category_id', '=', $category_id)
                        ->get();
        }

        return $event_show;
    }

    public function eventDetail(int $event_id)
    {
        $event_detail = DB::table('events')
                        ->join('event_actives', 'event_id', '=', 'event_active_id')
                        ->join('users', 'events.host_user_id', '=', 'users.id')
                        ->select('event_id', 'event_name', 'start_time', 'end_time', 'location', 'category_id', 'application_period', 'description', 'events.host_user_id', 'user_name', 'discord_url','event_img')
                        ->where('event_id', '=', $event_id)
                        ->get();

        $user_id = Auth::id();

        if (DB::table('applications')
            ->join('events', 'applications.event_id', '=', 'events.event_id')
            ->where('host_user_id', '=', $user_id)
            ->where('applications.event_id', '=', $event_id)
            ->exists())
        {
            $judge_already_applied = 2;
        }
        else if (DB::table('applications')
                ->join('users', 'user_id', '=', 'id')
                ->join('events', 'applications.event_id', '=', 'events.event_id')
                ->where('user_id', '=', $user_id)
                ->where('applications.event_id', '=', $event_id)
                ->exists())
        {
            $judge_already_applied = 1;
        } else {
            $judge_already_applied = 0;
        }

        return array($event_detail, $judge_already_applied);
    }

    public function eventStore($event_data)
    {
        $user_id = Auth::id();

        $event_id = DB::table('events')->insertGetId([
            'event_name' => $event_data['event_name'],
            'description' => $event_data['description'],
            'application_period' => $event_data['application_period'],
            'start_time' => $event_data['start_time'],
            'end_time' => $event_data['end_time'],
            'location' => $event_data['location'],
            'category_id' => $event_data['category_id'],
            'host_user_id' => $user_id,
            'discord_url' => $event_data['discord_url'],
        ]);

        DB::table('event_actives')->insertGetId([
            'event_active_id' => $event_id,
        ]);

        return $event_id;
    }
}
