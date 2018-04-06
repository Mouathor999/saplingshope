<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allproduct(){
        return view("backEnd/AllProduct");
    }
    public function InsertProduct(){
        return view("backEnd/InsertProduct");
    }
    public function InsertProductType(){
        return view("backEnd/InsertProductType");
    }
    public function AddEmployee(){
        return view("backEnd/AddEmployee");
    }
    public function AddSupplier(){
        return view("backEnd/AddSupplier");
    }
    public function UserLogin(){
        return view("backEnd/UserLogin");
    }
    public function ImportProduct(){
        return view("backEnd/ImportProduct");
    }
    public function ImportConfirm(){
        return view("backEnd/ImportConfirm");
    }
    public function AddPromotion(){
        return view("backEnd/AddPromotion");
    }

}
