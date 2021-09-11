<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EventActive extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_active_id',
    ];

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function eventDelete($event_id)
    {
        DB::table('event_actives')->where('event_active_id', '=', $event_id)->delete();
        return 0;
    }
}
