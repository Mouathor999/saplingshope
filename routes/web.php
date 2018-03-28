<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses'=>'productController@index',
    'as'=>'product.index'
]);

Route::get('/detail', [
    'uses'=>'productController@productdetail',
    'as'=>'product.productdetail'
]);
Route::get('/sapling', [
    'uses'=>'productController@saplingtree',
    'as'=>'product.saplingtree'
]);
Route::get('/flowers', [
    'uses'=>'productController@flowers',
    'as'=>'flowers'
]);

Route::get('/cart', [
    'uses'=>'productController@cart',
    'as'=>'cart'
]);

Route::get('/test', function (){
    return view("frontEnd.test");
});

// back end


Route::get('/admin', function (){
    return view("backEnd/admin");
});
Route::get('/insert', function (){
    return view("backEnd/insert");
});
Route::get('/signup', function (){
    return view("backEnd/signup");
});
Route::get('/login', function (){
    return view("backEnd/login");
});
Route::get('/supplier', function (){
    return view("backEnd/supplier");
});
Route::get('/employee', function (){
    return view("backEnd/employee");
});
Route::get('/import', function (){
    return view("backEnd/inport");
});
Route::get('/comfirm', function (){
    return view("backEnd/comfirm");
});


