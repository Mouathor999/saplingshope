<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductType;
use App\Promotion;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function getAllProduct(){
//        $leeproduct = DB::select(" SELECT product.pro_id as id, product.pro_name as name, product.sale_price as pricem,image.pimg_id as img_id , image.image as image FROM product LEFT JOIN image ON image.pro_id= product.pro_id ");
//        SELECT product.pro_id as id, product.pro_name as name, product.sale_price as pricem,producttype.ptype_name as ptype FROM product LEFT JOIN producttype ON producttype.ptype_id= product.ptype_id

          $products = Product::with('Producttype')->with('productimage')->with('productlevel')->with('promotion')->paginate(10);

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
        return view('backEnd/ManageInfor/ManageSupplier');
    }
}
