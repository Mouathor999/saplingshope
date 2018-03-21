<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
   public function index(){
       return view("frontEnd\index");
   }
   public function productdetail(){
       return view("frontEnd\productdetail");
   }
    public function saplingtree(){
        return view("frontEnd\saplingtree");
    }





}
