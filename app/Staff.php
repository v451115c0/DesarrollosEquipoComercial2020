<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;

   
    protected $connection = 'mysql5';
    protected $table = 'staff';

    public $incrementing = false;
    public $timestamps = false;

}
