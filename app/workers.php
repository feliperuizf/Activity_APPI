<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class workers extends Model
{
    protected $table ='workers';
    protected $fillabled=['name','lastname','email','Telephone','adress','id_estado_disponibilidades'];

}
