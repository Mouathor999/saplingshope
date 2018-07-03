<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $fillable = [
        'id',
        'emp_username',
        'password',
        'emp_name',
        'emp_lastname',
        'gender',
        'age',
        'emp_education_id',
        'village',
        'district',
        'province',
        'tel',
        'email',
        'identification_card',
        'image',
        'description'
    ];
    public function booking(){
        return $this->hasMany(Booking::class,'emp_id');
    }
    public function education(){
        return $this->hasMany(EmployeeEducation::class,'id','emp_education_id');
    }
    public function import(){
        return $this->hasMany(Import::class);
    }

}
