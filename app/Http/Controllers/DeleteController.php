<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use File;
use App\ProductType;
use App\Promotion;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
   public function DelProduct($id){
       $product = Product::with('productimage')->find($id);

//       Delete product image in public/img/ directory
       for ($i=0;$i < $product->productimage->count();$i++){
//                  echo $product->productimage[$i]->image;
           $imageParth = public_path().'\\img\\'.$product->productimage[$i]->image;
           File::delete($imageParth);
       }
//       Delete product list
       $product->delete();
       return redirect()->action('ManageController@getAllProduct');
   }
   public function DelProducttype($id){
      $producttype = ProductType::find($id);
       $producttype->delete();
       return redirect()->action('ManageController@getAllProductType');
   }
   public function DelPromotion($id){
      $promotion = Promotion::find($id);
      $promotion->delete();
       return redirect()->action('ManageController@getAllPromotion');
   }
   public function DelEmployee($id){
      $employee = Employee::find($id);
       $imageParth = public_path().'\\img\\'.$employee->image;
       File::delete($imageParth);
       $employee->delete();
       return redirect()->action('ManageController@getAllEmployee');
   }
}
