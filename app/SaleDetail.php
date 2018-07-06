<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $table ='saledetail';
    protected $fillable = ['sale_id','product_id','pro_nam','quantity','sale_price','total_price','image'];
    public function sale(){
        return $this->belongsTo(Sale::class,'sale_id');
    }
}
