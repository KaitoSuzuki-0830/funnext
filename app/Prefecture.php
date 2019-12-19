<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prefecture extends Model
{
    protected $fillable = ['name'];

    public function plans(){
        return $this->hasMany('App\Plan');
    }

    public function profile(){
        return $this->belongsTo('App\profile');
    }
}
