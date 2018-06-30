<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\ProductPicture;
use Illuminate\Http\Request;
use Session;

class productController extends Controller
{
   public function index(){
       return view("frontEnd\index");
   }
   public function productdetail($id){
       $product = Product::with('Producttype')->with('productimage')->with('promotion')->where('id','=',$id)->orderBy('id')->paginate(100);
       return view("frontEnd/productdetail",['productinfor'=>$product]);
   }
    public function saplingtree(){
       $product = Product::with('productimage')->with('promotion')->orderBy('id')->paginate(1000);
        return view("frontEnd\saplingtree",['products'=>$product]);
    }
    public function productcart(Request $request){
        $product = Product::with('productimage')->with('Producttype')->with('promotion')->orderBy('id')->paginate(10);
        if(!Session::has('cart')){
            return view('frontEnd/cart');
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
                    if ($ppromotion->pivot->end_date >= date('Y-m-d')) {
//                        echo  $ppromotion->pivot->promotion;
                        $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'] - ((($orderitem['qty']*$orderitem['item']['sale_price'])*$ppromotion->pivot->promotion)/100);
                    }else{

                    }
                }

            }else{
                $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
            }
            $a++;
            if($a==count($orderCart)){
                return view('frontEnd/cart',['orderCart'=>$cart->items,'Products'=>$product, 'totalprice'=>$totalprice]);
            }
        }
    }
    public function cart(Request $request,$id){
        $product = Product::with('productimage')->with('promotion')->find($id);
        $qauntity = $request->input('quantity');
        $oldCart = Session::has('cart')? Session::get('cart'):null;
//        $cart = new Cart($oldCart,$request->input('quantity'));
        $cart = new Cart($oldCart);
//        dd($cart);

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
        return view("frontEnd\Flowers");
    }
    public  function jars(){
        return view("frontEnd\Jars");
    }





}


