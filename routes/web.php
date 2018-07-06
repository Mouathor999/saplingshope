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

// Search route
Route::get('',[
    'uses'=>'SearchController@Allproduct',
    'as'=>'searchAllproduct'
]);

Route::get('/', [
    'uses'=>'productController@index',
    'as'=>'product.index'
]);

Route::get('/detail/{id}', [
    'uses'=>'productController@productdetail',
    'as'=>'productdetail'
]);
Route::get('/sapling', [
    'uses'=>'productController@saplingtree',
    'as'=>'saplingtree'
]);
Route::get('/flowers', [
    'uses'=>'productController@flowers',
    'as'=>'flowers'
]);
Route::get('/Fertilizer', [
    'uses'=>'productController@Fertilizer',
    'as'=>'fertilizer'
]);

Route::get('/cart/{id}', [
    'uses'=>'productController@cart',
    'as'=>'cart'
]);
Route::get('/You-cart', [
    'uses'=>'productController@productcart',
    'as'=>'productcart'
]);
Route::get('/Cart-ReduceOne/{id}', [
    'uses'=>'productController@getReduceByOne',
    'as'=>'productcart.reduceOne'
]);
Route::get('/Cart-ReduceAll/{id}', [
    'uses'=>'productController@getReduceAll',
    'as'=>'productcart.reduceAll'
]);



Route::get('/jars', [
    'uses'=>'productController@jars',
    'as'=>'jars'
]);


//Custommer Sign Up




// Customer SignUp

Route::group(['prefix'=>'Customer'], function (){


    Route::get('/SignIn', [
        'uses'=>'CustomerController@CustomerSignIn',
        'as'=>'CustomerSignIn'
    ]);

    Route::get('/SignIn/{success}', [
        'uses'=>'CustomerController@CustomerSignIn',
        'as'=>'Loginfail'
    ]);
    Route::post('/Login', [
        'uses'=>'CustomerController@Customerlogin',
        'as'=>'CustomerLogin'
    ]);

    Route::get('logout',[
        'uses'=>'CustomerController@Customerlogout',
        'as'=>'Cus_logout',
    ]);

    Route::get('cancelOrder',[
        'uses'=>'CustomerController@cancelOrder',
        'as'=>'CancelOrder',
    ]);



    Route::get('/SignUp', [
        'uses'=>'CustomerController@CustomerSignUp',
        'as'=>'CustomerSignUp'
    ]);
    Route::get('/Register', [
        'uses'=>'CustomerController@CustomerSignUp',
        'as'=>'Customer.Register'
    ]);
    Route::get('/Register/{success}', [
        'uses'=>'CustomerController@CustomerSignUp',
        'as'=>'CusRegisterFail'
    ]);
    Route::post('/Register', [
        'uses'=>'CustomerController@Customer_Post_SignUp',
        'as'=>'Customer.Register'
    ]);

    // Customer information
    Route::get('/Customerdetail', [
        'uses'=>'CustomerController@CustomerInfor',
        'as'=>'CustomerInfor'
    ]);
    Route::post('/Customerdetail', [
        'uses'=>'CustomerController@CustomerPostInfor',
        'as'=>'PostCustomerInfor'
    ]);



    Route::get('/SendDate', [
        'uses'=>'CustomerController@OrderSendDate',
        'as'=>'orderSendDate'
    ]);
    Route::post('/SendDate', [
        'uses'=>'CustomerController@PostOrderDate',
        'as'=>'postSendDate'
    ]);


    Route::get('/CusOrder', [
        'uses'=>'CustomerController@CustomerOrder',
        'as'=>'customerOrder'
    ]);

    Route::get('/StoreCusOrder', [
        'uses'=>'CustomerController@StoreOrder',
        'as'=>'store.cusOrder'
    ]);


// Bill
    Route::get('/Bill', [
        'uses'=>'CustomerController@Bill',
        'as'=>'Bill'
    ]);
    Route::get('/GetTotalPrice', [
        'uses'=>'CustomerController@GetTotalPrice',
        'as'=>'getTotalPrice'
    ]);
    Route::get('/SaveOrderBill', [
        'uses'=>'CustomerController@SaveOrderBill',
        'as'=>'saveOrderBill'
    ]);



});



