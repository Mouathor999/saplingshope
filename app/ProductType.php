<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'producttype';
    protected $fillable = ['ptype_id','ptype_name'];
}
