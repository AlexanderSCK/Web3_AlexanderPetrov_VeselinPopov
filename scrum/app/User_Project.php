<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Project extends Model
{
    //
    public function projects()
    {
        return $this->belongsTo('App\Project');
    }

    public function user(){

        return $this->belongsTo(User::class);
        
    }
}
