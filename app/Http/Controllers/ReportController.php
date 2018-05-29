<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function ReportEmpWork(){
        return view('backEnd/Report/EmployeeWork');
    }
    public function EmployeeInfor(){
        $employees = Employee::all();
//        $employees = DB::table('product')->get();
        return view('backEnd/Report/EmployeeInfor',['employees'=>$employees]);
    }
}
