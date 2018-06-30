<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductType;
use App\Promotion;
use App\Supplier;
use Illuminate\Http\Request;
use Session;

class ManageController extends Controller
{
    public function getAllProduct(){
        if(Session::has('user_id')){
            $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(1000);
            return view("backEnd/ManageInfor/AllProduct",['products'=>$products]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }

    public function getAllProductType(){
        if(Session::has('user_id')){
            $producttype = ProductType::all();
            return view('backEnd/ManageInfor/ManageProductType',['producttype' => $producttype]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }


    public function getAllPromotion(){
        if(Session::has('user_id')){
            $promotion = Promotion::all();
            return view('backEnd/ManageInfor/ManagePromotion',['promotions'=>$promotion]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }


    public function getAllEmployee(){
        if(Session::has('user_id')){
             $employees = Employee::with('education')->orderBy('id')->paginate(10);
        return view('backEnd/ManageInfor/ManageEmployee',['employees'=>$employees]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }


    public function AllSupplier(){
        if(Session::has('user_id')){
            $suppliers = Supplier::all();
            return view('backEnd/ManageInfor/ManageSupplier',['suppliers'=>$suppliers]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }
}
