<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Contract extends Authenticatable
{
    use Notifiable;

   
    protected $connection = 'mysql6';
    protected $table = 'contracts';

    public $incrementing = false;
    public $timestamps = false;

}
