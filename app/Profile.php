<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Plan;
use App\group;

class profile extends Model
{
    protected $fillable = ['user_id','about','avatar','pref_id','facebook','weblink','twitter'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function prefectures(){
        return $this->hasOne('App\Prefecture');
    }

    public function plan(){
        return $this->belongsTo('App\Plan');
    }

    public function group(){
        return $this->belongsTo('App\Group');
    }
}
