<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeEducation;
use App\Product;
use App\ProductLevel;
use App\ProductType;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
   public function EditProduct($id){
       $product= Product::with('promotion')->where('id',$id)->orderBy('id')->paginate(10);
       $type  = ProductType::all();
       $promotion = Promotion::all();
       $plevel = ProductLevel::all();
       $productAndimage = Product::with('productimage')->where('id',$id)->orderBy('id')->paginate(10);


//    return $product;

//      return view('backEnd/ManageInfor/EditForm/EditProduct');

        return view('backEnd/ManageInfor/EditForm/EditProduct',
         [
             'products' => $product,
             'producttype' => $type,
             'levels' => $plevel,
             'promotions' => $promotion,
             'product_images'=>$productAndimage
             ]);


   }

   public function EditProductLimit($id){
        $product = Product::find($id);
       return view('backEnd/ManageInfor/EditForm/EditProductLimit',['Product'=>$product]);
   }
   public function EditProducttype($id){
       $Ptypes= ProductType::find($id);
       return view('backEnd/ManageInfor/EditForm/EditProductType',['Ptypes'=>$Ptypes]);
   }
   public function EditPromotion($id){
       $Ptypes= Promotion::find($id);
       return view('backEnd/ManageInfor/EditForm/EditPromotion',['Ptypes'=>$Ptypes]);
   }

   public function EditEmployee($id){
       $emp_infor = Employee::find($id);
       $emp_education = EmployeeEducation::all();
       return view('backEnd/ManageInfor/EditForm/EditEmployee',['EMPinfor'=>$emp_infor,'EMPeducations'=>$emp_education]);

   }

}
