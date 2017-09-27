<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];
    public function users()
    {
        return $this->belongsToMany('App\User', 'post_detail', 'post_id', 'user_id');
    }
}
