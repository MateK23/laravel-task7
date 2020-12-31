<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relations extends Model
{
    public function roles() // many to many
    {
        return $this->belongsToMany('App\Role');
    }
}
