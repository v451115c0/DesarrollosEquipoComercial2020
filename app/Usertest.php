<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usertest extends Authenticatable
{
    use Notifiable;

    protected $connection = 'mysql10';
    protected $table = 'users';

    public $incrementing = false;
    public $timestamps = false;

  
}
