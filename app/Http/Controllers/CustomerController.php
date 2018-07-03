<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use File;
use PDF;



class CustomerController extends Controller
{
    public function CustomerSignIn(Request $request,$success=''){
        $text = $success;
        /*if($request->session()->has('cus_id')&&$request->session()->has('username') && $request->session()->has('password')){
            $data = $request->session()->all();
            if($data['cus_id'] != null && $data['cus_name'] != null && $data['cus_lastname'] != null &&  $data['cus_tel'] != null){
               if(session::has('cart')){
                   return redirect()->route('Bill');
//                   return redirect()->route('store.cusOrder');
               }else{
                   return redirect()->route('product.index');
               }
            }else{
                return redirect()->route('CustomerInfor');
            }
        }else{
            return view('frontEnd/CustomerLogin',['text'=>$text]);
        }*/

        return view('frontEnd/CustomerLogin',['text'=>$text]);

    }


    public function customerLogin(Request $request){
        $usename = $request->input("username");
        $password = $request->input("password");

        $CustomerInfor = Customer::all();
        $Countcustom = count($CustomerInfor);
        if($Countcustom>=1){
            for ($i=0; $i<=$Countcustom-1;$i++){
                if($CustomerInfor[$i]->username == $usename && Crypt::decrypt($CustomerInfor[$i]->password) == $password){
                    session(['cus_id'=>$CustomerInfor[$i]->id,'username'=>$CustomerInfor[$i]->username,'password'=>$CustomerInfor[$i]->password,'cus_name'=>$CustomerInfor[$i]->cus_name,'cus_lastname'=>$CustomerInfor[$i]->cus_lastname,'cus_tel'=>$CustomerInfor[$i]->tel,'cus_email'=>$CustomerInfor[$i]->email]);
                    $data = $request->session()->all();
                    if($data['username'] != null && $data['password'] != null  && $data['cus_id'] != null && $data['cus_name'] != null && $data['cus_lastname'] != null &&  $data['cus_tel'] != null){
                         if(session::has('cart')){
                             return redirect()->route('store.cusOrder');
                        }else{
                            return redirect()->route('productcart');
                        }
                    }else{
                        return redirect()->route('CustomerInfor');
                    }
                }else{

                }
            }
            return redirect()->route('Loginfail',["text"=>"Username or password incorrectly, Please retry"]);

        }else{
            return redirect()->route('Loginfail',["text"=>"Username or password incorrectly, Please retry"]);
        }


        /*if($CustomerInfor != null){
            session(['cus_id'=>$CustomerInfor[0]->id,'username'=>$CustomerInfor[0]->username,'password'=>$CustomerInfor[0]->password,'cus_name'=>$CustomerInfor[0]->cus_name,'cus_lastname'=>$CustomerInfor[0]->cus_lastname,'cus_tel'=>$CustomerInfor[0]->tel,'cus_email'=>$CustomerInfor[0]->email]);
            $data = $request->session()->all();
            if($data['cus_id'] != null && $data['cus_name'] != null && $data['cus_lastname'] != null &&  $data['cus_tel'] != null){
                return redirect()->route('Bill');
            }else{
                return redirect()->route('CustomerInfor');
            }
        }
        else{
            return redirect()->route('Loginfail',["text"=>"Username or password incorrectly, Please retry"]);
        }*/
    }

    public function CustomerSignUp($success=null){
        $Text = $success;
        return view('frontEnd/CustomerSignup',['Text'=>$Text]);
    }
    public function Customer_Post_SignUp(Request $request){
        $this->validate($request,[
           'cus_password'=>'required|min:6',
           'cus_confirmpassword'=>'required|min:6',
        ]);
        $usename =  $request->input('cus_username');
        $newCus_password = $request->input('cus_password');
        $newCus_Confirmpassword = $request->input('cus_confirmpassword');

        if($newCus_password === $newCus_Confirmpassword ){
//            Check if exist customer username and password in database.
            $checkCustomerInDB = DB::select("select * from customer");
            $allCustomer = count($checkCustomerInDB);

            if($allCustomer >=1){
//                return Crypt::decrypt($checkCustomerInDB[0]->password);

                for($i=0;$i<=$allCustomer-1 ;$i++){
                    if(Crypt::decrypt($checkCustomerInDB[$i]->password)==$newCus_password && $checkCustomerInDB[$i]->username == $usename){
                        //   if existing customer in database then redirect to Register route
                        return redirect()->route('CusRegisterFail',["text"=>"Customer already existing."]);
                    }else{

                    }
                }
                $Customer = new Customer();
                $Customer -> username = $request->input('cus_username');
                $Customer -> password = encrypt($request->input('cus_password'));
                $Customer -> timestamps = false;
                if($Customer->save()==true){
                    return redirect()->route('CustomerSignIn');
                }else{
                    return redirect()->route('Customer.Register');
                }

            }else{
                $Customer = new Customer();
                $Customer -> username = $request->input('cus_username');
                $Customer -> password = encrypt($request->input('cus_password'));
                $Customer -> timestamps = false;
                if($Customer->save()==true){
                    return redirect()->route('CustomerSignIn');
                }else{
                    return redirect()->route('Customer.Register');
                }
            }
        }else{
            return redirect()->route('Customer.Register');
        }
    }

