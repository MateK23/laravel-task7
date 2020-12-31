<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function OneToOne()
    {
        return Relations::join("phones", "users.id")->get();
    }
    public function OneToMany()
    {
        return Relations::join("phones", "user")->get();
    }
    public function OneToManyInverse()
    {
        return Phone::join("user", "users.id")->get();
    }
    public function ManyToMany()
    {
        return Relations::with("roles")->get();
    }
}
