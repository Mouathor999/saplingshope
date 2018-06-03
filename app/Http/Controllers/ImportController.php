<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function getLessProduct(){
//        $leeproduct = Product::with('')->where('limit','<=',50);
//        return view('backEnd/Import/CheckLessStock',['lessproducts'=>$leeproduct]);

        $products = Product::with('Producttype')->with('productimage')->with('productlevel')->with('promotion')->paginate(10);
        return view("backEnd/Import/CheckLessStock",['products'=>$products]);

    }
    public function AddProductImportAmount($id){

        return view("backEnd/Import/AddImportAmount",['id'=>$id]);
    }
}
