<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restful extends Model
{
   protected $fillable = ['id','title','time','importance'];
   protected $table='restful';

}
