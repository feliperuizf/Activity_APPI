<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class experiences extends Model
{
    protected $table ='experiences';
    protected $fillabled=['company_name','activities_executed','fecha_inicio_contrato','fecha_fin_contrato'];

}
