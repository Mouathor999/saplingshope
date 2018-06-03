<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Product;
use App\ProductLevel;
use App\ProductPicture;
use App\ProductType;
use App\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        if($request -> input('ppromotion')!= ""){
            $CheckPromotion = Product::find($id)->promotion()->wherePivot('product_id','=',$id)->wherePivot('promotion_id','=',$request->Input('ppromotion'))->orderBy('id')->paginate(10);
//            return $CheckPromotion[0]->pivot->end_date;
           if($CheckPromotion-> count() >= 1 ){
               if($CheckPromotion[0]->pivot->end_date >= $request-> Input('promotion_stopDate')){

               }else{
                   $product ->promotion()->attach($id,['start_date'=>$request-> Input('promotion_startDate'),'end_date'=>$request-> Input('promotion_stopDate')]);
               }

            }else{
                $promotion = $request -> input('ppromotion');
                $startDate = $request -> input('promotion_startDate');
                $endDate = $request -> input('promotion_stopDate');
                DB::insert("INSERT INTO `promotiondetail` (`id`, `promotion_id`, `product_id`, `start_date`, `end_date`) VALUES (NULL, '".$promotion."', '".$id."', '".$startDate."', '".$endDate."')");
                return redirect()->action('ManageController@getAllProduct');
            }
        }
        else
        {

        }

        if (Input::hasFile('pImage1')){
            $productImg1 = new ProductPicture();
            $productImg1 -> product_id = $id;
//                this is chang image name
            $newfileName = str_random(15).'.'.$request->file('pImage1')->getClientOriginalExtension();
//                insert image new name into database
            $productImg1->image = $newfileName ;
            $productImg1->timestamps = false; // this for disable updated_at and created_at

            $productImg1 ->save();
            $request->file('pImage1') -> move(public_path('/img'),$newfileName);
        }
         if (Input::hasFile('pImage2')){
            $productImg2 = new ProductPicture();
            $productImg2 -> product_id = $id;
//                this is chang image name
            $newfileName = str_random(15).'.'.$request->file('pImage2')->getClientOriginalExtension();
//                insert image new name into database
            $productImg2->image = $newfileName ;
            $productImg2->timestamps = false; // this for disable updated_at and created_at
            $productImg2 ->save();
            $request->file('pImage2') -> move(public_path('/img'),$newfileName);
        }
         if (Input::hasFile('pImage3')){
            $productImg3 = new ProductPicture();
            $productImg3 -> product_id = $id;
//                this is chang image name
            $newfileName = str_random(15).'.'.$request->file('pImage3')->getClientOriginalExtension();
//                insert image new name into database
            $productImg3->image = $newfileName ;
            $productImg3->timestamps = false; // this for disable updated_at and created_at
            $productImg3 ->save();
            $request->file('pImage3') -> move(public_path('/img'),$newfileName);
        }
        return redirect()->action('ManageController@getAllProduct');

//         $product -> save();


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
               $imgDel = File::delete(public_path().'/img'.$employee->image); // Delete image
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
            return "No image selected";
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
    public function DeletePromotion($id){
        $promotion = Promotion::find($id);
        $promotion -> delete();
        return redirect()->action('ManageController@getAllPromotion');
    }


}
