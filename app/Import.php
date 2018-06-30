<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table = 'import';
    protected $fillable = ['id','import_date','status','employee_id','supplier_id'];
    public function product(){
        $this->belongsToMany(Product::class,'importdetail','import_id')->withPivot('import_id','product_id','pro_name','quatity','imp_price','total_price','image','description');
    }

}
