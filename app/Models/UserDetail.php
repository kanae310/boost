<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_detail_id',
        'gender',
        'birthday',
        'university_id',
        'profile_img',
    ];

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function university()
    {
        return $this->belongTo('App\University');
    }

    public function userInfo()
    {
        $user_id = Auth::id();

        $user_info = DB::table('user_details')
                        ->join('users', 'user_detail_id', '=', 'id')
                        ->join('universities', 'user_details.university_id', '=', 'universities.university_id')
                        ->select('id', 'user_name', 'email', 'gender', 'birthday', 'user_details.university_id', 'university_name','profile_img')
                        ->where('id', '=', $user_id)
                        ->get();

        return $user_info;
    }

}
