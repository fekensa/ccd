<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'middle_name', 'last_name','email','mobile','password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    //user has many posts
    public function posts()
    {
        return $this->hasMany('App\Post','users_id');
    }

    //user has many photos
    public function images()
    {
        return $this->hasMany('App\Image','users_id');
    }

    //user can have many houses
    public function houses()
    {
        return $this->hasOne('App\House','users_id');
    }
    
    //user have one address
    public function addresses()
    {
        return $this->hasOne('App\Address','users_id');
    }

    //user can have many comments
    public function comments()
    {
        return $this->hasMany('App\Comment','users_id');
    }

        //user can have many comments
    public function messages()
    {
        return $this->hasMany('App\Message','users_id');
    }


    //user can have many comments
    public function feedbacks()
    {
        return $this->hasMany('App\Feedback','users_id');
    }

    public function is_admin()
    {
        $role = $this->role;
        if($role == 'Administrator')
        {
            return true;
        }
        return false;
    }
    public function is_cust()
    {
        $role = $this->role;
        if($role == 'Customer')
        {
            return true;
        }
        return false;
    }
}
