<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = [
        'pro_id',
        'pro_name',
        'ptype_id',
        'level_id',
        'sale_price',
        'stock',
        'image',
        'descript',
        ''
        ];

}
