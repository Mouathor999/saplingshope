<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sale';
    protected $fillable = ['id','order_book_id','emp_id','sale_date','status','paymentway_id'];
    public function saledetail(){
        return $this->hasMany(SaleDetail::class);
    }
}
