<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeEducation extends Model
{
    protected $table ='emp_education';
    protected $fillable = ['edu_id','education'];
}
