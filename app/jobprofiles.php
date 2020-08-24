<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobprofiles extends Model
{
    protected $table ='job_profiles';
    protected $fillabled=['job','workers_id'];

}
