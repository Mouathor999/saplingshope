<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">
</head>
<body>
<br>
<div class="mainConten">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <b>ລະຫັດສັ່ງຊື້ :</b>  <br/>
            <b> ຊື້່ :</b> {{session('cus_name')}} <br/>
            <b> ບ້ານ :</b> {{session('village')}} <br/>
            <b> ເມືອງ :</b> {{session('district')}} <br/>
            <b> ແຂວງ :</b> {{session('province')}} <br/>
            <b> ໂທລະສັບ :</b> {{session('cus_tel')}} <br/>


        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-right">

            <b> ຊື່ຮ້ານ :</b> ຮ້ານ ຈັນຟອງ<br/>
            <b> ບັນຊີທະນາຄານ:</b> 160120001029770001<br/>
            <b> ໂທລະສັບ  :</b> 021 200342<br/>
            <b>&nbsp;&nbsp;&nbsp;&nbsp; :</b> 0305989990<br/>

        </div>
    </div>

    <div class="row" style="margin-top: 2%">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            @if(Session::has('cart'))

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <td><div class="div_in_td"><b>ຮູບພາບ</b></div></td>
                            <td><div class="div_in_td"><b>ຊື່ສິນຄ້າ</b></div></td>
                            <td><div class="div_in_td"><b>ຈໍານວນ</b></div></td>
                            <td><div class="div_in_td"><b>ລາຄາຕໍ່ໜ່ວຍ</b></div></td>
                            <td><div class="div_in_td"><b>ລາຄາຕໍ່ລາຍການ</b></div></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderCart as $orderitems)
                            {{-- <div>
                                 {{$orderitems['qty']." ".$orderitems['price']." ".$orderitems['item']['pro_name']." ".$orderitems['item']['sale_price']}}
                             </div>--}}
                            <tr>
                                <td>
                                    <div class="div_in_td">
                                        @foreach($Products as $ProductImage)
                                            @if($orderitems['item']['id']== $ProductImage->productimage[0]->product_id)
                                                <li class="list-group-item">
                                                    <img src="{{asset('img/'.$ProductImage->productimage[0]->image)}}" alt="" style="width: 100px; height: 100px">
                                                </li>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    <div class="text-left" style="width: 300px">
                                        <lable>{{$orderitems['item']['pro_name']}}</lable>
                                    </div>

                                </td>
                                <td>
                                    <div class="div_in_td">{{$orderitems['qty']}}</div>
                                </td>
                                <td>
                                    <div class="div_in_td">{{$orderitems['item']['sale_price']}}</div>
                                </td>
                                <td>
                                    <div class="div_in_td">{{$orderitems['price']}}</div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                {{"Empty cart"}}
            @endif
        </div>
    </div>
    <hr>
    <div style="margin-top: 10px;margin-bottom: 10px; text-align: right; margin-right: 20px">
        <a href="{{route('product.index')}}" class="btn btn-success" ><b>Home</b></a>
    </div>
    <div style="background-color: #7DA0B1;" class="text-center">
        <br>
        <h3 style="color: white">
           <b>Don't Forget save your Bill</b>
        </h3>
        <a href="{{route('getTotalPrice')}}" class="btn btn-warning" ><b>Save As PDF</b></a>
        <h3>-----oooo-----</h3>
    </div>





    <div>
        @if(session('username') == "null" && session('password'=='null'))
            <div style="text-align: center">
                <br>
                <br>
                <h3 style="color: #d39e00">
                    ທ່ານໄດ້ບັກທືກໃບສັ່ງຊື້ສິນຄ້າແລ້ວ.
                </h3>
            </div>
        @else

        @endif
    </div>




</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>