<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ControlCi extends Authenticatable
{
    use Notifiable;

   
    protected $connection = 'mysql4';
    protected $table = 'control_ci';

    public $incrementing = false;
    public $timestamps = false;

}
