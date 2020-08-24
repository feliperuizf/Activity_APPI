<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experienceworkers extends Model
{
    protected $table ='experience_workers';
    protected $fillabled=['workers_id','experiences_id'];

}
