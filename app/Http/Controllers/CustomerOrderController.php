<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerOrderController extends Controller
{
    public function CusOrder(){
        return view('backEnd/CustomerOrder/CustomerOrder');
    }
    public function OrderDetail(){
        return view('backEnd/CustomerOrder/CustomerOrderDetail');
    }


}
