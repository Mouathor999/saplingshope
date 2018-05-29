<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLevel extends Model
{
    protected $table ='product_level';
    protected $fillable = ['id','level'];

    public function Product_Relation(){
        return $this -> belongsTo(Product::class);
    }

}
