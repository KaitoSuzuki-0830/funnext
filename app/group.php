<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function plans(){
        return $this->belongsToMany('App\Plan');
    }

    public function profile(){
        return $this->belongsTo('App\Profile');
    }
}
