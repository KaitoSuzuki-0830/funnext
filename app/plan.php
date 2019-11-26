<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function groups(){
        return $this->belongsToMany('App\group');
    }

    public function prefecture(){
        return $this->hasOne('App\Prefecture');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

}
