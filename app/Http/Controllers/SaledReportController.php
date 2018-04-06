<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaledReportController extends Controller
{
    public function SaledReport(){
        return view('backEnd/Report/SaleReport');
    }
}
