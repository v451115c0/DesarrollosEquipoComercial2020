<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class warehousesProduct extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql2';
    protected $table = 'warehouses_products';

    public $incrementing = false;
    public $timestamps = false;

  



  
}