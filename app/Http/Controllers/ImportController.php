<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function getLessProduct(){
        $products = Product::with('Producttype')->with('productimage')->with('promotion')->paginate(10);
        return view("backEnd/Import/CheckLessStock",['products'=>$products]);

    }
    public function AddProductImportAmount($id){

        return view("backEnd/Import/AddImportAmount",['id'=>$id]);
    }
}
