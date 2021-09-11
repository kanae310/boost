<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_id',
        'prefectures',
        'university_name',
    ];

    public function user_detail()
    {
        return $this->hasOne('App\UserDetails');
    }
}
