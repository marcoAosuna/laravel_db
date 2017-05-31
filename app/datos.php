<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos extends Model
{
      protected $fillable = [
        'name', 'posicion', 'office','age','start_date','salario',
    ];

}


