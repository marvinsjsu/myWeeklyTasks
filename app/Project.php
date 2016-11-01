<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'projects';
    protected $fillable = [
    	'title',
    	'description',
    	'user_id',
    	'start_date',
    	'due_date',
    	'status',
    	'done',
        'deleted',
    ];

    public function tasks()
    {
        return $this->hasMany('App\Task');
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
