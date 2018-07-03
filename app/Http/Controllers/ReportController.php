<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

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

}
