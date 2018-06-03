<?php

namespace App\Http\Controllers;

use App\Image;
use App\Order;
use App\Product;
use App\ProductPicture;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {




//        This is for Product_level
        $testproductAndProductLevel = Product::with('productlevel')->orderBy('id','desc')->paginate(10);
//        $testproductAndimage = Product::with('productimage')->orderBy('id')->paginate(10);
          $testproductAndimage = Product::with('productimage')->where('id',2)->orderBy('id')->paginate(10);

        $products = Product::with('order')->orderBy('id','desc')->paginate(10);
        foreach ($testproductAndimage as $image){
            if(!empty($image->productimage[1])){
                $imageParth = public_path().'\\img\\'.$image->productimage[1]->image;
                echo $imageParth;
                if(File::delete($imageParth)){
                    $productimage = new ProductPicture();
                    $productimage-> product_id = 2;
                    $productimage-> image = "Test.jpg";
                    $productimage ->timestamps =false;
                    $productimage->save();

                    echo "Deleted 1 file and insert 1 file";
                }
//               echo '<img src="'.public_path('img/'.$image->productimage[1]).'">';

//                 $image->productimage[1]->image;

            }else{
                $productimage = new ProductPicture();
                $productimage-> product_id = 2;
                $productimage-> image = "Test.jpg";
                $productimage ->timestamps =false;
                $productimage->save();
            }


        }


//      return view('test/testDatabase',['product_productlevel'=>$testproductAndProductLevel,'product_images'=>$testproductAndimage,'product_oder'=>$products]);




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
