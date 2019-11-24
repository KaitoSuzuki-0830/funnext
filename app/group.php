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

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function plan(){
        return $this->belongsToMany('App\Plan');
    }

    public function profile(){
        return $this->belongsTo('App\Profile');
    }
}
