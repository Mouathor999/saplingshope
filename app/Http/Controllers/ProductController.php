<?php

namespace App\Http\Controllers;

use App\Cart;
use App\OrderDetail;
use App\Product;
use App\ProductPicture;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Hash;

class productController extends Controller
{
    /**
     * @return array
     */
    public function index(){

        $myarray = [];
        $data= DB::select("SELECT sd.product_id, sum(sd.quantity) as total_sale from saledetail as sd GROUP BY sd.product_id ORDER BY total_sale DESC LIMIT 12");

        foreach ($data as $item){
            $product = DB::select("select sd.product_id,sd.pro_nam ,sd.image from saledetail as sd WHERE product_id='".$item->product_id."'  ");
             array_push($myarray,$product);
        }

//                return array_flatten($myarray);
        $new_product = Product::with('productimage')->orderBy('id','DESC')->paginate(12);

        $recomment = Product::with('productimage')->orderBy('id','ASC')->paginate(12);
       return view("frontEnd\index",['NewProduct'=>$new_product,'bestSale'=>array_flatten($myarray),'Recomment'=>$recomment]);

   }
   public function productdetail($id){
       $product = Product::with('Producttype')->with('productimage')->with('promotion')->where('id','=',$id)->orderBy('id')->paginate(100);
       $ptype_id= DB::select("select pro.product_type_id as p_id from product as pro WHERE pro.id='".$id."' ");
       $advertising = Product::with('Producttype')->with('productimage')->with('promotion')->where('product_type_id','LIKE',$ptype_id[0]->p_id)->orderBy('id','DESC')->paginate(12);

       return view("frontEnd/productdetail",['productinfor'=>$product,'advertising'=>$advertising]);
   }
    public function saplingtree(){

        $adverting_product = Product::with('productimage')->orderBy('id','DESC')->paginate(12);
        $product = Product::with('productimage')->with('promotion')->where('product_type_id','LIKE','pt003')->orWhere('product_type_id','LIKE','pt004')->orWhere('product_type_id','LIKE','pt005')->orderBy('id')->paginate(1000);
        return view("frontEnd\saplingtree",['products'=>$product,'Adverting_product'=>$adverting_product]);
    }
    public function productcart(Request $request){

        $product = Product::with('productimage')->with('Producttype')->with('promotion')->orderBy('id')->paginate(10);
        $adverting_product = Product::with('productimage')->orderBy('id','DESC')->paginate(10);
        if(!Session::has('cart')){
            return view('frontEnd/cart',['Adverting'=>$adverting_product]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $orderCart = $cart->items;
//        return count($orderCart);
        $totalprice = 0;
        $a=0;


        foreach ($orderCart as $orderitem){
            if (count($orderitem['item']->promotion) != 0){
                foreach ($orderitem['item']->promotion as $ppromotion){
                    if ($ppromotion->pivot->end_date >= date('Y-m-d') && $ppromotion->pivot->start_date <= date('Y-m-d')) {
//                        echo  $ppromotion->pivot->promotion;
                        $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'] - ((($orderitem['qty']*$orderitem['item']['sale_price'])*$ppromotion->pivot->promotion)/100);
                    }else{
                        /*if ($ppromotion->pivot->end_date >= date('Y-m-d') && $ppromotion->pivot->start_date > date('Y-m-d')) {
                            $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
                        }*/
                        $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
                    }
                }

            }else{
                $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
            }
            $a++;
            if($a==count($orderCart)){

                return view('frontEnd/cart',['orderCart'=>$cart->items,'Products'=>$product, 'totalprice'=>$totalprice,'Adverting'=>$adverting_product]);
            }
        }
    }
    public function cart(Request $request,$id){
        $product = Product::with('productimage')->with('promotion')->find($id);
        $postqty = $request->input('quantity');


        $oldCart = Session::has('cart')? Session::get('cart'):null;
//        $cart = new Cart($oldCart,$request->input('quantity'));
        $cart = new Cart($oldCart);
//        dd($cart);

        if($postqty ==""){
            $qauntity = 1;
        }else{
            $qauntity = $postqty;
        }
        $cart->add($product,$qauntity,$product->id);
        $request->session()->put('cart',$cart);
//        dd($request->session()->get('cart'));
        return redirect()->back();
    }


    public function getReduceByOne($id){

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->ReduceByOne($id);
        if(count($cart->items)> 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('productcart');

    }
    public function getReduceAll($id){

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->ReduceAll($id);
        if(count($cart->items)> 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('productcart');

    }

    public function Postcart($id){
        return $id;
//        return view("frontEnd\cart");
    }
    public  function flowers(){
        $adverting_product = Product::with('productimage')->orderBy('id','DESC')->paginate(12);

        $product = Product::with('productimage')->with('promotion')->where('product_type_id','LIKE','pt001')->orWhere('product_type_id','LIKE','pt002')->orderBy('id')->paginate(1000);

        return view("frontEnd/Flowers",['products'=>$product,'Adverting_product'=>$adverting_product]);
    }
    public  function jars(){
        $adverting_product = Product::with('productimage')->orderBy('id','DESC')->paginate(12);
        $product = Product::with('productimage')->with('promotion')->where('product_type_id','LIKE','pt006')->orWhere('product_type_id','LIKE','pt007')->orWhere('product_type_id','LIKE','pt008')->orderBy('id')->paginate(1000);
        return view("frontEnd/Jars",['products'=>$product,'Adverting_product'=>$adverting_product]);
    }
    public  function Fertilizer(){
        $adverting_product = Product::with('productimage')->orderBy('id','DESC')->paginate(12);
        $product = Product::with('productimage')->with('promotion')->where('product_type_id','LIKE','pt009')->orWhere('product_type_id','LIKE','pt010')->orderBy('id')->paginate(1000);
        return view("frontEnd/fertilizer",['products'=>$product,'Adverting_product'=>$adverting_product]);
    }





}


