<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VideosWebex extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $connection = 'mysql3';
    protected $table = 'videos_webexs';

    public $incrementing = false;
    public $timestamps = false;

  



  
}