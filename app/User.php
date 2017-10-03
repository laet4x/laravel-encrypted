<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Delatbabel\Elocrypt\Elocrypt;

class User extends Authenticatable
{
    use Notifiable;
    use Elocrypt;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address','contact_number','email', 'password',
    ];

    protected $encrypts = [
        'name','address','contact_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
