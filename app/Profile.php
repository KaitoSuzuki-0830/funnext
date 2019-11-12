<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class profile extends Model
{
    protected $fillable = ['user_id','avatar','about','place','facebook','instagram','twitter'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
