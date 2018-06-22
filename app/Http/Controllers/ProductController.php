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
            $totalprice += $orderitem['qty']*$orderitem['item']['sale_price'];
            $a++;
            if($a==count($orderCart)){
                return view('frontEnd/cart',['orderCart'=>$cart->items,'Products'=>$product, 'totalprice'=>$totalprice]);
            }
        }



    }
    public function cart(Request $request,$id){
        $product = Product::with('productimage')->find($id);
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


