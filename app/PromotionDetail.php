<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionDetail extends Model
{
    protected $table = 'promotiondetail';
    protected $fillable = ['promotion_id','product_id','start_date','end_date'];
}
