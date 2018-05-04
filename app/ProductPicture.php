<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    protected $table = 'image';
    protected $fillable = ['pro_id','image'];
}
