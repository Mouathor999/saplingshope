<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table ='customer';
    protected $fillable=['id','username','password','cus_name','cus_lastname','gender','village','district','province','tel','email','image'];
    public function order(){
        return $this->hasMany(Order::class);
    }
}
