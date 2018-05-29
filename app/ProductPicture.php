<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    protected $table = 'image';
    protected $fillable = ['product_id','image'];
    public function product(){
     $this->belongsTo(Product::class);
    }
}
