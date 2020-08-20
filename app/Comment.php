<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments';
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function replies()
    {
        return $this->hasMany('App\Comment', 'parent_id');
    } 
}
