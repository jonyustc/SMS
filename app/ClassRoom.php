<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable = ['class_name'];

    public function students()
    {
        return $this->hasMany('App\UserInfo');
    }
}
