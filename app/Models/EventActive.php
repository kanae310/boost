<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
