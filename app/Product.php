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
        'sale_price',
        'stock',
        'limit',
        'status',
        'product_type_id',
        'descript'

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
            ->withPivot('start_date','end_date','product_id','promotion_id','promotion');
    }
    public function import(){
        $this->belongsToMany(Image::class,'importdetail','import_id')
            ->withPivot('import_id','product_id','pro_name','quatity','imp_price','total_price','image','description');
    }
}
