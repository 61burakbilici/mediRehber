<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yetkis extends Model
{
    protected $table = 'yetkilers';
    //protected $fillable = [];

    public static function getYetkileri($user_id)
    {

        return yetkilers::where('users_id', $user_id)->get();

    }


}
