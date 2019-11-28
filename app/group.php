<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class group extends Model
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    protected $fillable = ['name','slug','description','featured','category_id','user_id'];

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
