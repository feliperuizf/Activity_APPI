<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studies extends Model
{
    protected $table ='studies';
    protected $fillabled=['academy_tittle','college','year_finalizacion','place'];
}
