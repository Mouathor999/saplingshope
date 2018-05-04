<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLevel extends Model
{
    protected $table ='product_level';
    protected $fillable = ['level_id','level'];
}
