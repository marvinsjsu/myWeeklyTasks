<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'tasks';
    protected $fillable = [
    	'title',
    	'description',
    	'due_date',
    	'start_date',
    	'project_id',
    	'status',
    	'done',
    	'user_id',
        'deleted',
    ];

    public function project() 
    {
    	return $this->belongsTo('App\Project');
    }

    public function comments()
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

