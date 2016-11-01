<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'comments';
    protected $fillable = [
    	'content',
    	'user_id',
        'commentable_id',
        'commentable_type',
        'deleted',
    ];

    public function comments() 
    {
        return $this->morphMany();
    }

    // public function projects()
    // {
    // 	return $this->morphTo();
    // }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
