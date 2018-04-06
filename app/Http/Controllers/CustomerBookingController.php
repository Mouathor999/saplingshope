<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerBookingController extends Controller
{
    public function CusBooking(){
        return view('backEnd/CustomerOrder/CustomerBooking');
    }
}
