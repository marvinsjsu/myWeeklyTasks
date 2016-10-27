<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
    	'name',
    	'description',
    	'owner_id',
    	'start_date',
    	'due_date',
    	'status',
    	'done',
    ];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function comments() 
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }
}
