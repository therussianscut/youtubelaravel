<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;



class User extends Model implements AuthenticatableContract
{
    //

    use Authenticatable;

    use Notifiable;

    protected $fillable = [
        'first_name', 'email', 'password',
    ];

}
