<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Order extends Model
{
    protected $table ='order';
    protected $fillable = ['id','order_date','send_date','status','customer_id','employee_id'];
    public function product(){
        return $this->belongsToMany(Product::class,'promotiondetail','promotion_id','product_id')
            ->withPivot('start_date', 'end_date');
    }
}
