<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'event_name',
        'explain',
        'application_period',
        'start_time',
        'end_time',
        'location',
        'category_id',
        'user_id',
        'event_active_id',
    ];
}
