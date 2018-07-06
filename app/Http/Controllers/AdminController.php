<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\ProductPicture;
use App\ProductType;
use App\Promotion;
use App\PromotionDetail;
use App\EmployeeEducation;
use App\Employee;
use App\Image;
use App\Http\Requests\SupplierRequests;
use App\Http\Requests\InsertProduct_Request;
use App\Http\Requests\EmployeeRequests;
use App\Http\Requests\ProductTypeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{

    public function AdmingetLogin(Request $request,$success=''){
        $text = $success;
        return view('backEnd/AdminLogin/AdminLoginForm',['text'=>$text]);
    }
    public function AdmingetLoginFail(Request $request,$success=''){

    }

    public function AdminPostLogin(Request $request){
        $usename = $request->input("username");
        $password = $request->input("password");

        $empInfor = Employee::all();
        $CountuserInfor = count($empInfor);
        if($CountuserInfor>=1){

           foreach ($empInfor as $emp){
//               echo $emp->emp_username." ".Crypt::decrypt($emp->password)."<br/>";
               if($emp->emp_username == $usename && $emp->password == md5($password)){
                    session(['user_id'=>$emp->id,'emp_username'=>$emp->emp_username,'password'=>$emp->password]);
                    return redirect()->route('adminPage');
               }else{

               }
           }
            return view('backEnd/AdminLogin/AdminLoginForm',["text"=>"ຊື້ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ, ກະລູນາລອງໃໜ່ອີກຄັ້ງ"]);
//            return redirect()->route('Loginfail',["text"=>"ຊື້ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ, ກະລູນາລອງໃໜ່ອີກຄັ້ງ"]);
        }else{
            return view('backEnd/AdminLogin/AdminLoginForm',["text"=>"ຊື້ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ, ກະລູນາລອງໃໜ່ອີກຄັ້ງ"]);
//            return redirect()->route('Loginfail',["text"=>"ຊື້ຜູ້ໃຊ້ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ, ກະລູນາລອງໃໜ່ອີກຄັ້ງ"]);
        }
    }


    public function AdminLogout(){
        Session::forget('user_id');
        Session::forget('emp_username');
        Session::forget('password');
        return redirect()->route('admingetLogin');
    }

    public function Admin(){
        if(Session::has('user_id')){
            return view("backEnd/AdminPage");
        }else{
            return redirect()->route('admingetLogin');
        }

    }


//    public function InsertProduct($success=null){ route Param
    public function InsertProduct(Request $request){
        if(Session::has('user_id')){
            $producttype = ProductType::all();
            $promotion = Promotion::all();
//        $getID = Product::whereRaw('pro_id = (select MAX(pro_id) from product)')->get();
//        $text=$success; // route param
            $text = $request -> query("success");
            return view("backEnd/InsertProduct",['producttype'=>$producttype,'promotion'=>$promotion,'text'=>$text]);
        }else{
            return redirect()->route('admingetLogin');
        }




    }

    public function PostInsertProduct( Request $request){
        if(Session::has('user_id')){
            $product = new Product([
                'pro_name' => $request -> input('pname'),
                'sale_price' => $request -> input('pprice'),
                'stock' => $request -> input('pamount'),
                'limit' => $request -> input('limit'),
                'product_type_id' => $request -> input('ptypeid'),
                'descript' => $request -> input('pdescription'),
            ]);
            $product->timestamps = false; // this for disable updated_at and created_at
            $product->save();

            if(!empty($request ->input('ppromotion'))){
                $promotiondetail = new PromotionDetail([
                    'promotion_id' =>$request ->input('ppromotion'),
                    'product_id' =>$request ->input('pid'),
                    'start_date' =>$request ->input('promotion_startDate'),
                    'end_date' =>$request ->input('promotion_stopDate'),
                ]);
                $promotiondetail->timestamps = false; // this for disable updated_at and created_at
                $promotiondetail ->save();
            }

            $productId = DB::select("select MAX(id) as pid from product ");
            $pId = $productId[0]->pid;

            if (Input::hasFile('pImage1')){
                $productImg1 = new ProductPicture();
                $productImg1 -> product_id = $pId;
//                  this is chang image name
                $newfileName = str_random(15).'.'.$request->file('pImage1')->getClientOriginalExtension();
//                  insert image new name into database
                $productImg1->image = $newfileName ;
                $productImg1->timestamps = false; // this for disable updated_at and created_at
                $productImg1 ->save();
                $request->file('pImage1') -> move(public_path('/img'),$newfileName);
            }


            if (Input::hasFile('pImage2')){
                $productImg2 = new ProductPicture();
                $productImg2 -> product_id = $pId;
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
                $productImg3 -> product_id = $pId;
//                 this is chang image name
                $newfileName = str_random(15).'.'.$request->file('pImage3')->getClientOriginalExtension();
//                 insert image new name into database
                $productImg3->image = $newfileName ;
                $productImg3->timestamps = false; // this for disable updated_at and created_at
                $productImg3 ->save();
                $request->file('pImage3') -> move(public_path('/img'),$newfileName);
            }
//            return redirect()->route('InsertProduct/success); //pharam
            return redirect()->action('AdminController@InsertProduct', ["success" => "1"]);
        }else{
            return redirect()->route('admingetLogin');
        }



 }


// Producttype

    public function InsertProductType(){
        if(Session::has('user_id')){
            $producttype = ProductType::all()->sortByDesc('id');
//        return $producttype->ptype_name;
            return view("backEnd/InsertProductType",['producttype'=>$producttype]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function PostInsertgProductType(ProductTypeRequest $request){
        if(Session::has('user_id')){
            $producttyp= new ProductType([
                'id'=>$request->input('ptid'),
                'ptype_name'=>$request->input('ptname')
            ]);
            $producttyp->timestamps = false; // this for disable updated_at and created_at
            $producttyp->save();
            return redirect()->action('AdminController@InsertProductType');
        }else{
            return redirect()->route('admingetLogin');
        }

    }

    public function AddEmployee($success = null){
        if(Session::has('user_id')){
            $emp_edu= EmployeeEducation::all();
            $text = $success;
//        return $emp_edu;
            return view("backEnd/AddEmployee",['emp_edus'=>$emp_edu, 'text'=>$text ]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function PostEmployee(EmployeeRequests $requests){
        if(Session::has('user_id')){
            if($requests->input('pwd')==$requests->input('Comfirm_pwd')){

                $emp = new Employee();
                $emp -> emp_username = $requests->input('uname');
                $emp -> password = md5($requests->input('Comfirm_pwd')) ;
                $emp -> emp_name = $requests->input('name');
                $emp -> emp_lastname = $requests->input('lastname');
                $emp -> gender = $requests->input('gender');
                $emp -> age = $requests->input('age');
                $emp -> emp_education_id = $requests->input('E_edu');
                $emp -> village =  $requests->input('village');
                $emp -> district = $requests->input('district');
                $emp -> province = $requests->input('province');
                $emp -> tel = $requests->input('phone');
                $emp -> email = $requests->input('email');
                $emp ->identification_card = $requests->input('identification_card');
                $emp -> description = $requests->input('description');
                $emp->timestamps = false; // this for disable updated_at and created_at
                if(Input::hasFile('img')){
//                $file = Input::file('img');

                    /* $filenameWithExtension = $requests->file('img')->getClientOriginalName();
                     $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                     $extension = $requests -> file('img')->getClientOriginalExtension();
                     $fileStore = $filename."_".time().'.'.$extension;
                     Store::disk('s3')->put($fileStore,fopen($requests->file('img'),'r+'),'public');*/


                    $file = str_random(15).'.'.$requests->file('img')->getClientOriginalExtension();
                    $emp-> image = $file;            // 'image' => Input::file('img')->getClientOriginalName(),
                    if($emp ->save()){
                        $requests->file('img') -> move(public_path('/img'),$file);
                        return redirect()->route('AddEmployeeSuccess',['success'=>"Add Employee success"]);
                    }else{
                        return back()->withErrors("Error Information saved fail") ;
                    }

                }else{
                    $emp ->save();
                }

            }else{
                return back()->withErrors(['Your Confirm password not match']);
            }
        }else{
            return redirect()->route('admingetLogin');
        }

    }


//    Supplier
    public function AddSupplier($success = null){
        if(Session::has('user_id')){
            $text = $success;
            return view("backEnd/AddSupplier",['text'=>$text]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }

    public function PostSupplier(SupplierRequests $requests){
        if(Session::has('user_id')){
            $supplier = new Supplier();
            $supplier->id = $requests->input('shopID');
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
            return redirect()->route('AddSupplierSuccess',['success'=>"Add Employee success"]);
        }else{
            return redirect()->route('admingetLogin');
        }


    }





    public function ImportProduct(){
        if(Session::has('user_id')){
            return view("backEnd/ImportProduct");
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function ImportConfirm(){
        if(Session::has('user_id')){
            return view("backEnd/ImportConfirm");
        }else{
            return redirect()->route('admingetLogin');
        }

    }

//    Promotion route

    public function AddPromotion(){
        if(Session::has('user_id')){
            $promotion = Promotion::all();
            return view("backEnd/AddPromotion",['promotion'=>$promotion]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function PostAddPromotion(Request $request){
        if(Session::has('user_id')){
            $promotion =new Promotion([
                'id' => $request->input('promotion_id'),
                'promotion' => $request->input('promotion'),
            ]);
            $promotion->timestamps = false; // this for disable updated_at and created_at
            $promotion -> save();
            return redirect()->action('AdminController@AddPromotion');
        }else{
            return redirect()->route('admingetLogin');
        }

    }

}
