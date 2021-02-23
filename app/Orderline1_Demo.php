<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderline1_Demo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'sqlsrv4'; /***** sqlsrv4 *****/
    protected $table = 'Orderline1_Demo';

    public $incrementing = false;
    public $timestamps = false;

  



  
}