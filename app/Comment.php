<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = [
    	'content',
    	'owner_id',
    	'parent_type',
    	'parent_id'
    ];

    public function comments() 
    {
        return $this->morphMany();
    }

    public function projects()
    {
    	return $this->morphTo();
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
