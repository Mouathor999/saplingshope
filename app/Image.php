<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable = ['id','product_id','image'];
    public function Product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
