<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TablaRma extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql';
    protected $table = 'tabla_rma';

    public $incrementing = false;
    public $timestamps = false;

  



  
}