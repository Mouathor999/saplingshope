<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body{
            font-family: dejavusans;
            font-size: 12px;
        }
    </style>

</head>
<body>

<div style="text-align: center; font-size: 14px">
    <b>ໃບສັ່ງຊື້ສິນຄ້າຂອງລູກຄ້າຈາກຮ້ານຈັນຟອງ</b>
</div>
    <div style="margin-left: 5%; margin-top: 10px">
        <div>

            <div style="float: left; width: 300px" >
                <b> Order ID :</b> {{$orderID}} <br/>
                <b> Customer ID :</b> {{$customerInfor->id}} <br/>
                <b> Customer Name :</b>{{$customerInfor->cus_name}} <br/>
                <b> Customer Village :</b> {{$customerInfor->village}}<br/>
                <b> Customer District :</b> {{$customerInfor->district}} <br/>
                <b> Customer Province :</b> {{$customerInfor->province}} <br/>
                <b> Customer Tel :</b> {{$customerInfor->tel}} <br/>
            </div>
            <div  style="float: right; width: 300px">
                <b>Shope name:</b> Chanphong Shop<br/>
                <b>Bank account : </b>160120001029770001<br/>
                <b> Shope Contack 1 :</b> 021 200342<br/>
                <b>Contack 2 :</b> 0305989990<br/>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <table style="width: 100%">
                <tr>
                    {{--<th  style="  padding: 10px;"><div style="width: 50px">Picture</div></th>--}}
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Product name</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Promotion</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Quantity</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Sale price</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Total price</div></th>
                </tr>
                @foreach($orderCart as $cartItem)

                    <tr>
                        {{--<td style="text-align: center"><img src="{{asset(public_path().'img/')}}" alt="" style="width: 100px;height: 100px"></td>--}}
                        <td style=" padding: 10px;text-align: center;">{{$cartItem['item']->pro_name}}</td>
                        <td style=" padding: 10px;text-align: center;">
                        @if(count($cartItem['item']->promotion) !=0)
                                @foreach($cartItem['item']->promotion as $ppromotion)

                                        @if($ppromotion->pivot->end_date >= date('Y-m-d'))
                                            {{$ppromotion->pivot->promotion." %"}}
                                        @else
                                        @endif
                                @endforeach
                           @else
                                {{"0"}}
                        @endif
                        </td>
                        <td style=" padding: 10px;text-align: center;">{{$cartItem['qty']}}</td>
                        <td style=" padding: 10px;text-align: center;">{{$cartItem['item']->sale_price}}</td>
                        <td style=" padding: 10px;text-align: center;">{{$cartItem['qty']*$cartItem['item']->sale_price}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div style="margin-top: 10%; float: right; width: 200px;">
            <span style=" color: mediumblue; font-size: 16px">Sub total price :</span>  {{$subTotalPrice." ກີບ"}}

        </div>



         {{--test product promotion--}}
        {{--@foreach($orderCart as $cartItem)
            @if(count($cartItem['item']->promotion) !=0)
                <div>
                    @foreach($cartItem['item']->promotion as $ppromotion)
                       --}}{{-- @if($ppromotion)

                         @else
                        @endif  --}}{{--
                        <div>
                            @if($ppromotion->pivot->end_date >= date('Y-m-d'))
                                {{$ppromotion->pivot->promotion}}
                             @else
                            @endif

                        </div>
                        <br>
                     @endforeach
                    --}}{{--{{$cartItem['item']->promotion}}--}}{{--
                </div>
             @else

            @endif

        @endforeach--}}




        <div>

        </div>

    </div>




</body>
</html>