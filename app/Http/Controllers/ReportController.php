<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Employee;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ProductType;
use App\Sale;
use App\SaleDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Response;
use Session;
use function Sodium\add;

class ReportController extends Controller
{
    public function ReportEmpWork(){
        return view('backEnd/Report/EmployeeWork');
    }
    public function EmployeeInfor(){
        if(Session::has('user_id')){
        $employees = Employee::all();
//        $employees = DB::table('product')->get();
        return view('backEnd/Report/EmployeeInfor',['employees'=>$employees]);
        }else{
            return redirect()->route('admingetLogin');
        }
    }


    public function Customer_Order(){
        if(Session::has('user_id')){
            $customerOrder = Order::with('customer')->orderBy('id')->where('status','=','1')->paginate(10000);
//            return $customerOrder;
            return view('backEnd/Report/ShowCusTomerOrder',['CustomerOrderList'=>$customerOrder]);
        }else{
            return redirect()->route('admingetLogin');
        }
    }
    public function Customer_Order_Detail($id){
        if(Session::has('user_id')){
           $customerOrderDetail = OrderDetail::all()->where('order_id','LIKE',$id);
//            return array_flatten($customerOrderDetail)[0]->order_id;
            $OrderID = array_flatten($customerOrderDetail)[0]->order_id;
            return view('backEnd/Report/ShowCustomerOrderDetail',['CustomerOrderDetail'=>$customerOrderDetail,'OrderID'=>$OrderID]);
        }else{
            return redirect()->route('admingetLogin');
        }
    }



//    Product Report

    public function Report_Product(){
        if(Session::has('user_id')){
            $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(1000);
//            return array_flatten($products) ;
            return view("backEnd/Report/AllProduct",['products'=>$products]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }

    public function getAllProductType(){
        if(Session::has('user_id')){
            $producttype = ProductType::all();
            return view('backEnd/Report/AllProductType',['producttype' => $producttype]);
        }else{
            return redirect()->route('admingetLogin');
        }

    }


    public function Report_MoneyRecieve(){
        return view('backEnd/Report/MoneyReceived');
    }


    public function MoneyRecieveOne(Request $request,$date1){

        $Arr = [
            'totalMoney'=>0,
            'productList'=>[

            ]
        ];
//        $money = Sale::with('saledetail')->where('sale_date','>=',$date1)->orderBy('id')->paginate(100000);
//        $money = DB::select("select * FROM sale as s INNER JOIN saledetail as sd on s.id = sd.sale_id INNER JOIN product as p on sd.product_id = p.id WHERE s.sale_date >='$date1'");
        $money = DB::select("select * FROM sale as s INNER JOIN saledetail as sd on s.id = sd.sale_id WHERE s.sale_date >='$date1'");

        $reveicemoney = 0;
        foreach ($money as $item) {
            $reveicemoney += $item->total_price;
        }
        $Arr['totalMoney']= $reveicemoney;
        $Arr['productList'] = $money;
//        return $Arr;
        return response()->json($Arr);
    }
    public function MoneyRecieveTwo($date2,$date3){

        $Arr = [
            'totalMoney'=>0,
            'productList'=>[

            ]
        ];
        $money = DB::select("select * FROM sale as s INNER JOIN saledetail as sd on s.id = sd.sale_id WHERE s.sale_date BETWEEN '".$date2."' AND '".$date3."'");

        $reveicemoney = 0;
        foreach ($money as $item) {
            $reveicemoney += $item->total_price ;
        }
        $Arr['totalMoney']= $reveicemoney;
        $Arr['productList'] = $money;
//        return $Arr;
        return response()->json($Arr);
    }


    public function reportCustomer(){
        $customers = Customer::all();
        return view('backEnd/Report/ReportCustomer',['Customers'=>$customers]);
    }


    public function ReportImportProduct(){
        /*$Arr = [
            'totalMoney'=>0,
            'productList'=>[

            ]
        ];

        $importproduct = DB::select("select imp.getIn_date as getInDate,emp.emp_name as employee_name , supp.shop_name as supp_shop,impd.product_id as product_id ,impd.pro_name as pro_name ,impd.quatity as quatity ,impd.imp_price as price ,impd.total_price as total_price  FROM import as imp INNER JOIN importdetail as impd ON imp.id = impd.import_id INNER JOIN supplier as supp ON imp.supplier_id = supp.id INNER JOIN employee as emp ON imp.employee_id = emp.id WHERE imp.getIn_date BETWEEN '$date1' AND '$date2'");
        $sum = 0;
        $Arr['productList'] = $importproduct;

        for ($j = 0 ;$j<count($Arr['productList']);$j++){
            $sum += $Arr['productList'][$j]->total_price;
        }

        $Arr['totalMoney']= $sum;*/

//        return $Arr;
        return view('backEnd/Report/Importproduct');
    }

    public function AjaxReportImportProduct($date1,$date2){
        $Arr = [
            'totalMoney'=>0,
            'productList'=>[

            ]
        ];

        $importproduct = DB::select("select  imp.getIn_date as getInDate,emp.emp_name as employee_name , supp.shop_name as supp_shop,impd.import_id as import_id,impd.pro_name as pro_name ,impd.quatity as quatity ,impd.imp_price as price ,impd.total_price as total_price 
                                           FROM import as imp INNER JOIN importdetail as impd ON imp.id = impd.import_id INNER JOIN supplier as supp ON imp.supplier_id = supp.id INNER JOIN employee as emp ON imp.employee_id = emp.id 
                                           WHERE imp.status = '0' AND imp.getIn_date BETWEEN '$date1' AND '$date2' ORDER BY getIn_date ASC ");
        $sum = 0;
        $Arr['productList'] = $importproduct;

        for ($j = 0 ;$j<count($Arr['productList']);$j++){
            $sum += $Arr['productList'][$j]->total_price;
        }

        $Arr['totalMoney']= $sum;

//        return $Arr;

        return response()->json($Arr);
    }

}
