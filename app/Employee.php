<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'emp_id',
        'emp_username',
        'password',
        'emp_name',
        'emp_lastname',
        'gender',
        'age',
        'edu_id',
        'village',
        'district',
        'province',
        'tel',
        'email',
        'identification_card',
        'image',
        'description'
    ];
    public function Relation_To_BookingTB(){
        return $this->hasMany(Booking::class,'emp_id');
    }

}
