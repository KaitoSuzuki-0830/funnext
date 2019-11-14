<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'type','name','email','gender','body'
    ];
    static $types = [
        'サービスについて','利用者間でのトラブル','その他'
    ];
    static $genders = [
        '男性','女性','回答しない'
    ];
}
