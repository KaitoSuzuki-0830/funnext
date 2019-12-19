<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['title','slug','description','price','pref_id','place','user_id','category_id','featured','date'];

    public function prefecture(){
        return $this->belongsTo('App\Prefecture');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function groups(){
        return $this->belongsToMany('App\group');
    }



    public function profile(){
        return $this->hasOne('App\Profile');
    }

}
