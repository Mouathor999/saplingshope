<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';
    protected $fillable = [
        'sup_id',
        'shop_name',
        'lastname',
        'sup_name',
        'village',
        'district',
        'province',
        'country',
        'tel',
        'email',
        'bankAccount',
    ];
}
