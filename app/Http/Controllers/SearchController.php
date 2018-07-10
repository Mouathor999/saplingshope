<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
 public function SearchAllproduct(Request $request,$query){

     if($query!=''){
//        $data= DB::select(" select pr.id as product_id, (SELECT im.image WHERE im.product_id = pr.id LIMIT 1) as pro_image from product as pr INNER JOIN image as im ON pr.id = im.product_id WHERE pro_name LIKE '%$query%' GROUP BY pr.id");

         $data= DB::select("select * from product WHERE pro_name LIKE '%$query%'");
         return response()->json($data);
     }else{
         return response()->json('Empty');
     }
 }

   public function SpecificSearch(Request $request){
     $search = $request->term;
     $products = Product::with('productimage')-> where('pro_name','LIKE','%'.$search.'%')
         ->orWhere('sale_price','LIKE','%'.$search.'%')
         ->get();


     $data = [];
     foreach ($products as $product){
         $promotion = DB::select("select prmd.promotion from `promotiondetail` as prmd WHERE prmd.product_id LIKE $product->id AND prmd.start_date<=CURRENT_DATE AND prmd.end_date>=CURRENT_DATE ");
         $data[]=[
             'id'=>$product->id,
             'value'=>$product->pro_name,
             'price'=>$product->sale_price,
             'image'=>$product->productimage[0]->image,
             'promotion'=> $promotion,
             ];
     }

     return response($data);

   }
   public function SaplingSearch(Request $request){

     $search = $request->term;
     $products = Product::with('productimage')-> where('pro_name','LIKE','%'.$search.'%')
         ->orWhere('sale_price','LIKE','%'.$search.'%')
         ->get();



     $data = [];
     foreach ($products as $product){
         $promotion = DB::select("select prmd.promotion from `promotiondetail` as prmd WHERE prmd.product_id LIKE $product->id AND prmd.start_date<=CURRENT_DATE AND prmd.end_date>=CURRENT_DATE ");
         $data[]=[
             'id'=>$product->id,
             'value'=>$product->pro_name,
             'price'=>$product->sale_price,
             'image'=>$product->productimage[0]->image,
             'promotion'=> $promotion,
             ];
     }

     return response($data);

   }




   public function AjaxAllproducts(Request $request){

       $products = Product::with('productimage')->orderBy('id')->paginate(10000);

       return response(array_flatten($products));




   }

   public function AjaxSearchProduct_Admin( Request $request ){

       $search = $request->term;
       $products = Product::with('productimage')-> where('pro_name','LIKE','%'.$search.'%')
           ->orWhere('sale_price','LIKE','%'.$search.'%')
           ->get();



       $data = [];
       foreach ($products as $product){
           $promotion = DB::select("select prmd.promotion from `promotiondetail` as prmd WHERE prmd.product_id LIKE $product->id AND prmd.start_date<=CURRENT_DATE AND prmd.end_date>=CURRENT_DATE ");
           $ptype = DB::select("select ptype.ptype_name as product_type from producttype as ptype WHERE ptype.id='".$product->product_type_id."'");
           $data[]=[
               'id'=>$product->id,
               'value'=>$product->pro_name,
               'stock'=>$product->stock,
               'product_type'=>$ptype,
               'price'=>$product->sale_price,
               'limit'=>$product->limit,
               'image'=>$product->productimage[0]->image,
               'promotion'=> $promotion,
           ];
       }

       return response($data);

   }




}
