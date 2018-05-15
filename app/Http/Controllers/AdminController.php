<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductPicture;
use App\ProductType;
use App\ProductLevel;
use App\Promotion;
use App\PromotionDetail;
use App\EmployeeEducation;
use App\Employee;
use App\Http\Requests\SupplierRequests;
use App\Http\Requests\InsertProduct_Request;
use App\Http\Requests\EmployeeRequests;
use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;


class AdminController extends Controller
{


    public function Admin(){
        return view("backEnd/AdminPage");
    }

//    Manage Information
    public function ManageProduct(){
        return view("backEnd/ManageInfor/AllProduct");
    }
    public function ManageProductType(){
        return view('backEnd/ManageInfor/ManageProductType');
    }
    public function ManagePromotion(){
        return view('backEnd/ManageInfor/ManagePromotion');
    }
    public function ManageEmployee(){
        return view('backEnd/ManageInfor/ManageEmployee');
    }
    public function ManageSupplier(){
        return view('backEnd/ManageInfor/ManageSupplier');
    }

//Product

//    public function InsertProduct($success=null){ route Param
    public function InsertProduct(Request $request){
        $producttype = ProductType::all();
        $level = ProductLevel::all();
        $promotion = Promotion::all();
//        $getID = Product::whereRaw('pro_id = (select MAX(pro_id) from product)')->get();
//        $text=$success; // route param
        $text=$request -> query("success");
        return view("backEnd/InsertProduct",['producttype'=>$producttype,'level'=>$level,'promotion'=>$promotion,'text'=>$text]);
    }

    public function PostInsertProduct( Request $request){
//            Check that product table has data or not
/*        $results = DB::select("select MAX(pro_id) as p_id from product");

            if(count($results) >= 1){
                $findID = Product::find(1);

            }
            else{
                return "Have not data in database";
            }*/

            $product = new Product([
                'pro_id' => $request -> input('pid'),
                'pro_name' => $request -> input('pname'),
                'ptype_id' => $request -> input('ptypeid'),
                'level_id' => $request -> input('plevel'),
                'sale_price' => $request -> input('pprice'),
                'stock' => $request -> input('pamount'),
                'descript' => $request -> input('pdescription'),
                'limit' => $request -> input('limit'),
            ]);
            $product->timestamps = false; // this for disable updated_at and created_at
            $product->save();

            if(!empty($request ->input('ppromotion'))){
                $promotiondetail = new PromotionDetail([
                    'promotion_id' =>$request ->input('ppromotion'),
                    'pro_id' =>$request ->input('pid'),
                    'start_date' =>$request ->input('promotion_startDate'),
                    'end_date' =>$request ->input('promotion_stopDate'),
                ]);
                $promotiondetail->timestamps = false; // this for disable updated_at and created_at
                $promotiondetail ->save();
            }
            $productImg1 = new ProductPicture();
            $productImg1 -> pro_id = Input::get("pid");
            if (Input::hasFile('pImage1')){


                /* $file1 = Input::file("pImage1");
                  $productImg1->image = $file1->getClientOriginalName();
                  $file1 -> move(public_path('/img'),$file1->getClientOriginalName());
                $productImg1->timestamps = false; // this for disable updated_at and created_at
                $productImg1 ->save();*/



//         this is chang image name
                $newfileName = str_random(15).'.'.$request->file('pImage1')->getClientOriginalExtension();
//         insert image new name into database
                $productImg1->image = $newfileName ;
                $productImg1->timestamps = false; // this for disable updated_at and created_at
                $productImg1 ->save();
                $request->file('pImage1') -> move(public_path('/img'),$newfileName);
            }



            $productImg2 = new ProductPicture();
            $productImg2 -> pro_id = Input::get('pid');
            if (Input::hasFile('pImage2')){
               /* $file2 = Input::file('pImage2');
                $productImg2->image = $file2->getClientOriginalName();
                $file2 -> move(public_path('/img'),$file2->getClientOriginalName());
                $productImg2->timestamps = false; // this for disable updated_at and created_at
                $productImg2 ->save();*/


//         this is chang image name
                $newfileName = str_random(15).'.'.$request->file('pImage2')->getClientOriginalExtension();
//         insert image new name into database
                $productImg2->image = $newfileName ;
                $productImg2->timestamps = false; // this for disable updated_at and created_at
                $productImg2 ->save();
                $request->file('pImage2') -> move(public_path('/img'),$newfileName);
            }


            $productImg3 = new ProductPicture();
            $productImg3 -> pro_id = Input::get('pid');
            if (Input::hasFile('pImage3')){
               /* $file3 = Input::file('pImage3');
                $productImg3->image = $file3->getClientOriginalName();
                $file3 -> move(public_path('/img'),$file3->getClientOriginalName());
                $productImg3->timestamps = false; // this for disable updated_at and created_at
                $productImg3 ->save();*/


//         this is chang image name
                $newfileName = str_random(15).'.'.$request->file('pImage3')->getClientOriginalExtension();
//         insert image new name into database
                $productImg3->image = $newfileName ;
                $productImg3->timestamps = false; // this for disable updated_at and created_at
                $productImg3 ->save();
                $request->file('pImage3') -> move(public_path('/img'),$newfileName);
            }
//            return redirect()->route('InsertProduct/success); //pharam
            return redirect()->action('AdminController@InsertProduct', ["success" => "1"]);


 }


// Producttype

