<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
   protected $table ='promotion';
   protected $fillable = ['promotion_id','promotion'];
}
