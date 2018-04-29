<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){
        return view("backEnd/AdminPage");
    }

//    Manage Information
    public function ManageProduct(){
        return view("backEnd/ManageInfor/AllProduct");
    }
    public function ManageProductType(){
        return view('backEnd/ManageInfor/ManageProductType');
    }
    public function ManagePromotion(){
        return view('backEnd/ManageInfor/ManagePromotion');
    }
    public function ManageEmployee(){
        return view('backEnd/ManageInfor/ManageEmployee');
    }
    public function ManageSupplier(){
        return view('backEnd/ManageInfor/ManageSupplier');
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
