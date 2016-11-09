<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{

	protected $fillable = ['class_name','section'];
    //
    public function students()
    {
    	return $this->hasMany('App\Student');
    }
}
