<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductType;

class Product extends Model
{
    protected $table ='product';
    protected $fillable = [
        'id',
        'pro_name',
        'product_type_id',
        'product_level_id',
        'sale_price',
        'stock',
        'descript',
        'limit'
        ];
    public function Producttype(){
        return $this->belongsTo(ProductType::class,'product_type_id');
    }

    public function productlevel(){
        return $this->belongsTo(ProductLevel::class,'product_level_id');
    }

    public function productimage(){
        return $this->hasMany(Image::class,'product_id', 'id');
    }
    public function order(){
        return $this->belongsToMany(Order::class,'orderdetail','product_id','order_id');
    }
    public function promotion(){
        return $this->belongsToMany(Promotion::class,'promotiondetail','product_id','promotion_id')
            ->withPivot('start_date','end_date','product_id','promotion_id');
    }
}
