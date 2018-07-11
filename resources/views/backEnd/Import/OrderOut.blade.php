<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>OrderOut</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">



    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
@include('backEnd/AdminNavbar')
<div class="mainConten" style="margin-top: 10px">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <div style="background-color: #7DA0B1">
                <div class="card" style="height: auto;  box-shadow: 1px 1px 1px 1px #1c7430">
                    <br>
                    <div class="card-title">
                        <div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2">
                                    <img src="{{asset('img/nopic.jpg')}}" alt="" style="width: 120px;margin-bottom: 10px">
                                </div>
                                <div class="col-md-8 col-lg-8 col-xl-8">
                                    &nbsp;
                                    &nbsp;
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-xl-2">

                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div>
                                        <select name="productType" id="productType" class="form-control">
                                            <option value="">ເລືອກປະເພດສິນຄ້າ...</option>
                                            @foreach( $producttypes as $producttype )
                                                <option value="{{$producttype->id}}">{{$producttype->ptype_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4 col-xl-4">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="height: auto; box-shadow: 1px 1px 1px 1px #B3E5FC" id="maincontain">
                        <div  style="overflow: scroll;height: 800px">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="">
                                            <tr>
                                                <th style="background-color: #B3E5FC;text-align: center">ລະຫັດສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ເລືອກ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຮູບພາບ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຊື່ສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">stock</th>
                                                <th style="background-color: #B3E5FC;text-align: center">qty</th>
                                            </tr>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td class="id">{{$product->id}}</td>
                                                    <td class="choose"><input class="cbChoose" type="checkbox" name="checkproduct"></td>
                                                    <td><img src="{{asset('img/'.$product->productimage[0]->image )}}" alt="" style="width: 90px"></td>
                                                    <td class="pro_name">{{$product->pro_name}}</td>
                                                    <td>{{$product->stock}}</td>
                                                    <td class="tdQty">
                                                        <input class="qty" type="number" name="qty">
                                                        <input class="productType" type="text" name="productType" value="{{$product->producttype->ptype_name}}" hidden>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{--While producttype chang--}}

                    <div class="card-body" style="height: auto; box-shadow: 1px 1px 1px 1px #B3E5FC; display: none" id="searContent">
                        <div  style="overflow: scroll;height: 800px">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="">
                                            <tr>
                                                <th style="background-color: #B3E5FC;text-align: center">ລະຫັດສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ເລືອກ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຮູບພາບ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">ຊື່ສິນຄ້າ</th>
                                                <th style="background-color: #B3E5FC;text-align: center">stock</th>
                                                <th style="background-color: #B3E5FC;text-align: center">qty</th>
                                            </tr>
                                            <tbody id="searchTable">

                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card" style="height: auto;box-shadow: 1px 1px 1px 1px #B3E5FC">
                <br>
                <div class="card-title">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-xl-2">

                            {{--Display who login no --}}
                            @if(session('user_id'))
                                <input type="text" class="LoginUser" id="LoginUser" value="{{session('user_id')}}" hidden>
                            @endif
                        </div>
                        <div class="col-md-8 col-lg-8 col-xl-8">
                            <h4>ເລືອກຜູ້ສະໜອງ</h4>
                            <select name="productType" id="supplier" class="form-control">
                                <option value="">ເລືອກຜູ້ສະໜອງ...</option>
                                @foreach($suppliers as $supplier )
                                    <option value="{{$supplier->id}}">{{$supplier->shop_name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <h4>ລະຫັດໃບຈັດຊື້</h4>
                            <input type="text" name="billOrderId"  id="billOrderId" class="form-control billOrderId" value="{{$maxImportID}}" disabled="">
                        </div>
                        <div class="col-md-2 col-lg-3 col-xl-2">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <br>
                    <div class="card-title">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-3">

                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6" style="text-align: center">
                                <input type="button" class="btn btn-success" value="ຕົກລົງ" name="OrderOut" id="OrderOut">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h6 style="color: #d39e00" id="Notification"></h6>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align: center">
                    <a href="{{route('orderOutBill')}}" class="btn btn-warning" id="printBill" style=" display: none; width: auto">ສ້າງໃບບິນ</a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align: center">
                    <a href="{{route('cancelOrderOut')}}" class="btn btn-danger" id="cancelPrntBill" style=" display: none; width: auto">ຍົກເລີກ</a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">

                </div>
                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 col-xl-11">
                    @if( Session::has('OrderOutList') && session('OrderOutList')['LoginUser'] != "null")
                        <a href="#contentCollapse1" class="" data-toggle="collapse">ສ້າງໃບຈັດຊື້ ລາຍການຄັ້ງກ່ອນ</a>
                        <br>
                        <br>
                        <div id="contentCollapse1" class="collapse">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align: right">
                                    <a href="{{route('orderOutBill')}}" class="btn btn-warning" style="width: auto">ສ້າງໃບບິນ</a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align: left">
                                    <a href="{{route('cancelOrderOut')}}" class="btn btn-danger" style=" width: auto">ຍົກເລີກ</a>
                                </div>
                            </div>
                        </div>
                    @else
                    @endif
                </div>
            </div>


        </div>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var order = {
        order_no: 0,
        supplier_no: 0,
        LoginUser: null,
        detail: [
        ]
    }

    $(function () {
        $('.cbChoose').click(function () {

            var choose = $(this)['0']['checked'];
            var id = $(this).parent().parent().children('td.id').text();
            var productName = $(this).parent().parent().children('td.pro_name').text();
            var pro_type = $(this).parent().parent().children('td.tdQty').children('input.productType').val();
            if(choose) {
                $(this).parent().parent().children('td.tdQty').children('input.qty').val(1);
                $(this).parent().parent().children('td.tdQty').children('input.qty').focus();
                order['order_no']= $("#billOrderId").val();
                order['LoginUser']= $('#LoginUser').val();
                order['detail'].push({
                    pro_id: id,
                    pro_name:productName,
                    qty: 1,
                    pro_type: pro_type,
                });
                console.log(order);
            } else {
                for(var i=0; i <  order['detail'].length; i++) {
                    if(order['detail'][i]['pro_id'] == id) {
                        order['detail'].splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().children('td.tdQty').children('input.qty').val("");
                console.log(order);
            }
        });
    });

    $('#supplier').change(function () {
        if($("#supplier").val() != ""){
            order['supplier_no']= $("#supplier").val();
        }
    });

    $('.qty').change(function () {
        var choosen = $(this).parent().parent().children('td.choose').children('input.cbChoose')['0']['checked'];
        if (choosen) {
            var id = $(this).parent().parent().children('td.id').text();
            var qty = $(this).val();
            for(var i=0; i <  order['detail'].length; i++) {
                if(order['detail'][i]['pro_id'] == id) {
                    order['detail'][i]['qty'] = qty;
                    break;
                }
            }
        }
    });



    $('#OrderOut').click(function () {
        if(order['supplier_no'] !=0 && order['order_no'] !=0 && order['detail'].length >0){
            $('#Notification').html("");

            $.ajax({
                url:'/postajax',
                type:'POST',
                data:order,
                dataType:'JSON',
                success: function(data){ // What to do if we succeed
                    $("#Notification").html(data);
                    document.getElementById('printBill').style.display = "block";
                    document.getElementById('cancelPrntBill').style.display = "block";
                }
            });
        }else{
            $('#Notification').html("ກລູນາກໍານົດຂໍ້ມູນໃຫ້ຄົບຖ້ວນ");
        }

    });

    $('#productType').change(function () {
//        console.log($(this).val());
        if($(this).val() != ""){
            var ptype_id = $(this).val();
            $.ajax({
                url:'/AdminOrderOutTypeChang/'+ptype_id,
                type:'POST',
                dataType:'JSON',
                success: function(data){
                    console.log(data);

                    if(data.length>0){
                        var seardetail = '';
                        for (var i=0;i<data.length;i++){
                            console.log(data);
                            seardetail += `
                                <tr>
                                    <td  class="id"> ${data[i]['id']} </td>
                                    <td  class="choose"> <input class="cbChoose" type="checkbox" name="checkproduct"> </td>
                                    <td>  <img class="img-responsive" src="http://localhost:8000/img/${data[i]['productimage'][0]['image']}" alt="http://localhost:8000/img/nopic.jpg" style="width: 90px; height: 100px">  </td>
                                    <td  class="pro_name"> ${data[i]['pro_name']} </td>
                                    <td> ${data[i]['stock']}  </td>
                                    <td class="tdQty">
                                        <input class="qty" type="number" name="qty">
                                        <input class="productType" type="text" name="productType" value="${data[i]['producttype']['ptype_name']}" hidden>
                                    </td>
                                </tr>

                            `;
                        }
                        $('#searContent').show();
                        $('#searchTable').html(seardetail);
                    }

                    $('#maincontain').hide();

                }
            });
        }else{
            $('#maincontain').show();
            $('#searContent').hide();
        }

    });


</script>
</html>