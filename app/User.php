<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles()
    {
        return $this->belongsToMany('App\Role','user_role','user_id','role_id');
    }

    public function userinfos(){
        return $this->hanMany('App\UserInfo');
    }


    public function studentinfo($classID)
    {
        $students = Student()->where('class_id',$classID)->get();
        return $students;
    }

    public function hasAnyRole($roles)
    {
        if(in_array($roles)){
            foreach($roles as $role){
                if($this->hasRole($role))
                {
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }

        return false;
    }

    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first()){
            return true;
        }

        return false;
    }
}
