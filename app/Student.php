<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['full_name','roll_no','father_name','mother_name','data_of_birth','gender','address','email','phone_no','photo'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function classroom()
    {
    	return $this->belongsTo('App\ClassRoom');
    }

    public function checkRole()
    {
    	$user_id = $this->user['id'];
    	$role_id = DB::table('user_role')->where('user_id',$user_id)->value('role_id');
    	$role_name = DB::table('role')->where('id',$role_id)->value('name');
    	return $role_name;
    }
}
