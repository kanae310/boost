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
        ->select('event_id')
        ->where('event_id', '=', $event_id)
        ->get();

        return $res_data;
    }

    public function eventCancel($event_id)
    {
        $user_id = Auth::id();

        DB::table('applications')
            ->where('event_id', '=', $event_id)
            ->where('applications.user_id', '=', $user_id)
            ->delete();

        return 0;
    }

    public function appliedShow()
    {
        $user_id = Auth::id();
        $now = date("Y-m-d H:i:s");

        $applied_show = DB::table('applications')
                ->join('events', 'events.event_id', '=', 'applications.event_id')
                ->join('event_actives', 'events.event_id', '=', 'event_active_id')
                ->join('users', 'id', '=', 'user_id')
                ->join('categories', 'categories.category_id', '=', 'events.category_id')
                ->select('events.event_id', 'event_name', 'application_period', 'location', 'host_user_id', 'events.category_id', 'event_img', 'category_name', 'start_time', 'end_time')
                ->where('id', '=', $user_id)
                ->where('end_time', '>', $now)
                ->get();

        $host_user_name_array = array();

        foreach($applied_show as $applied) {
            $host_user_name = DB::table('users')
            ->join('user_details', 'users.id', '=', 'user_detail_id')
            ->select('user_name')
            ->where('id', $applied->host_user_id)
            ->get();
            array_push($host_user_name_array, $host_user_name[0]->user_name);
        }

        return array($applied_show, $host_user_name_array);
    }

    // ??????????????????????????????
    public function postShow()
    {
        $user_id = Auth::id();

        $post_show = DB::table('events')
                ->join('users', 'id', '=', 'host_user_id')
                ->join('event_actives', 'event_id', '=', 'event_active_id')
                ->join('categories', 'categories.category_id', '=', 'events.category_id')
                ->select('events.event_id', 'event_name', 'application_period', 'location', 'events.category_id', 'event_img', 'category_name', 'start_time', 'end_time', 'user_name')
                ->where('host_user_id', '=', $user_id)
                ->get();
        // dd($post_show);
        return $post_show;
    }

    // ???????????????????????????????????????
    public function pastAppliedShow()
    {
        $user_id = Auth::id();
        $now = date("Y-m-d H:i:s");

        $past_applied_show = DB::table('applications')
                ->join('events', 'events.event_id', '=', 'applications.event_id')
                ->join('event_actives', 'events.event_id', '=', 'event_active_id')
                ->join('users', 'id', '=', 'user_id')
                ->join('categories', 'categories.category_id', '=', 'events.category_id')
                ->select('events.event_id', 'event_name', 'application_period', 'location', 'host_user_id', 'events.category_id', 'event_img', 'category_name', 'start_time', 'end_time')
                ->where('id', '=', $user_id)
                ->where('end_time', '<', $now)
                ->get();

        $host_user_name_array = array();

        foreach($past_applied_show as $past_applied) {
            $host_user_name = DB::table('users')
            ->join('user_details', 'users.id', '=', 'user_detail_id')
            ->select('user_name')
            ->where('id', $past_applied->host_user_id)
            ->get();
            array_push($host_user_name_array, $host_user_name[0]->user_name);
        }
        return array($past_applied_show, $host_user_name_array);
    }
}
