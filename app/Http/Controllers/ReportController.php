<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function ReportEmpWork(){
        return view('backEnd/Report/EmployeeWork');
    }
    public function EmployeeInfor(){
        return view('backEnd/Report/EmployeeInfor');
    }
}