// back end

Route::group(['prefix'=>'admin'], function (){

    Route::get('/Login', [
        'uses'=>'AdminController@AdmingetLogin',
        'as'=>'admingetLogin',
    ]);
    Route::get('/Login/{success}', [
        'uses'=>'AdminController@AdmingetLogin',
        'as'=>'Loginfail'
    ]);
    Route::post('/AdminPostLogin', [
        'uses'=>'AdminController@AdminPostLogin',
        'as'=>'adminPostLogin',
    ]);




    Route::get('/index', [
        'uses'=>'AdminController@Admin',
        'as'=>'adminPage',
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
    Route::get('/AddSupplier/{success}', [
        'uses'=>'AdminController@AddSupplier',
        'as'=>'AddSupplierSuccess'
    ]);
    Route::post('/AddSupplier', [
        'uses'=>'AdminController@PostSupplier',
        'as'=>'PostSupplier'
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


//        Admin Logout
    Route::get('/AdminLogout', [
        'uses'=>'AdminController@AdminLogout',
        'as'=>'addminLogout'
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
        'uses'=>'ManageController@AllSupplier',
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
    Route::get('/EditProductLimit/{id}', [
        'uses'=>'EditController@EditProductLimit',
        'as'=>'EditPLimit'
    ]);
    Route::get('/EditProducttype/{id}', [
        'uses'=>'EditController@EditProducttype',
        'as'=>'EditPtype'
    ]);
    Route::get('/EditPromotion/{id}', [
        'uses'=>'EditController@EditPromotion',
        'as'=>'EditPromotion'
    ]);
    Route::get('/EditEmployee/{id}', [
        'uses'=>'EditController@EditEmployee',
        'as'=>'Editemployee'
    ]);
    Route::get('/EditSupplier/{id}', [
        'uses'=>'EditController@EditSupplier',
        'as'=>'EditSupplier'
    ]);


//  Update Route

    Route::post('updateproduct/{id}',[
        'uses'=>'UpdateController@UpdateProduct',
        'as'=>'pUpdate'
    ]);
    Route::post('updateproductLimit/{id}',[
        'uses'=>'UpdateController@UpdateProductLimit',
        'as'=>'pLimitUpdate'
    ]);
    Route::post('updateProducttype/{id}',[
        'uses'=>'UpdateController@UpdateProductType',
        'as'=>'TypeUpdate'
    ]);
    Route::post('updatePromotion/{id}',[
        'uses'=>'UpdateController@UpdatePromotion',
        'as'=>'PromotionUpdate'
    ]);

    Route::post('updateEmployee/{id}',[
        'uses'=>'UpdateController@UpdateEmployee',
        'as'=>'EUpdate'
    ]);
    Route::post('updateSupplier/{id}',[
        'uses'=>'UpdateController@UpdateSupplier',
        'as'=>'SPUpdate'
    ]);


//    Delete Route
    Route::get('DelProduct/{id}',[
        'uses'=>'DeleteController@DelProduct',
        'as'=>'DelProduct'
    ]);

    Route::get('DelProducttype/{id}',[
        'uses'=>'DeleteController@DelProducttype',
        'as'=>'DelPtype'
    ]);
    Route::get('DelPromotion/{id}',[
        'uses'=>'DeleteController@DelPromotion',
        'as'=>'DelPromotion'
    ]);
    Route::get('DelEmployee/{id}',[
        'uses'=>'DeleteController@DelEmployee',
        'as'=>'DelEmp'
    ]);
    Route::get('DelSuplier/{id}',[
        'uses'=>'DeleteController@DelSupplier',
        'as'=>'DelSP'
    ]);



//    Report Route

//    Show customer order in backEnd
    Route::get('/Customer-Order', [
        'uses'=>'ReportController@Customer_Order',
        'as'=>'showCustomerOrder'
    ]);
    Route::get('/Customer-Order-detail/{id}', [
        'uses'=>'ReportController@Customer_Order_Detail',
        'as'=>'showCustomerOrderDetail'
    ]);
    Route::get('/Report-product', [
        'uses'=>'ReportController@Report_Product',
        'as'=>'reportProduct'
    ]);
    Route::get('/Report-productType', [
        'uses'=>'ReportController@getAllProductType',
        'as'=>'reportProducttype'
    ]);
    Route::get('/Report-MoneyReveive', [
        'uses'=>'ReportController@Report_MoneyRecieve',
        'as'=>'reportmoneyReceive'
    ]);
    Route::post('/moneyReceiveOne/{date1}','ReportController@MoneyRecieveOne');

    Route::get('/moneyReceive/{date1}',[
        'uses'=>'ReportController@MoneyRecieve',
        'as'=>'moneyReceiveOne',
    ]);
    Route::post('/moneyReceiveTwo/{date2}/{date3}','ReportController@MoneyRecieveTwo');


    Route::get('/moneyReceiveTwo/{date2}/{date3}',[
        'uses'=>'ReportController@MoneyRecieveTwo',
        'as'=>'moneyReceiveTwo',
    ]);
    Route::get('/Report-Import-product',[
        'uses'=>'ReportController@ReportImportProduct',
        'as'=>'reportImportProduct',
    ]);

    Route::post('/reportImportProduct/{date1}/{date2}','ReportController@AjaxReportImportProduct');




    Route::get('Report-Customer',[
        'uses'=>'ReportController@ReportCustomer',
        'as'=>'reportCustomer'
    ]);






//    Employee work
    Route::get('/ReportEmpWork', [
        'uses'=>'ReportController@ReportEmpWork',
        'as'=>'ReportEmpWork'
    ]);

//    Employee Information
    Route::get('/EmployeeInfor', [
        'uses'=>'ReportController@EmployeeInfor',
        'as'=>'employeeInfor'
    ]);


});


    // Import product

    Route::get('LessProduct',[
        'uses' => 'ImportController@getLessProduct',
        'as'=>'lessproduct',
    ]);

    //     Load Import product amount form
    Route::get('Amount/{id}',[
        'uses' => 'ImportController@AddProductImportAmount',
        'as'=>'pAmount',
    ]);

    Route::get('order-product',[
        'uses' => 'ImportController@postOrderOut',
        'as'=>'postOrderOut',
    ]);


    Route::get('Admin order out',[
        'uses' => 'ImportController@OrderOutForm',
        'as'=>'orderOutForm',
    ]);
    Route::post('postajax', 'ImportController@MyAjaxTest');

    Route::get('storeOrderOut',[
        'uses'=>'ImportController@StoreOrderOutList',
        'as'=>'storeOrderOut'
    ]);
    Route::get('cancelOrderOut',[
        'uses'=>'ImportController@CanclOrderOutList',
        'as'=>'cancelOrderOut'
    ]);
    Route::get('OrderOutBill',[
        'uses'=>'ImportController@OrderOutBill',
        'as'=>'orderOutBill'
    ]);
    Route::get('SaveOrderOutBill',[
        'uses'=>'ImportController@SaveOrderOutBill',
        'as'=>'saveOrderOutBill'
    ]);
//      Import product
    Route::get('Import-product',[
        'uses' => 'ImportController@AddImport_product',
        'as'=>'importproduct',
    ]);

    Route::get('Detail/{id}',[
        'uses' => 'ImportController@OrderoutDetail',
        'as'=>'orderoutDetail',
    ]);
    Route::post('postorderOutAjax','ImportController@Post_orderOut_Ajax');

    Route::get('ImportOrderOutProduct',[
        'uses' => 'ImportController@ImportOrderOutProduct',
        'as'=>'importOrderOutProduct',
    ]);

// Test route
Route::get('/test', function (){
    return view("frontEnd.test");
});

Route::resource( '/testDatabase','TestDatabaseController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
