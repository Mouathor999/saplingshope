<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductLevel;
use App\ProductPicture;
use App\ProductType;
use App\Promotion;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;

class UpdateController extends Controller
{
    public function UpdateProduct(Request $request,$id){
        $product = Product::find($id);
        $product -> pro_name         = $request-> Input('pname');
        $product -> sale_price       = $request-> Input('pprice');
        $product -> stock            = $request-> Input('pamount');
        $product -> limit            = $request-> Input('limit');
        $product -> product_type_id  = $request-> Input('ptypeid');
        $product -> descript         = $request-> Input('pdescription');
        $product -> timestamps       = false; // this for disable updated_at and created_at

//        Check if has any promotion in current product's
        if($request -> input('ppromotion')!=""){

            $CheckPromotion = Product::find($id)->promotion()->wherePivot('product_id','=',$id)->wherePivot('promotion_id','=',$request->Input('ppromotion'))->orderBy('id')->paginate(10);
//            return $CheckPromotion[0]->pivot->end_date;
           if($CheckPromotion-> count() >= 1 ){
               if( $request-> Input('promotion_stopDate') >= $CheckPromotion[0]->pivot->end_date){

                   $Promotion = DB::select("select promotion from promotion where id='".$request->Input('ppromotion')."'");
                    $pPromotion = $Promotion[0]->promotion;
                   DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='$pPromotion',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id AND promotion_id='".$request->Input('ppromotion')."' AND end_date >= CURRENT_DATE()");
               }
               else if($request-> Input('promotion_stopDate') < $CheckPromotion[0]->pivot->end_date){
                   DB::update("UPDATE promotiondetail SET promotion_id='".$request->Input('ppromotion')."',product_id = $id,promotion=(select promotion from promotion where id='".$request->Input('ppromotion')."'),start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id AND promotion_id='".$request->Input('ppromotion')."' AND end_date >= CURRENT_DATE()");
               }else{
                  $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");
                  $product ->promotion()->attach($id,['start_date'=>$request-> Input('promotion_startDate'),'end_date'=>$request-> Input('promotion_stopDate'),'promotion'=>$promotionId[0]->promotion]);
               }

            }else{
                $promotion = $request -> input('ppromotion');
                $startDate = $request -> input('promotion_startDate');
                $endDate = $request -> input('promotion_stopDate');
               $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");

               DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`,`promotion`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."','".$promotionId[0]->promotion."', '".$startDate."', '".$endDate."')");
//                return redirect()->action('ManageController@getAllProduct');


            }
        }
        else {

        }

        $productAndimage = Product::with('productimage')->where('id',$id)->orderBy('id')->paginate(100);
//        Below ia product and product image
        $productImg = Product::with('productimage')->where('id','=',$id)->orderBy('id')->paginate(100);
        if (Input::hasFile('pImage1')){
//                this is chang image name
            $newfileName = str_random(15).'.'.$request->file('pImage1')->getClientOriginalExtension();

            foreach($productAndimage as $imageList){
//                return  $imageList;
                if($imageList->productimage->count()>=1){
                       if( !Empty($imageList->productimage[0])){
                           $imgid = $imageList->productimage[0]->id;
                           $imageParth = public_path().'\\img\\'.$productImg[0]->productimage[0]->image;
                           File::delete($imageParth);
                           DB::update("UPDATE image SET image ='$newfileName' WHERE product_id=$id AND id = $imgid ");
                       }else{
                           DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                       };

                }else{
                    DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                }

            }
            $request->file('pImage1') -> move(public_path('/img'),$newfileName);
        }

         if (Input::hasFile('pImage2')){

//                this is chang image name
             $newfileName = str_random(15).'.'.$request->file('pImage2')->getClientOriginalExtension();

             foreach($productAndimage as $imageList){
//                return  $imageList;
                 if($imageList->productimage->count()>=1){
                     if( !Empty($imageList->productimage[1])){
                         $imgid = $imageList->productimage[1]->id;
                         $imageParth = public_path().'\\img\\'.$productImg[0]->productimage[1]->image;
                         File::delete($imageParth);
                         DB::update("UPDATE image SET image ='$newfileName' WHERE product_id=$id AND id = $imgid ");
                     }else{
                         DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                     };

                 }else{
                     DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                 }

             }



             $request->file('pImage2') -> move(public_path('/img'),$newfileName);


         }
         if (Input::hasFile('pImage3')){

//                this is chang image name
             $newfileName = str_random(15).'.'.$request->file('pImage3')->getClientOriginalExtension();

             foreach($productAndimage as $imageList){
//                return  $imageList;
                 if($imageList->productimage->count()>=1){
                     if( !Empty($imageList->productimage[2])){
                         $imgid = $imageList->productimage[2]->id;
                         $imageParth = public_path().'\\img\\'.$productImg[0]->productimage[2]->image;
                         File::delete($imageParth);
                         DB::update("UPDATE image SET image ='$newfileName' WHERE product_id=$id AND id = $imgid ");
                     }else{
                         DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                     };

                 }else{
                     DB::insert("INSERT INTO image(product_id, image ) VALUES ($id,'$newfileName')");
                 }

             }
             $request->file('pImage3') -> move(public_path('/img'),$newfileName);

         }
        $product->save();
        return redirect()->action('ManageController@getAllProduct');
    }







    public function UpdateProductLimit(Request $request,$id){
        $product = Product::find($id);

        $product -> limit = $request->Input('Plimit');
        $product -> timestamps = false;
        $product -> save();
        return redirect()->action('ManageController@getAllProduct');
    }

    public function UpdateEmployee( Request $request, $id){

        $employee = Employee::find($id);
        $employee->emp_name = $request->Input('name');
        $employee->emp_lastname = $request->Input('lastname');
        $employee->gender = $request->Input('gender');
        $employee->age = $request->Input('age');
        $employee->village = $request->Input('village');
        $employee->district = $request->Input('district');
        $employee->province = $request->Input('province');
        $employee->tel = $request->Input('phone');
        $employee->email = $request->Input('email');
        $employee->identification_card = $request->Input('identification_card');
        $employee->description = $request->Input('description');
        $employee->emp_education_id = $request->Input('E_edu');
        $employee -> timestamps = false;

        if (Input::hasFile('EMPimg')){
//      this is chang image name

            $newfileName = str_random(15).'.'.$request->file('EMPimg')->getClientOriginalExtension();

//      Delete database image before add a new image

            if($employee->image != null){
               $imgDel = File::delete(public_path().'\\img\\'.$employee->image); // Delete image
               if($imgDel){
                   $employee->image = $newfileName ;
                   $employee ->save();
                   $request->file('EMPimg') -> move(public_path('/img'),$newfileName);
                   return redirect()->action('ManageController@getAllEmployee');
               }else{
                   return "delete image fail";
               }
            }else{
                $employee->image = $newfileName ;
                $employee ->save();
                $request->file('EMPimg') -> move(public_path('/img'),$newfileName);
                return redirect()->action('ManageController@getAllEmployee');
            }

        }else{
            $employee ->save();
            return redirect()->action('ManageController@getAllEmployee');
        }

    }

    public function UpdateProductType(Request $request, $id){
        $Ptype = ProductType::find($id);
        $Ptype->ptype_name = $request->Input('ptname');
        $Ptype -> timestamps = false;
        $Ptype->save();
        return redirect()->action('ManageController@getAllProductType');
    }

    public function UpdatePromotion(Request $request,$id){
        $promotion = Promotion::find($id);
        $promotion -> promotion = $request->input('promotion');
        $promotion -> timestamps= false;
        $promotion -> save();
        return redirect()->action('ManageController@getAllPromotion');
    }
    public function UpdateSupplier(Request $request,$id){
        $supplier = Supplier::find($id);
        $supplier -> shop_name  = $request->input('shopname');
        $supplier -> sup_name = $request->input('supname');
        $supplier -> lastname = $request->input('lastname');
        $supplier -> village = $request->input('village');
        $supplier -> district = $request->input('district');
        $supplier -> province = $request->input('province');
        $supplier -> country = $request->input('country');
        $supplier -> tel = $request->input('tel');
        $supplier -> email = $request->input('email');
        $supplier -> bankAccount = $request->input('bankccount');
        $supplier -> timestamps = false;
        $supplier ->save();
        return redirect()->action('ManageController@AllSupplier');
    }



}
