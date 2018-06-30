<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportDetail extends Model
{
    protected $table = 'importdetail';
    protected $fillable = [
        'import_id',
        'product_id',
        'pro_name',
        'quatity',
        'imp_price',
        'total_price',
        'image',
        'description'
    ];
}
