<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function groups(){
        return $this->belongsToMany('App\group');
    }

    public function plans(){
        return $this->belongsToMany('App\plan');
    }

    public function socialAccounts()
    {
        return $this->hasMany('App\SocialAccount');
    }

    public function identities(){
        return $this->hasMany('App\SocialIdentity');
    }

}
