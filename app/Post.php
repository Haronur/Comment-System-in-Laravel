<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
    protected $fillable = ['title', 'body', 'userId'];

    public function comments()
    {
        return $this->hasMany('App\Comment')->whereNull('parent_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User','userId', 'id');
    }
}
