<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'producttype';
    protected $casts =['id'=>'string'];
    protected $fillable = ['id','ptype_name'];
    public function Product(){
        return $this->hasMany(Product::class);
    }

    public function testproduct(){
        return $this->hasOne(Product::class);
    }
}