    public function CustomerInfor(Request $request){
        return view('frontEnd/CustomerInfor');
    }
    public function CustomerPostInfor(Request $request){

        if(Input::hasFile('cpicture')){
            $file = str_random(15).'.'.$request->file('cpicture')->getClientOriginalExtension();
            $updateCustomer =  DB::update(
                "update customer set cus_name='".$request->input('cname')."',cus_lastname='".$request->input('clastname').
                "',gender='".$request->input('cgender')."',village='".$request->input('cvillage')."',district='".$request->input('cdistrict').
                "',province='".$request->input('cprovince')."',tel='".$request->input('cphone')."',email='".$request->input('cemail')."',image='".$file."' where id='".session('cus_id')."'");

            if($updateCustomer){
                if(session::has('cart')){
                    return redirect()->route('Bill');
                }else{
                    return redirect()->route('product.index');
                }
            }else{
                return "You detail fail. Please retry";
            }
            $request->file('cpicture') -> move(public_path('/img'),$file);
        }else{
            $updateCustomer =  DB::update(
                "update customer set cus_name='".$request->input('cname')."',cus_lastname='".$request->input('clastname').
                "',gender='".$request->input('cgender')."',village='".$request->input('cvillage')."',district='".$request->input('cdistrict').
                "',province='".$request->input('cprovince')."',tel='".$request->input('cphone')."',email='".$request->input('cemail')."',image='".$request->input('cpicture')."' where id='".session('cus_id')."'");
            if($updateCustomer){
                if(session::has('cart')){
                    return redirect()->route('Bill');
                }else{
                    return redirect()->route('product.index');
                }
            }else{
                return "You detail fail. Please retry";
            }
        }
    }

    public function OrderSendDate(){
       if(!session::has('cart')){
           return redirect()->route('productcart');
       }else{
           return view('frontEnd/CusAddSendDate');
       }
    }


    public function PostOrderDate(Request $request){
//        return $request->input('sendDate');
     session((['sendDate'=> $request->input('sendDate')])); //     return session('sendDate');
     if($request->session()->has('cus_id')&&$request->session()->has('username') && $request->session()->has('password')){
         if(session::has('cart')){
             return redirect()->route('store.cusOrder');
         }else{
             return redirect()->route('productcart');
         }
     }else{
         return redirect()->route('CustomerSignIn');
     }




    }





    public function CustomerOrder(Request $request){

        if($request->session()->has('cus_id')&&$request->session()->has('username') && $request->session()->has('password')){
            if(session::has('cart')){
                   return redirect()->route('store.cusOrder');
            }else{
                return redirect()->route('productcart');
            }
        }else{
            return redirect()->route('CustomerSignIn');
        }

    }
    public function StoreOrder(Request $request){



       $Now_date = date('Y-m-d');
//        $product = Product::with('productimage')->with('Producttype')->with('promotion')->orderBy('id')->paginate(10);
        if(!Session::has('cart')){
            return view('frontEnd/cart');
        }else {


//    insert into database
            $storeOrder = new Order();
            $storeOrder -> order_date = $Now_date;
            $storeOrder -> send_date = session('sendDate');
            $storeOrder -> status = '1';
            $storeOrder -> customer_id = session('cus_id');
            $storeOrder -> timestamps = false;
            if($storeOrder->save()){

                $maxOrderID = DB::select("SELECT MAX(id) as maxID FROM `order`");
                $a=0;
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $orderCart = $cart->items;

                foreach ($orderCart as $orderitem){

//                    return $orderCart;
//                    return $orderitem;
//                    return array_flatten($orderitem);
//                    return count(array_flatten($orderitem));
//                    return count(array_flatten($orderitem)[2]->promotion);
//                    return count(array_flatten($orderitem)[2]->promotion);

                    $storeOrderdetail = new OrderDetail();
                    $product_promotion=0;
                      $storeOrderdetail-> order_id = $maxOrderID[0]->maxID;
                      $storeOrderdetail-> product_id = $orderitem['item']['id'];
                      $storeOrderdetail-> pro_name = $orderitem['item']['pro_name'];
                      $storeOrderdetail-> quantity = $orderitem['qty'];
                      $storeOrderdetail-> sale_price = $orderitem['item']['sale_price'];
                      $storeOrderdetail-> total_price = $orderitem['qty']*$orderitem['item']['sale_price'];
                        if(count($orderitem['item']->productimage)){
                            $storeOrderdetail-> image= $orderitem['item']->productimage[0]->image;
                        }else{
                            $storeOrderdetail-> image= '';
                        }
                      $storeOrderdetail-> description = $orderitem['item']['descript'];
                    for($i=0;$i<count(array_flatten($orderitem)[2]->promotion);$i++){
//                        return array_flatten($orderitem)[2]->promotion[$i];

                        if(count(array_flatten($orderitem)[2]->promotion)!=0){
                            if(array_flatten($orderitem)[2]->promotion[$i]->pivot->end_date >= date('Y-m-d') && array_flatten($orderitem)[2]->promotion[$i]->pivot->start_date <= date('Y-m-d')){
//                                $product_promotion = $orderitem['item']->promotion[$i]->pivot->promotion;
                                $product_promotion = array_flatten($orderitem)[2]->promotion[$i]->pivot->promotion;
                            }
                            else{
                                $product_promotion=0;
                            }
                        }else{
                            break;
                        }

                    }
                    $storeOrderdetail->product_promotion = $product_promotion;
                    $storeOrderdetail-> timestamps = false;
                    $storeOrderdetail->save();
                    session(['maxorderidwhileStoreOrder'=>$maxOrderID]);
                    $a++;
                    if($a==count($orderCart)){
                     return redirect()->route('Bill');
                    }
                }
            }else{

            }
        }


    }
    public function Customerlogout(Request $request){
        $request->session()->forget('cus_id','usename','password','cus_name','cus_lastname','cus_tel','email');
        return redirect()->route('product.index');
    }

