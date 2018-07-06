<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
 public function SearchAllproduct(Request $request){
     return Product::search($request->get('q'))->with('Producttype')->get();
 }
}
