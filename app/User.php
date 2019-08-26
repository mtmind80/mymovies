<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'is_admin',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Methods */

    public function isAdmin()
    {
        return $this->is_admin;
    }

    /** Mutators */


    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  \Hash::make($value);
    }
}
