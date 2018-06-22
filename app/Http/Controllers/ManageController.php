<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductType;
use App\Promotion;
use App\Supplier;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function getAllProduct(){
          $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(1000);
          return view("backEnd/ManageInfor/AllProduct",['products'=>$products]);
    }

    public function getAllProductType(){
        $producttype = ProductType::all();
        return view('backEnd/ManageInfor/ManageProductType',['producttype' => $producttype]);
    }


    public function getAllPromotion(){
        $promotion = Promotion::all();
        return view('backEnd/ManageInfor/ManagePromotion',['promotions'=>$promotion]);
    }


    public function getAllEmployee(){
        $employees = Employee::with('education')->orderBy('id')->paginate(10);
        return view('backEnd/ManageInfor/ManageEmployee',['employees'=>$employees]);
    }


    public function AllSupplier(){
        $suppliers = Supplier::all();
        return view('backEnd/ManageInfor/ManageSupplier',['suppliers'=>$suppliers]);
    }
}