    public function cancelOrder(Request $request){
        $request->session()->forget('cart');
        return redirect()->route('product.index');
    }


    public function Bill(){
        if(session('cus_id')!=null && session('username')!=null &&session('password')!=null ){
            $product = Product::with('productimage')->with('Producttype')->with('promotion')->orderBy('id')->paginate(10);
            if(!Session::has('cart')){
//                return " ທ່ານໄດ້ບັກທືກໃບສັ່ງຊື້ສິນຄ້າແລ້ວ.";
                return redirect()->route('product.index');
            }
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $orderCart = $cart->items;
//        return count($orderCart);
            $totalprice = 0;
            $a=0;
            foreach ($orderCart as $orderitem){
                $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
                $a++;
                if($a==count($orderCart)){
                    return view('frontEnd/Bill',['orderCart'=>$cart->items,'Products'=>$product, 'totalprice'=>$totalprice]);
                }
            }
            return view('frontEnd/Bill');
        }else{

        }

    }


    public function GetTotalPrice(Request $request){

        if(Session::has('cart')){
             $oldCart = Session::get('cart');
             $cart = new Cart($oldCart);
             $orderCart = $cart->items;
             $totalprice=0;
             foreach ($orderCart as $orderitem) {
                 if (count($orderitem['item']->promotion) != 0){
                     foreach ($orderitem['item']->promotion as $ppromotion){
                         if ($ppromotion->pivot->end_date >= date('Y-m-d') && $ppromotion->pivot->start_date <= date('Y-m-d')) {
 //                        echo  $ppromotion->pivot->promotion;
                             $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'] - ((($orderitem['qty']*$orderitem['item']['sale_price'])*$ppromotion->pivot->promotion)/100);
                         }else{
                             if ($ppromotion->pivot->end_date >= date('Y-m-d') && $ppromotion->pivot->start_date >= date('Y-m-d')) {
                                 $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
                             }

                         }
                     }

                 }else{
                     $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
                 }
             }

             session(['totalprice'=>$totalprice]) ;
             $request ->session()->forget('cart');
            return redirect()->route('saveOrderBill');
         }else{

            return redirect()->route('Bill');

         }

    }
    public function SaveOrderBill(){

        $customerInfor = Customer::find(session('cus_id'));
        $Product = Product::with('productimage')->with('Producttype')->with('promotion')->orderBy('id')->paginate(10);
        $maxorderidwhileStoreOrder = session('maxorderidwhileStoreOrder');
        $CusorderinOrderdetail = OrderDetail::all()->where('order_id','LIKE',$maxorderidwhileStoreOrder[0]->maxID);

        $pdf = PDF::loadView('frontEnd.orderPDF', ['CusOrderList'=>array_flatten($CusorderinOrderdetail),'Products'=>$Product,'orderID'=>$maxorderidwhileStoreOrder[0]->maxID,'customerInfor'=>$customerInfor]);
        return $pdf->stream();
    }


}
