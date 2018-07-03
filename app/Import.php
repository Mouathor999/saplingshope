<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    protected $table = 'import';
    protected $fillable = ['id','orderOut_date', 'getIn_date','status','employee_id','supplier_id'];
    public function product(){
        $this->belongsToMany(Product::class,'importdetail','import_id')->withPivot('import_id','product_id','pro_name','quatity','imp_price','total_price','image','description');
    }

    public function employee(){
        return  $this->belongsTo(Employee::class,'employee_id');

    }

    public function supplier(){
      return  $this->belongsTo(Supplier::class,'supplier_id');

    }


}
