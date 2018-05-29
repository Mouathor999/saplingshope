<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
   protected $table ='promotion';
   protected $fillable = ['id','promotion'];


    public function product(){
        return $this->belongsToMany(Product::class,'product_id','promotion_id')
            ->withPivot('start_date','end_date','product_id','promotion_id');
    }
}
