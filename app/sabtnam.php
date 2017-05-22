<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sabtnam extends Model
{
   protected $fillable = ['name','email','avrage','number','gender'];
   protected $table='sabtnam';
}
