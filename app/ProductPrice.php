<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table ='productprice';
    protected $fillable = [
        'id',
        'product_id',
        'lower_price',
        'median_price',
        'heighter_price',
    ];
    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

}
