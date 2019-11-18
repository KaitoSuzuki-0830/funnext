<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class board extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'user_id' =>'required',
        'title'=>'required',
        'comment'=>'required'
    );

    public function getData(){
        return $this->id.':'.$this->title;
    }
}