    public function InsertProductType(){
        $producttype = ProductType::all();
        return view("backEnd/InsertProductType",['producttype'=>$producttype]);
    }
    public function PostInsertgProductType(ProductTypeRequest $request){
        $producttyp= new ProductType([
            'ptype_id'=>$request->input('ptid'),
            'ptype_name'=>$request->input('ptname')
        ]);
        $producttyp->timestamps = false; // this for disable updated_at and created_at
        $producttyp->save();
        return redirect()->action('AdminController@InsertProductType');
    }

    public function AddEmployee($success = null){
        $emp_edu= EmployeeEducation::all();
        $text = $success;
        return view("backEnd/AddEmployee",['emp_edus'=>$emp_edu, 'text'=>$text ]);
    }
    public function PostEmployee(EmployeeRequests $requests){
        if($requests->input('pwd')==$requests->input('Comfirm_pwd')){
            if(Input::hasFile('img')){
                $file = Input::file('img');
                $emp = new Employee([
                    'emp_id' =>$requests->input('uid'),
                    'emp_username' =>$requests->input('uname'),
                    'password' =>Crypt::encrypt($requests->input('Comfirm_pwd')),
                    'emp_name' =>$requests->input('name'),
                    'emp_lastname' =>$requests->input('lastname'),
                    'gender' =>$requests->input('gender'),
                    'age' =>$requests->input('age'),
                    'edu_id' =>$requests->input('E_edu'),
                    'village' =>$requests->input('village'),
                    'district' =>$requests->input('district'),
                    'province' =>$requests->input('province'),
                    'tel' =>$requests->input('phone'),
                    'email' =>$requests->input('identification_card'),
                    'identification_card' =>$requests->input('identification_card'),
                    'image' => $file->getClientOriginalName(),            // 'image' => Input::file('img')->getClientOriginalName(),
                    'description' =>$requests->input('description'),
                ]);
                $emp->timestamps = false; // this for disable updated_at and created_at
                if($emp ->save()){
                    $file -> move(public_path("/img"),$file->getClientOriginalName());
                    return redirect()->route('AddEmployeeSuccess',['success'=>"Add Employee success"]);
                }else{
                  return back()->withErrors("Error Information saved fail") ;
                }

            }

        }else{
            return back()->withErrors(['Your Confirm password not match']);
        }

    }


//    Supplier
    public function AddSupplier(){
        return view("backEnd/AddSupplier");
    }

    public function PostSupplier(SupplierRequests $requests){
        $supplier = new Supplier();
        $supplier->sup_id = $requests->input('shopID');
        $supplier->shop_name = $requests->input('shopname');
        $supplier->sup_name = $requests->input('supname');
        $supplier->lastname = $requests->input('lastname');
        $supplier->village = $requests->input('village');
        $supplier->district = $requests->input('district');
        $supplier->province = $requests->input('province');
        $supplier->country = $requests->input('country');
        $supplier->tel = $requests->input('tel');
        $supplier->email = $requests->input('email');
        $supplier->bankAccount = $requests->input('baccount');
        $supplier->timestamps= false;
        $supplier->save();
    }










    public function UserLogin(){
        return view("backEnd/UserLogin");
    }
    public function ImportProduct(){
        return view("backEnd/ImportProduct");
    }
    public function ImportConfirm(){
        return view("backEnd/ImportConfirm");
    }

//    Promotion route

    public function AddPromotion(){
        $promotion = Promotion::all();
        return view("backEnd/AddPromotion",['promotion'=>$promotion]);
    }
    public function PostAddPromotion(Request $request){
        $promotion =new Promotion([
            'promotion_id' => $request->input('promotion_id'),
            'promotion' => $request->input('promotion'),
        ]);
        $promotion->timestamps = false; // this for disable updated_at and created_at
        $promotion -> save();
        return redirect()->action('AdminController@AddPromotion');
    }

}
