<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImportController extends Controller
{
    public function getLessProduct(){
//        $leeproduct = DB::select(" select * from product where product.limit<=34 ");
         $leeproduct = DB::select("SELECT product.pro_id as pro_id, product.pro_name as pro_name,product.sale_price as price, product.stock as stock, product.limit as limits, producttype.ptype_name as ptype, product_level.level as level, (SELECT promotion.promotion AS ppromotion FROM promotion INNER JOIN promotiondetail ON promotiondetail.promotion_id = promotion.promotion_id WHERE product.pro_id = promotiondetail.pro_id) as ppromotion FROM product RIGHT JOIN producttype ON product.ptype_id = producttype.ptype_id INNER JOIN product_level ON product.level_id = product_level.level_id");
        return view('backEnd/Import/CheckLessStock',['lessproducts'=>$leeproduct]);
    }
}
