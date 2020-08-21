<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;


class Ngo extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $guard = 'ngo';

    protected $fillable = [
        'name', 'description', 'phone', 'email', 'password', 'postalcode', 'city',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
