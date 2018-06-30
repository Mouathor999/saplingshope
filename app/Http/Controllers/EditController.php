<?php

namespace App\Http\Controllers;

use App\Employee;
use App\EmployeeEducation;
use App\Product;
use App\ProductType;
use App\Promotion;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class EditController extends Controller
{
   public function EditProduct($id){
       if(Session::has('user_id')){
           $product= Product::with('promotion')->where('id',$id)->orderBy('id')->paginate(10);
           $type  = ProductType::all();
           $promotion = Promotion::all();
           $productAndimage = Product::with('productimage')->where('id',$id)->orderBy('id')->paginate(10);

           return view('backEnd/ManageInfor/EditForm/EditProduct',
               [
                   'products' => $product,
                   'producttype' => $type,
                   'promotions' => $promotion,
                   'product_images'=>$productAndimage
               ]);
       }else{
           return redirect()->route('admingetLogin');
       }
   }

   public function EditProductLimit($id){
       if(Session::has('user_id')){
           $product = Product::find($id);
           return view('backEnd/ManageInfor/EditForm/EditProductLimit',['Product'=>$product]);
       }else{
           return redirect()->route('admingetLogin');
       }

   }
   public function EditProducttype($id){
       if(Session::has('user_id')){
           $Ptypes= ProductType::find($id);
           return view('backEnd/ManageInfor/EditForm/EditProductType',['Ptypes'=>$Ptypes]);
       }else{
           return redirect()->route('admingetLogin');
       }

   }
   public function EditPromotion($id){
       if(Session::has('user_id')){
           $Ptypes= Promotion::find($id);
           return view('backEnd/ManageInfor/EditForm/EditPromotion',['Ptypes'=>$Ptypes]);
       }else{
           return redirect()->route('admingetLogin');
       }

   }

   public function EditEmployee($id){
       if(Session::has('user_id')){
           $emp_infor = Employee::find($id);
           $emp_education = EmployeeEducation::all();
           return view('backEnd/ManageInfor/EditForm/EditEmployee',['EMPinfor'=>$emp_infor,'EMPeducations'=>$emp_education]);
       }else{
           return redirect()->route('admingetLogin');
       }


   }
   public function EditSupplier($id){
       if(Session::has('user_id')){
           $SP_infor = Supplier::find($id);
           return view('backEnd/ManageInfor/EditForm/EditSupplier',['SP_infor'=>$SP_infor]);
       }else{
           return redirect()->route('admingetLogin');
       }
   }

}
