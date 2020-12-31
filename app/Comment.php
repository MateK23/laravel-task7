<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() // One To many Inverse
    {
        return $this->belongsTo('App\Post');
    }
}
