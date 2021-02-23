<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class contractstest extends Authenticatable{
    protected $connection = 'nikkenla_incorporation';
    protected $table = 'contracts_test';

    public $incrementing = false;
    public $timestamps = false;
}