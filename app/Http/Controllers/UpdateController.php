<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UpdateController extends Controller
{
    public function UpdateProduct(Request $request,$id){
        $product = Product::find($id);
        $product -> pro_name         = $request-> Input('pname');
        $product -> sale_price       = $request-> Input('pprice');
        $product -> stock            = $request-> Input('pamount');
        $product -> limit            = $request-> Input('limit');
        $product -> product_type_id  = $request-> Input('ptypeid');
        $product -> product_level_id = $request-> Input('plevel');
        $product -> descript         = $request-> Input('pdescription');
        $product -> timestamps       = false; // this for disable updated_at and created_at


//        Check if has any promotion in current product's

         $CheckPromotion = Product::find($id)->promotion()->wherePivot('product_id','=',$id)->wherePivot('promotion_id','=',$request->Input('ppromotion'))->orderBy('id')->paginate(10);
         $promotionList  = $CheckPromotion-> count();
         if($promotionList = 1 ){
             $product ->promotion()->attach($id,['start_date'=>$request-> Input('promotion_startDate'),'end_date'=>$request-> Input('promotion_stopDate')]);
         }else{
             echo "Empty";
         }

        /*$product ->promotion()->attach($id,['start_date'=>$request-> Input('promotion_startDate'),'end_date'=>$request-> Input('promotion_startDate')]);
        $product -> save();*/
//       return $products;


    }
}
