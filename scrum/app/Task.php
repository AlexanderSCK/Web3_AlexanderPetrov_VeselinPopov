<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $primaryKey = 'task_id';
    protected $fillable = ['user_id','stage_id','project_id','completed','description'];
    public function stage(){

        return $this->belongsTo(Stage::class);
        
    }

    public function user(){

        return $this->belongsTo(User::class);
        
    }

    public function project(){

        return $this->belongsTo(Project::class);
        
    }

    }
