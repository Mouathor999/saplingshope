<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.6/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('css/customCSS.css')}}">

</head>
<body>
@include('frontEnd.masterpage.MainNavbar')
<div class="mainConten">
    <div class="row" style="margin-top: 2%">
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
            <div class="container container-fluid">
                @if(Session::has('cart'))

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <td><div ><b>ຮູບພາບ</b></div></td>
                                <td><div ><b>ຊື່ສິນຄ້າ</b></div></td>
                                <td><div ><b>ໂປຣໂມເຊີນ</b></div></td>
                                <td><div ><b>ຈໍານວນ</b></div></td>
                                <td><div ><b>ລາຄາຕໍ່ໜ່ວຍ</b></div></td>
                                <td><div ><b>ລາຄາຕໍ່ລາຍການ</b></div></td>
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
                                        <div class="text-left" style="width: 100px">
                                            <lable>{{$orderitems['item']['pro_name']}}</lable>


                                            <ul class="navbar-nav mr-auto">
                                                <li class="nav-item dropdown">
                                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-trash" style="color: orangered"></i> delete
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item">ລົບຂໍ້ມູນ</a>

                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="{{route('productcart.reduceOne',$orderitems['item']['id'])}}">ລົບ 1</a>
                                                        <a class="dropdown-item" href="{{route('productcart.reduceAll',$orderitems['item']['id'])}}">ລົບລາຍການ</a>
                                                    </div>
                                                </li>
                                            </ul>





                                            {{--<a href="{{route('productcart.reduceOne',$orderitems['item']['id'])}}" class="nav-link"><i class="fas fa-trash" style="color: orangered"></i> delete</a>--}}
                                        </div>

                                    </td>
                                    <td>
                                        <div class="div_in_td">
                                            @if(count($orderitems['item']->promotion) !=0)
                                                @foreach($orderitems['item']->promotion as $ppromotion)

                                                    @if($ppromotion->pivot->end_date >= date('Y-m-d'))
                                                        {{$ppromotion->pivot->promotion." %"}}
                                                    @else
                                                    @endif
                                                @endforeach
                                            @else
                                                {{"0"}}
                                            @endif


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
            <br>
            <hr>
            @if(Session::has('cart'))
            <div class="mainConten" style="margin-right: 10%">
                <div class="" style="text-align: right">
                    <h6><b>Total price: </b><span style=" color: mediumblue; font-size: 16px">{{$totalprice}}</span> ກີບ</h6>
                    <h6><b>Discount: </b><span style=" color: mediumblue; font-size: 16px"> 0 </span>ກີບ</h6>
                    <h6><b>Tax: </b><span style=" color: mediumblue; font-size: 16px">0 </span>ກີບ</h6>
                    <h6><b>SubTotal price: </b><span style=" color: mediumblue; font-size: 16px"> {{$totalprice}} </span>ກີບ</h6>
                </div>
            </div>
            @endif
            <div style="text-align: left;margin-left: 10%">
                <a href="{{route('CancelOrder')}}" class="btn btn-success">Cancel Order</a>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <div class="card" style="height: auto">
                <div class="card-title">
                    <h4><b>Check out</b></h4>
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <a href="{{route('CustomerSignIn')}}" class="btn btn-success" style="width: 100%">ສັ່ງຈອງ</a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <a href="{{route('orderSendDate')}}" class="btn btn-success" style="width: 100%">ສັ່ງຊື້</a>
                        </div>
                    </div>
                    <div class="" style="margin-top: 5%">

                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 3%;margin-top: 5%; background-color: #d1ecf1" id="cartAdversting">
                @for($a=1;$a<=10;$a++)
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 3%">
                            <img src="{{asset('img/nopic.jpg')}}" class="img-responsive" alt="" style="width: 100%;height: auto">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" style="margin-top: 3%">
                            product title <br>
                            <a class="btn btn-success" href="" style="font-size: 10px">add to cart</a>
                        </div>
                    @endfor
                    <br>
                    <br>
                -----------------------------------------------
            </div>
        </div>
    </div>
</div>


<script>
    var screenWith = window.innerWidth;
    if(screenWith< 514){
            document.getElementById('cartAdversting').style.display='None' ;
            document.write(screenWith);
    }else {
        document.getElementById('cartAdversting').style.display='' ;
    }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>