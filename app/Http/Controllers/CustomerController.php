<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerSignIn(){
        return view('frontEnd/CustomerLogin');
    }
    public function CustomerSignUp(){
        return view('frontEnd/CustomerSignup');
    }
    public function CustomerInfor(){
        return view('frontEnd/CustomerInfor');
    }
    public function Bill(){
        return view('frontEnd/Bill');
    }
}
