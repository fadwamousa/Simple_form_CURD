<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function post(){

        return $this->hasOne(Post::class,'user_id');
        //second Argumants the foriegn key in post table
    }*/

    public function posts(){

        return $this->hasMany(Post::class,'user_id');
        //second Argumants the foriegn key in post table
    }
    /*
    public function roles(){

        return $this->belongsToMany(Role::class,'role_user','user_id','role_id')->withPivot('created_at');
        //to customize table name and columns
        //return $this->belongsToMany(Role::class,'name_table','foreignKey','foreignKey');
    }

    public function photos(){
        return $this->morphMany(Photo::class,'imageable');
    }

    public function tags(){

        return $this->morphToMany(Tag::class,'taggable');
    }*/
}
