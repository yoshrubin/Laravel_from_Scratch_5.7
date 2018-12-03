<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($decsription)
    {
        // $this->tasks()->create(compact('description'));
        return(
            Task::create([
                'project_id' => $this->id,
                'description' => $decsription
            ]));
    }
}
