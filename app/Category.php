<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function groups(){
        return $this->hasMany('App\group');
    }

    public function plans(){
        return $this->hasMany('App\Plan');
    }
}
