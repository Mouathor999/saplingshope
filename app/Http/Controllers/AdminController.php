<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductPicture;
use App\ProductType;
use App\ProductLevel;
use App\Promotion;
use App\PromotionDetail;
use Illuminate\Http\Request;
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

    public function InsertProduct(){
        $producttype = ProductType::all();
        $level = ProductLevel::all();
        $promotion = Promotion::all();
        return view("backEnd/InsertProduct",['producttype'=>$producttype,'level'=>$level,'promotion'=>$promotion]);
    }

    public function PostInsertProduct(Request $request){
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
        $promotiondetail = new PromotionDetail([
            'promotion_id' =>$request ->input('ppromotion'),
            'pro_id' =>$request ->input('pid'),
            'start_date' =>$request ->input('promotion_startDate'),
            'end_date' =>$request ->input('promotion_stopDate'),
        ]);
        $promotiondetail->timestamps = false; // this for disable updated_at and created_at
        $promotiondetail ->save();



        $productImg1 = new ProductPicture();
        $productImg1 -> pro_id = Input::get('pid');
        if (Input::hasFile('pImage1')){
            $file1 = Input::file('pImage1');
            $productImg1->image = $file1->getClientOriginalName();
            $file1 = move_uploaded_file(public_path('/img'),$file1->getClientOriginalName());
        }
        $productImg1->timestamps = false; // this for disable updated_at and created_at
        $productImg1 ->save();

        $productImg2 = new ProductPicture();
        $productImg2 -> pro_id = Input::get('pid');
        if (Input::hasFile('pImage2')){
            $file2 = Input::file('pImage2');
            $productImg2->image = $file2->getClientOriginalName();
            $file2 = move_uploaded_file(public_path('/img'),$file2->getClientOriginalName());
        }
        $productImg2->timestamps = false; // this for disable updated_at and created_at
        $productImg2 ->save();

        $productImg3 = new ProductPicture();
        $productImg3 -> pro_id = Input::get('pid');
        if (Input::hasFile('pImage3')){
            $file3 = Input::file('pImage3');
            $productImg3->image = $file3->getClientOriginalName();
            $file3 = move_uploaded_file(public_path('/img'),$file1->getClientOriginalName());
        }
        $productImg3->timestamps = false; // this for disable updated_at and created_at
        $productImg3 ->save();

return "Insert sucess";
 }


// Producttype

    public function InsertProductType(){
        $producttype = ProductType::all();
        return view("backEnd/InsertProductType",['producttype'=>$producttype]);
    }
    public function PostInsertgProductType(Request $request){
        $producttyp= new ProductType([
            'ptype_id'=>$request->input('pid'),
            'ptype_name'=>$request->input('ptname')
        ]);
        $producttyp->timestamps = false; // this for disable updated_at and created_at
        $producttyp->save();
        return redirect()->action('AdminController@InsertProductType');
    }




    public function AddEmployee(){
        return view("backEnd/AddEmployee");
    }
    public function AddSupplier(){
        return view("backEnd/AddSupplier");
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
