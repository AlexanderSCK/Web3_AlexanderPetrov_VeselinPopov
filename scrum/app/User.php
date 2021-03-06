<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image'   , 'api_token'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tasks(){

        return $this->hasMany(Task::class);
        
    }

    public function projects(){

        return $this->hasMany(Project::class);
        
    }

    public function userprojects(){

        return $this->hasMany(User_Project::class);
        
    }
}
