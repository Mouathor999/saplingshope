<?php

namespace App\Http\Controllers;

use App\Import;
use App\ImportDetail;
use App\Product;
use App\ProductType;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;

class ImportController extends Controller
{
    public function getLessProduct(){
        if(Session::has('user_id')){
            $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(100);
            return view("backEnd/Import/CheckLessStock",['products'=>$products]);
        }else{
            return redirect()->route('admingetLogin');
        }


    }
    public function AddProductImportAmount($id){
        if(Session::has('user_id')){
            return view("backEnd/Import/AddImportAmount",['id'=>$id]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }
    public function OrderOutForm(){

        if(Session::has('user_id')){
            $prducttype = ProductType::all();
            $suppliers = Supplier::all();
            $maxImportID = DB::select("select max(id) as maxImportID from import");
            $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(100);
//                  return $maxImportID[0]->maxImportID;
            return view("backEnd/Import/OrderOut",['products'=>$products,'producttypes'=>$prducttype,'suppliers'=>$suppliers,'maxImportID'=>$maxImportID[0]->maxImportID+1]);

        }else{
            return redirect()->route('admingetLogin');
        }
    }
    public function MyAjaxTest(Request $request){
        if(Session::has('user_id')){
            $data = $request->all(); // This will get all the request data.
            session(['OrderOutList'=>$data]);
            return response()->json("ບັນທືກຂໍ້ມູນສໍາເລັດ. ກະລູນາກົດປຸ່ມ \" ສ້າງໃບບິນ \" ເພືອສ້າງໃບບິນສັ່ງຊື້");
        }else{
            return redirect()->route('admingetLogin');
        }


    }

    public function StoreOrderOutList(Request $request){
        if(Session::has('user_id')){
            if(session('OrderOutList')['LoginUser'] != "null"){
                $Now_date = date('Y-m-d');
                $import = new Import();
                $import->import_date = $Now_date;
                $import->status = '1';
                $import->employee_id  = session('OrderOutList')['LoginUser'];
                $import-> supplier_id = session('OrderOutList')['supplier_no'];
                $import -> timestamps =false;
                $import->save();
//                insert into Importdetail
                foreach (session('OrderOutList')['detail'] as $detail){
                   DB::insert("INSERT INTO `importdetail` (`import_id`, `product_id`, `pro_name`, `quatity`, `imp_price`, `total_price`, `image`, `description`) VALUES ('".session('OrderOutList')['order_no']."', '".$detail['pro_id']."', '".$detail['pro_name']."', '".$detail['qty']."', 0, 0, '', '')");
                }


//                return session('OrderOutList')['detail'][3]['pro_name'];

                   /* Session::put('OrderOutList.LoginUser','null');
                    return redirect()->route('saveOrderOutBill');*/

            }else{
                return redirect()->route('orderOutBill');
            }
        }else{
            return redirect()->route('admingetLogin');
        }
    }
    public function CanclOrderOutList(){
        if(Session::has('user_id')){
            if(Session::has('OrderOutList')){
                Session::forget('OrderOutList');
                return redirect()->route('orderOutForm');
            }
        }else{
            return redirect()->route('admingetLogin');
        }
    }
    public function OrderOutBill(){
        if(Session::has('user_id')){
            if(Session::has('OrderOutList')){
                $supplierdetail = DB::select("select * from supplier WHERE id='".session('OrderOutList')['supplier_no']."'");
                return view("backEnd/Import/OrderOutBill",['supplier'=>$supplierdetail]);
            }
        }else{
            return redirect()->route('admingetLogin');
        }


    }
    public function SaveOrderOutBill(){
        if(Session::has('user_id')){
           if(session('OrderOutList')['LoginUser'] == "null"){
                $supplierdetail = DB::select("select * from supplier WHERE id='".session('OrderOutList')['supplier_no']."'");
                $pdf = PDF::loadView('backEnd/Import/OrderOutPDF',['supplier'=>$supplierdetail]);
                return $pdf->download('orderOut_'.Session::get('OrderOutList')['order_no'].'pdf');
            }else{

                return redirect()->route('orderOutBill');
            }
        }else{
            return redirect()->route('admingetLogin');
        }

    }

}
