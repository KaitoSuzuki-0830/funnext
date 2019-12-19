<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prefecture extends Model
{
    public function plan(){
        return $this->hasOne('App\Plan');
    }

    public function profile(){
        return $this->belongsTo('App\profile');
    }
}
