<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ngo extends Authenticatable
{
    use Notifiable;

    protected $guard = 'ngo';

    protected $fillable = [
        'name', 'description', 'phone', 'email', 'password', 'postalcode', 'city',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
