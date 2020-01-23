<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    public function tasks(){

        return $this->hasMany(Task::class);
        
    }

    public function project(){

        return $this->belongsTo(Project::class);
        
    }

    public function sprint(){

        return $this->belongsTo(Sprint::class);
        
    }
}
