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
                <b> ລະຫັດສັ່ງຊື້ :</b> {{$orderID}} <br/>
                <b> ລະຫັດລູກຄ້າ :</b> {{$customerInfor->id}} <br/>
                <b> ຊື່ :</b>{{$customerInfor->cus_name}} <br/>
                <b> ບ້ານ :</b> {{$customerInfor->village}}<br/>
                <b> ເມືອງ :</b> {{$customerInfor->district}} <br/>
                <b> ແຂວງ :</b> {{$customerInfor->province}} <br/>
                <b> ໂທລະສັບ :</b> {{$customerInfor->tel}} <br/>
            </div>
            <div  style="float: right; width: 200px; margin-right: 0px">
                <b>ຊື່ຮ້ານ:</b> ຮ້ານ ຈັນຟອງ<br/>
                <b>ບັນຊີທະນາຄານ : </b>160120001029770001<br/>
                <b> ໂທລະສັບ :</b> 021 200342<br/>
                <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b> 0305989990<br/>
            </div>
        </div>
        <br>
        <br>
        <div class="container">
            <table style="width: 100%">
                <tr>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Product name</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Promotion</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Quantity</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Sale price</div></th>
                    <th style="  padding: 10px; background-color: #B3E5FC" ><div style=" text-align: center;">Total price</div></th>
                </tr>
                  @foreach($CusOrderList as $OrderItem)
                  <tr>
                      <td style=" padding: 10px;text-align: center;">{{$OrderItem->pro_name}}</td>
                          <td style=" padding: 10px;text-align: center;">{{$OrderItem->product_promotion}}&nbsp; %</td>
                          <td style=" padding: 10px;text-align: center;">{{$OrderItem->quantity}}</td>
                          <td style=" padding: 10px;text-align: center;">{{$OrderItem->sale_price}}</td>
                          <td style=" padding: 10px;text-align: center;">{{$OrderItem->total_price}}</td>
                      </tr>
                @endforeach
            </table>
        </div>
        <div style="margin-top: 10%; float: right; width: 200px;">
            <span style=" color: mediumblue; font-size: 16px">Sub total price :</span>  {{session('Cus_TotalMoney')}} ກີບ

        </div>
    </div>

</body>
</html>