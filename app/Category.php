<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function group(){
        return $this->hasMany('App\group');
    }

    public function plan(){
        return $this->hasMany('App\Plan');
    }
}
