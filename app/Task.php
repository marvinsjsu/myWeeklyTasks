<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
    	'name',
    	'description',
    	'due_date',
    	'start_date',
    	'project_id',
    	'status',
    	'done',
    	'owner_id'
    ];

    public function project() 
    {
    	return $this->belongsTo('App\Project');
    }

    public function comments()
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }
}
