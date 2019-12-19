<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function groups(){
        return $this->belongsToMany('App\group');
    }

    public function prefecture(){
        return $this->belongsTo('App\Prefecture');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

}
