<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['title','completed'];

    //to get to return title in route instead of id
    // public function getRouteKeyName(){
    //     return 'title';
    // }
}

