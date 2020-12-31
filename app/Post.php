<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments() // One To Many
    {
        return $this->hasMany('App\Comment');
    }
}
