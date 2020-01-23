<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    public function project(){

        return $this->belongsTo(Project::class);
        
    }

    public function stage(){

        return $this->hasMany(Stage::class);
        
    }
}
