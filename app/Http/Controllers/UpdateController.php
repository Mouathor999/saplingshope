<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductLevel;
use App\ProductPicture;
use App\ProductType;
use App\Promotion;
use App\PromotionDetail;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use File;
use Session;

class UpdateController extends Controller
{
    public function UpdateProduct(Request $request,$id){

        if(Session::has('user_id')){

            $product = Product::find($id);
            $product -> pro_name         = $request-> Input('pname');
            $product -> sale_price       = $request-> Input('pprice');
            $product -> stock            = $request-> Input('pamount');
            $product -> limit            = $request-> Input('limit');
            $product -> product_type_id  = $request-> Input('ptypeid');
            $product -> descript         = $request-> Input('pdescription');
            $product -> timestamps       = false; // this for disable updated_at and created_at
            $product->save();
//        Check if has any promotion in current product's
            if($request -> input('ppromotion')!=""){
                $product_Promotion = PromotionDetail::all()->where('product_id','=',$id);
                    if($product_Promotion->count()!=0){
                        if(count($product_Promotion)>1){
                            $product_Promotion_toarr = array_flatten($product_Promotion);
                            for ($i=0;$i<count($product_Promotion_toarr);$i++){
//                                                    return array_flatten($product_Promotion);
//                                                    return count($product_Promotion);


//                                Check if promotion end_date in database biger then promotion_stopDate from Form
                                if($product_Promotion_toarr[$i]->end_date >= $request->Input('promotion_stopDate')){

                                    $CheckPromotion = Product::find($id)->promotion()->wherePivot('product_id','=',$id)->wherePivot('end_date','>=',date('Y-m-d'))->orderBy('id')->paginate(10);
    //                                                    return $CheckPromotion[0]->pivot->end_date;
    //                                                    return $CheckPromotion-> count();
                                    if(count($CheckPromotion) == 1 ){
                                        $Promotion = DB::select("select promotion from promotion where id='".$request->Input('ppromotion')."'");
                                         $pPromotion = $Promotion[0]->promotion;

                                         DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='$pPromotion',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id  AND end_date >= CURRENT_DATE()");
//                                        return redirect()->action('ManageController@getAllProduct');
//                                        return "Update success while product_id has many row in promotiondetail";

                                     }else{
                                         $promotion = $request -> input('ppromotion');
                                         $startDate = $request -> input('promotion_startDate');
                                         $endDate = $request -> input('promotion_stopDate');
                                         $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");

                                         DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`,`promotion`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."','".$promotionId[0]->promotion."', '".$startDate."', '".$endDate."')");

//                                         return redirect()->action('ManageController@getAllProduct');
//                                         return "Insert success step 2";
                                       }

                                }else{

                                 }
                            }

//                            return "sotp_date from Form loger then all end_date in the database";

//                            if post promotion_stopDate biger then every promotion it will work at this statment

                            $checkToAddNew_promotion = DB::select("SELECT * FROM promotiondetail   WHERE product_id=$id  AND end_date>='".date('Y-m-d')."'");
                            if(count($checkToAddNew_promotion)==1){
                                $Promotion = DB::select("select promotion from promotion where id='".$request->Input('ppromotion')."'");
                                $pPromotion = $Promotion[0]->promotion;
                                DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='$pPromotion',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id  AND end_date >= CURRENT_DATE()");
//                                return redirect()->action('ManageController@getAllProduct');
//                                return "update while sotp_date from Form loger then all end_date in the database ";
                            }

                            else{
                                $promotion = $request -> input('ppromotion');
                                $startDate = $request -> input('promotion_startDate');
                                $endDate = $request -> input('promotion_stopDate');
                                $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");

                                DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`,`promotion`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."','".$promotionId[0]->promotion."', '".$startDate."', '".$endDate."')");
//                                return redirect()->action('ManageController@getAllProduct');
//                                return "Insert while sotp_date from Form loger then all end_date in the database ";
                            }

                        }else{
                           $product_Promotion_toarr= array_flatten($product_Promotion);
                            for ($i=0;$i<count($product_Promotion_toarr);$i++){
            //                                                    return array_flatten($product_Promotion);
//                                                                return $product_Promotion_toarr;


//                                Check if promotion end_date in database biger then promotion_stopDate from Form
                                    if($product_Promotion_toarr[$i]->end_date >= $request->Input('promotion_stopDate')){
                                      $CheckPromotion = DB::select("SELECT * FROM promotiondetail WHERE product_id='".$id."' AND end_date >= '".date('Y-m-d')."' ");
//                                          return count($CheckPromotion);
                                        if(count($CheckPromotion) == 1 ){
                                             $Promotion = DB::select("select promotion from promotion where id='".$request->Input('ppromotion')."'");
                                             $pPromotion = $Promotion[0]->promotion;

                                             DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='$pPromotion',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id  AND end_date >= CURRENT_DATE()");
//                                             return redirect()->action('ManageController@getAllProduct');
//                                             return "Update success";

                                         }else{

                                             $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");

                                             $a = DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='".$promotionId[0]->promotion."',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id AND end_date >= CURRENT_DATE()");
//
                                            if($a){
//                                                return redirect()->action('ManageController@getAllProduct');
                                            }else{
                                                return "Fail in update while product_id in promoriondetail has 1 row";
                                            }
                                         }
                                    }else{

                                 }
                            }


//                            if post promotion_stopDate biger then every promotion it will work at this statment

                            $checkToAddNew_promotion = DB::select("SELECT * FROM promotiondetail   WHERE product_id=$id  AND end_date>='".date('Y-m-d')."'");
                            if(count($checkToAddNew_promotion)==1){
                                $Promotion = DB::select("select promotion from promotion where id='".$request->Input('ppromotion')."'");
                                $pPromotion = $Promotion[0]->promotion;
                                DB::update("UPDATE promotiondetail SET promotion_id = '".$request->Input('ppromotion')."',product_id = $id,promotion='$pPromotion',start_date='".$request->Input('promotion_startDate')."',end_date='".$request->Input('promotion_stopDate')."'   WHERE product_id=$id  AND end_date >= CURRENT_DATE()");
//                                return redirect()->action('ManageController@getAllProduct');
//                                return "update while sotp_date from Form loger then all end_date in the database ";
                            }else{
                                $promotion = $request -> input('ppromotion');
                                $startDate = $request -> input('promotion_startDate');
                                $endDate = $request -> input('promotion_stopDate');
                                $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");

                                DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`,`promotion`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."','".$promotionId[0]->promotion."', '".$startDate."', '".$endDate."')");
//                                return redirect()->action('ManageController@getAllProduct');
//                                return "Insert while sotp_date from Form loger then all end_date in the database ";


                            }
                        }
                    }else{
                        $promotion = $request -> input('ppromotion');
                        $startDate = $request -> input('promotion_startDate');
                        $endDate = $request -> input('promotion_stopDate');
                        $promotionId = DB::select("select promotion from promotion where id = '".$request->Input('ppromotion')."'");
                        DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`,`promotion`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."','".$promotionId[0]->promotion."', '".$startDate."', '".$endDate."')");
//                        return redirect()->action('ManageController@getAllProduct');
//                        return "Insert success step 1";
                    }
            }else {

            }

            $productAndimage = Product::with('productimage')->where('id',$id)->orderBy('id')->paginate(100);
//                Below ia product and product image
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
            return redirect()->action('ManageController@getAllProduct');
        }else{
            return redirect()->route('admingetLogin');
        }
    }


    public function UpdateProductLimit(Request $request,$id){

        if(Session::has('user_id')){
            $product = Product::find($id);

            $product -> limit = $request->Input('Plimit');
            $product -> timestamps = false;
            $product -> save();
            return redirect()->action('ManageController@getAllProduct');
        }else{
            return redirect()->route('admingetLogin');
        }
    }

    public function UpdateEmployee( Request $request, $id){
        if(Session::has('user_id')){
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
        }else{
            return redirect()->route('admingetLogin');
        }



    }

    public function UpdateProductType(Request $request, $id){
        if(Session::has('user_id')){
            $Ptype = ProductType::find($id);
            $Ptype->ptype_name = $request->Input('ptname');
            $Ptype -> timestamps = false;
            $Ptype->save();
            return redirect()->action('ManageController@getAllProductType');
        }else{
            return redirect()->route('admingetLogin');
        }

    }

    public function UpdatePromotion(Request $request,$id){
        if(Session::has('user_id')){
            $promotion = Promotion::find($id);
            $promotion -> promotion = $request->input('promotion');
            $promotion -> timestamps= false;
            $promotion -> save();
            return redirect()->action('ManageController@getAllPromotion');
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function UpdateSupplier(Request $request,$id){
        if(Session::has('user_id')){

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
        }else{
            return redirect()->route('admingetLogin');
        }
    }



}
