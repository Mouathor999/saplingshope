<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table ='orderdetail';
    protected $fillable=[
        'order_id',
        'product_id',
        'pro_name',
        'quantity',
        'sale_price',
        'total_price',
        'image',
        'description',
    ];
}
