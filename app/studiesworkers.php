<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studiesworkers extends Model
{
    protected $table ='studies_workers';
    protected $fillabled=['job_profiles_id','estudies_id'];

}
