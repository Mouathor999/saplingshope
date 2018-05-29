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
Route::get('/jars', [
    'uses'=>'productController@jars',
    'as'=>'jars'
]);


//Custommer Sign Up

Route::get('/CustomerSignIn', [
    'uses'=>'CustomerController@CustomerSignIn',
    'as'=>'CustomerSignIn'
]);
// Customer SignUp
Route::get('/CustomerSignUp', [
    'uses'=>'CustomerController@CustomerSignUp',
    'as'=>'CustomerSignUp'
]);
// Customer information
Route::get('/CustomerInfor', [
    'uses'=>'CustomerController@CustomerInfor',
    'as'=>'CustomerInfor'
]);

// Bill
Route::get('/Bill', [
    'uses'=>'CustomerController@Bill',
    'as'=>'Bill'
]);




// back end

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', [
        'uses'=>'AdminController@Admin',
        'as'=>'admin'
    ]);


//    Product

    Route::get('/InsertProduct', [
        'uses'=>'AdminController@InsertProduct',
        'as'=>'InsertProduct'
    ]);

//    param route
    /*Route::get('/InsertProduct/{success}', [
        'uses'=>'AdminController@InsertProduct',
        'as'=>'InsertProduct'
    ]);*/

    Route::post('/InsertProduct', [
        'uses'=>'AdminController@PostInsertProduct',
        'as'=>'InsertProduct'
    ]);




    Route::get('/InsertProductType', [
        'uses'=>'AdminController@InsertProductType',
        'as'=>'InsertProductType'
    ]);
    Route::post('/InsertProductType', [
        'uses'=>'AdminController@PostInsertgProductType',
        'as'=>'InsertProductType'
    ]);



// Employee route

    Route::get('/AddEmployee',[
        'uses'=>'AdminController@AddEmployee',
        'as'=>'AddEmployee'
    ]);
//    Route param
    Route::get('/AddEmployee/{success}',[
        'uses'=>'AdminController@AddEmployee',
        'as'=>'AddEmployeeSuccess'
    ]);
    Route::post('/Employee',[
        'uses'=>'AdminController@PostEmployee',
        'as'=>'PostEmployee'
    ]);


//   Supplier route

    Route::get('/AddSupplier', [
        'uses'=>'AdminController@AddSupplier',
        'as'=>'AddSupplier'
    ]);
    Route::post('/AddSupplier', [
        'uses'=>'AdminController@PostSupplier',
        'as'=>'PostSupplier'
    ]);



    Route::get('/UserLogin', [
        'uses'=>'AdminController@UserLogin',
        'as'=>'UserLogin'
    ]);
    Route::get('/ImportProduct', [
        'uses'=>'AdminController@ImportProduct',
        'as'=>'ImportProduct'
    ]);
    Route::get('/ImportConfirm', [
        'uses'=>'AdminController@ImportConfirm',
        'as'=>'ImportConfirm'
    ]);
    Route::get('/AddPromotion', [
        'uses'=>'AdminController@AddPromotion',
        'as'=>'AddPromotion'
    ]);
    Route::post('/AddPromotion', [
        'uses'=>'AdminController@PostAddPromotion',
        'as'=>'AddPromotion'
    ]);


//    Customer order Route
    Route::get('/CusOrder', [
        'uses'=>'CustomerOrderController@CusOrder',
        'as'=>'CustomerOrder'
    ]);
//    Customer orderDetail Route
    Route::get('/OrderDetail', [
        'uses'=>'CustomerOrderController@OrderDetail',
        'as'=>'OrderDetail'
    ]);




//    Customer order Route
    Route::get('/CusBooking', [
        'uses'=>'CustomerBookingController@CusBooking',
        'as'=>'CustomerBooking'
    ]);

//    SaledRoute

    Route::get('/SaledReport', [
        'uses'=>'SaledReportController@SaledReport',
        'as'=>'SaledReport'
    ]);

//    Manage Information Route
    Route::get('/AllProduct', [
        'uses'=>'ManageController@getAllProduct',
        'as'=>'manageProduct'
    ]);
    Route::get('/AllProductType', [
        'uses'=>'ManageController@getAllProductType',
        'as'=>'manageProductType'
    ]);
    Route::get('/AllEmployee', [
        'uses'=>'ManageController@getAllEmployee',
        'as'=>'manageEmployee'
    ]);
    Route::get('/AllSupplier', [
        'uses'=>'ManageController@getAllSupplier',
        'as'=>'manageSupplier'
    ]);
    Route::get('/AllPromotion', [
        'uses'=>'ManageController@getAllPromotion',
        'as'=>'managePromotion'
    ]);



//    Edit product Route
    Route::get('/EditProduct/{id}', [
        'uses'=>'EditController@EditProduct',
        'as'=>'EditProduct'
    ]);
  /*  Route::get('/EditEmp/{id}', [
        'uses'=>'EditController@EditEmployee',
        'as'=>'Editemployee'
    ]);*/
    Route::get('/EditEmp/{id}', [
        'uses'=>'EditController@EditEmployee',
        'as'=>'Editemployee'
    ]);



    Route::post('updateproduct/{id}',[
        'uses'=>'UpdateController@UpdateProduct',
        'as'=>'pUpdate'
    ]);



//    Report Route

//    Employee work
    Route::get('/ReportEmpWork', [
        'uses'=>'ReportController@ReportEmpWork',
        'as'=>'ReportEmpWork'
    ]);

//    Employee Inforation
    Route::get('/EmployeeInfor', [
        'uses'=>'ReportController@EmployeeInfor',
        'as'=>'employeeInfor'
    ]);

});

// Check less product in stock

     Route::get('LessProduct',[
        'uses' => 'ImportController@getLessProduct',
         'as'=>'lessproduct',
     ]);



// Test route
Route::get('/test', function (){
    return view("frontEnd.test");
});

Route::resource( '/testDatabase','TestDatabaseController');


