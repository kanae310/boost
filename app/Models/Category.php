<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'category_name',
    ];

    public function event()
    {
        return $this->hasMany('App\EventActive');
    }
}
