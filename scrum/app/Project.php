<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $primaryKey = 'project_id';
    protected $fillable = ['name','description','user_id', 'image',];

    public function stages(){

        return $this->hasMany(Stage::class);
        //@foreach ($project->tasks as @task)
        // {{$task->description}}
        //@endforeach
    }

    public function sprints(){

        return $this->hasMany(Sprint::class);
        
    }

    public function user(){

        return $this->belongsTo(User::class);
        
    }

    public function userproject(){

        return $this->hasMany(User_Project::class);
        
    }

    public function tasks(){

        return $this->hasMany(Task::class, 'project_id');
        
    }

    public function addTask($description)
    {
        $this->user()->tasks()->create(compact('description'));
    }

    
}
