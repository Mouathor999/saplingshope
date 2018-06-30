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
@if(Session::has('OrderOutList'))
<div class="mainConten">

        <div class="row">
            <div class=" col-md-1 col-lg-1 col-xl-1">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <p><h5><b>ຂໍ້ມູນຜູ້ສະໜອງ</b></h5></p>
                <hr style="width: 50%; margin-left: 0px; background-color: #c82333">
                <b> ຊື່ຮ້ານ :</b> {{$supplier[0]->shop_name}} <br/>
                <b>  ບ້ານ :</b>{{$supplier[0]->village}} <br/>
                <b>  ເມືອງ :</b> {{$supplier[0]->district}} <br/>
                <b>  ແຂວງ :</b> {{$supplier[0]->province}} <br/>
                <b>  ໂທລະສັບ :</b> {{$supplier[0]->tel}} <br/>


            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 text-right">
                <p><h5><b>ຂໍ້ມູນເພີ່ມເຕີມ</b></h5></p>
                <hr style="width: 50%; margin-right: 0px; background-color: #c82333">
                <b>ລະຫັດໃບບິນ:</b><label style="margin-left: 20px">{{Session::get('OrderOutList')['order_no']}}</label><br/>
                <b>ສັ່ງຊື້ໂດຍ : </b><label style="margin-left: 20px">{{Session::get('OrderOutList')['LoginUser']}}</label><br/>
            </div>
        </div>

        {{--Return session in laravel blade file--}}


        {{--<div>
            <br>
            order_no
            {{Session::get('OrderOutList')['order_no']}}
            <br>
            supplier
            {{Session::get('OrderOutList')['supplier_no']}}
            productid and  qty
            <br>
            @foreach(Session::get('OrderOutList')['detail'] as $detail)
                 {{$detail['pr_id']}}
                 {{$detail['qty']}}

                <br>
            @endforeach
        </div>--}}

        <div class="container container-fluid">
            <div class="row" style="margin-top: 2%">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td><div class="div_in_td"><b>ລະຫັດສິນຄ້າ</b></div></td>
                                <td><div class="div_in_td"><b>ຊື່ສິນຄ້າ</b></div></td>
                                <td><div class="div_in_td"><b>ປະເພດສິນຄ້າ</b></div></td>
                                <td><div class="div_in_td"><b>ຈໍານວນສັ່ງຊື້</b></div></td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(Session::get('OrderOutList')['detail'] as $detail)
                                <tr>
                                    <td><div class="div_in_td"><b>{{$detail['pro_id']}}</b></div></td>
                                    <td><div class="div_in_td"><b>{{$detail['pro_name']}}</b></div></td>
                                    <td><div class="div_in_td"><b>{{$detail['pro_type']}}</b></div></td>
                                    <td><div class="div_in_td"><b>{{$detail['qty']}}</b></div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div style="margin-top: 10px;margin-bottom: 10px; text-align: right; margin-right: 20px">
            <a href="{{route('orderOutForm')}}" class="btn btn-success" ><b>ໜ້າສັ່ງຊື້</b></a>
        </div>
        <div class="text-center">
            <a href="{{route('storeOrderOut')}}" class="btn btn-warning" ><b>ພີມໃບຈັດຊື້</b></a>
        </div>
        <h3 style="text-align: center">-----oooo-----</h3>
        <div>
            @if(session('OrderOutList')['LoginUser'] == "null")
                <div style="text-align: center">
                    <br>
                    <br>
                  <h3 style="color: #d39e00">
                        ທ່ານໄດ້ບັກທືກໃບຈັດຊື້ແລ້ວ.
                  </h3>
                </div>
                @else

            @endif
        </div>
</div>
@else
    <div>
        {{"Empty cart"}}
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>