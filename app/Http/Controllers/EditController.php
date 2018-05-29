<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductLevel;
use App\ProductType;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
   public function EditProduct($id){
       $product= Product::find($id);
       $type  = ProductType::all();
       $product_promotion = Product::with('promotion')->orderBy('id')->paginate(10);
//       $promotion = Promotion::all();
//       $currentPromotion = DB::select("SELECT * FROM promotiondetail WHERE product_id = $id ");
       $pleve = ProductLevel::all();


//    return $product_promotion;

       return view('backEnd/ManageInfor/EditForm/EditProduct',
               [
                   'p_promotions' => $product_promotion,
                   ]);




       /* return view('backEnd/ManageInfor/EditForm/EditProduct',
         [
             'product'=>$product,
             'producttype'=>$type,
             'levels'=>$pleve,
             ]);*/


   }


   public function EditEmployee($id){
       $emp_infor = Employee::find($id);
//           return $emp_infor->id." ". $emp_infor->emp_name;
       return view('backEnd/ManageInfor/EditForm/EditEmployee',['EMPinfor'=>$emp_infor]);

   }

}
