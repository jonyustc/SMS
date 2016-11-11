<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //

	protected $fillable = ['full_name', 'father_name', 'mother_name', 'roll_no', 'data_of_birth', 'gender', 'address', 'phone_no', 'photo'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function classroom()
    {
    	return $this->belongsTo('App\Classroom');
    }

    public function checkRole()
    {
    	$user_id = $this->user['id'];
    	$role_id = DB::table('user_role')->where('user_id',$user_id)->value('role_id');
    	$role_name = DB::table('roles')->where('id',$role_id)->value('name');
    	return $role_name;
    }
}
