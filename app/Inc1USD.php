<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inc1USD extends Model{
    protected $connection = 'nikkenla_incorporation';
    protected $table = 'user_promotion_kit';

    public $incrementing = false;
    public $timestamps = false;
}
